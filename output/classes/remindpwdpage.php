<?php
class RemindPasswordPage extends RunnerPage
{
	public $action = "";
	public $userEmail = "";
	
	protected $reminded = false;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailField;
	
	
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();		
		$this->emailField = "Email";
		
		if( $this->getLayoutVersion() === PD_BS_LAYOUT ) 
		{
			$this->headerForms = array( "top" );
			$this->footerForms = array( "footer" );
			$this->bodyForms = array( "above-grid", "grid", "superbottom" );
		} 
		else
		{
			$this->formBricks["header"] = "remindheader";
			$this->formBricks["footer"] = "remindbuttons";
			$this->assignFormFooterAndHeaderBricks( true );	
		}	
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}
	
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}

	function getCaptchaId() 
	{
		return "remind";
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRemind") )
			$globalEvents->BeforeProcessRemind( $this );	

		if ( $this->action == "Remind" )
		{	
			$this->reminded = $this->remindPassword();
			
			if( !$this->reminded && $this->mode == REMIND_POPUP ) 
			{
				$returnJSON = array();
				$returnJSON['message'] = $this->message;
				
				echo printJSON( $returnJSON );
				exit();
			}
		}

		if ( $this->reminded )
		{
			$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );				
			$this->pSet = new ProjectSettings( $this->tName, $this->successPageType(), $this->pageName, $this->pageTable );
			
			$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $this->pSet->buttons() );
			foreach( $this->pSet->buttons() as $b ) {
				$this->AddJSFile( "include/button_".$b.".js" );
			}
		} 

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();
	
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * @return Boolean
	 */
	protected function remindPassword()
	{		
		global $globalEvents;
		
		if( !$this->checkCaptcha() )
		{
			$this->message = "Codigo de seguridad no válido";
			return false;
		}
						
		$strSQLData = $this->getUserSearchingSQLData();
		$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQLData["sql"] )->fetchAssoc() );
		if( $data )
		{
			$username = $data[ $this->usernameFiled ];
			$email = $data[ $this->emailField ];
			$password = $data[ $this->passwordFiled ];
		}
	
		$tosearch = strlen( $this->userEmail ) > 0;
	
		if( $tosearch && $globalEvents->exists("BeforeRemindPassword") )
			$tosearch = $globalEvents->BeforeRemindPassword( $username, $email, $this );
		
		if( !$tosearch || !$data )
		{
			$this->message = "Usuario"." ".runner_htmlspecialchars($this->userEmail)." "."no registrado";
			return false;
		}
		
		$dbPassword = $password;
		$token = "";
		if( $this->remindMethod() == RPM_RESET )
		{
			$token = generatePassword(20);
			
			$this->connection->exec("update ".$this->connection->addTableWrappers("public.Usuarios")." set "
				.$this->connection->addFieldWrappers( "" )."=". $this->connection->prepareString( $token ).","
				.$this->connection->addFieldWrappers( "" )."=". $this->connection->addDateQuotes( now() ).""
				." where ".$strSQLData["where"]);
		} 
		else
		{
		
		}
		
		$reminded = $this->sendRemindEmail( $username, $password, $email, $token, $dbPassword );
		
		if( $reminded ) 
		{
			if( $globalEvents->exists("AfterRemindPassword") )
				$globalEvents->AfterRemindPassword( $username, $email, $this );
		}
		
		return $reminded;
	}
	
	/**
	 * @return String
	 */
	protected function remindMethod()
	{
		return RPM_SEND;
	}
	
	/**
	 * @param String username
	 * @param String password
	 * @param String email
	 * @param String token
	 * @param String dbPassword
	 * @return Boolean
	 */
	protected function sendRemindEmail( $username, $password, $email, $token, $dbPassword )
	{
		$data = array();
		$url = projectURL() . GetTableLink( "remind" ) ;
		

		$userData = Security::getUserData($username);
		if ( $userData )
		{
			foreach ($userData as $field => $value) {
				$data[goodFieldName($field)] = $value;
			}
		}
		

		if( $this->remindMethod() == RPM_RESET )
		{
			$template = "resetpassword";
			$data["reseturl"] = str_replace("/remind", "/changepwd", $url)."?token=".$token;
		}
		else
		{
			$template = "remindpassword";
			$data["loginurl"] =  str_replace("/remind", "/login", $url)."?username=".rawurlencode( $username );
			$data["username"] = $username;
			$data["password"] = $password;
		}

		$sentMailResults = RunnerPage::sendEmailByTemplate($email, $template, $data);

		if( !@$sentMailResults["mailed"] )
		{
			$this->message = $sentMailResults["message"];
			if( !$this->message )
				$this->message = "Usuario"." ".runner_htmlspecialchars($this->userEmail)." "."no registrado";
		}
	
		return @$sentMailResults["mailed"];	
	}
	
	/**
	 * @return Array
	 */
	protected function getUserSearchingSQLData()
	{
		global $cUserNameFieldType, $cEmailFieldType;		

		if( $this->pSet->usersTableInProject() ) 
		{
			$fullcUserNameField = $this->getFieldSQLDecrypt( $this->usernameFiled );
			$fullcEmailField = $this->getFieldSQLDecrypt( $this->emailField );
			$fullcPasswordField = $this->getFieldSQLDecrypt( $this->passwordFiled );
		} 
		else 
		{
			$fullcUserNameField = $this->connection->addTableWrappers( "public.Usuarios" ).".".$this->connection->addFieldWrappers( $this->usernameFiled );
			$fullcEmailField = $this->connection->addTableWrappers( "public.Usuarios" ).".".$this->connection->addFieldWrappers( $this->emailField );
			$fullcPasswordField = $this->connection->addTableWrappers( "public.Usuarios" ).".".$this->connection->addFieldWrappers( $this->passwordFiled );
		}
		
		$sWhere = "(". $this->connection->comparisonSQL( 
				$fullcUserNameField, 
				$this->getSqlPreparedLoginTableValue( $this->userEmail, $this->usernameFiled, $cUserNameFieldType ), 
				$this->pSet->isCaseInsensitiveUsername() 
			);
		
		$sWhere.= " or ". $this->connection->comparisonSQL( 
				$fullcEmailField, 
				$this->getSqlPreparedLoginTableValue( $this->userEmail, $this->emailField, $cEmailFieldType ),
				true
			).")";
		
		$selectClause = "select ".$fullcUserNameField
			." as ".$this->connection->addFieldWrappers( $this->usernameFiled )
			.",".$fullcPasswordField." as ".$this->connection->addFieldWrappers( $this->passwordFiled );
		
		// prevent aliases mixing
		if( $this->usernameFiled != $this->emailField )
			$selectClause.= ",".$fullcEmailField." as ".$this->connection->addFieldWrappers( $this->emailField );

		
		$strSQLData = array();
		$strSQLData["where"] = $sWhere;		
		$strSQLData["sql"] = $selectClause." from ".$this->connection->addTableWrappers("public.Usuarios")." where ".$sWhere;
		
		return $strSQLData;
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		
		$this->xt->assign("username_email_attrs", ($this->is508 ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars( $this->userEmail )."\"");		
		
		$this->xt->assign("submit_attrs", "onclick='document.forms.form1.submit();return false;'");
		if( $this->mode == REMIND_POPUP && !$this->reminded ) 
		{			
			$this->xt->assign("backlink_attrs", 'style="display:none"');
			$this->xt->assign("submit_attrs","id='submitRemind'");				
		}			

		$this->xt->assign("username_email_label", true);

		if( $this->is508 )
			$this->xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");

		if( $this->message || ( $this->mode == REMIND_POPUP && !$this->reminded ) )
		{
			if ( $this->isBootstrap() )
			{
				$this->xt->assign("message_class", "alert-danger" );
				$this->xt->assign("message", $this->message);
			}
			else 
			{
				$this->xt->assign("message","<div class='message rnr-error'>".$this->message."</div>");
			}
			
			$this->xt->assign("message_block", true);
			
			if( $this->mode == REMIND_POPUP && !$this->reminded ) 
				$this->hideElement("message");
		}

		$this->xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');

		if( $this->mode == REMIND_SIMPLE )
			$this->assignBody();		
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"].= GetBaseScriptsForPage(false);

		$this->body["begin"].= "<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
		<input type=hidden name=btnSubmit value=\"Remind\">";
	
		$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
		$this->xt->assign("body", $this->body);	
	}	
	
	/**
	 * Assign body end
	 * @intellisense
	 */	
	function assignBodyEnd($params = "") 
	{
		global $pagesData;
		
		$this->fillSetCntrlMaps();
		echo "</form>";
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			Runner.applyPagesData( ".my_json_encode( $pagesData )." );
			window.settings = ".my_json_encode($this->jsSettings)."; 
			</script>\r\n";

		echo "<script language=\"JavaScript\" src=\""
			.GetRootPathForResources("include/runnerJS/RunnerAll.js?37251")."\"></script>\r\n";
		
		echo "<script>".$this->PrepareJS()."</script>";
	}	
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;

		if( $this->reminded )
		{
			$this->switchToSuccessPage();
			//$this->templatefile = GetTemplateName("", "remind_success");
		}
		
		if( $globalEvents->exists("BeforeShowRemindPwd") )
			$globalEvents->BeforeShowRemindPwd( $this->xt, $this->templatefile, $this );

			
		if( $this->mode == REMIND_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);	// true if reminded?			
			
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		$this->display( $this->templatefile );	
	}
	
	/**
	 * @return String
	 */	
	public static function readActionFromRequest()
	{		
		return postvalue("btnSubmit");
	}
	
	/**
	 * @return Number
	 */
	public static function readRemindModeFromRequest()
	{
		$pageMode = postvalue("mode");
		
		if( $pageMode == "popup" )
			return REMIND_POPUP;
			
		return REMIND_SIMPLE;
	}	
}
?>