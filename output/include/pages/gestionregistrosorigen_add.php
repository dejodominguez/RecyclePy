<?php
			$optionsArray = array( 'master' => array( 'public.MedTipoOrigen' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'IdResiduo',
'IdMedTipOrigen',
'CantidadOrigen',
'FotoOrigen',
'GPSMapaGoo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'IdResiduo' => array( 'integrated_edit_field' ),
'IdMedTipOrigen' => array( 'integrated_edit_field1' ),
'CantidadOrigen' => array( 'integrated_edit_field3' ),
'FotoOrigen' => array( 'integrated_edit_field4' ),
'GPSMapaGoo' => array( 'integrated_edit_field5',
'edit_field_label',
'edit_field_tooltip' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'loginform_login',
'username_button' ),
'left' => array( 'logo1',
'expand_button',
'menu' ),
'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4',
'edit_field_label',
'integrated_edit_field5',
'edit_field_tooltip' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'edit_field_label' => 'grid',
'integrated_edit_field5' => 'grid',
'edit_field_tooltip' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'edit_field_label' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c' ),
'edit_field_tooltip' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'breadcrumb' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'collapse_button' => array( 'collapse_button' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4' ),
'edit_field' => array( 'integrated_edit_field5' ),
'logo' => array( 'logo1' ),
'edit_field_label' => array( 'edit_field_label' ),
'edit_field_tooltip' => array( 'edit_field_tooltip' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'master_info' => array( 'master_info' ),
'username_button' => array( 'username_button' ),
'changepassword_link' => array( 'changepassword_link' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'edit_field_label',
'integrated_edit_field5',
'edit_field_tooltip' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 2 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center',
'background' => '#9ee6b2' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field4' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'persistent' => false ),
'c' => array( 'model' => 'c3',
'items' => array( 'edit_field_label',
'integrated_edit_field5',
'edit_field_tooltip' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'persistent' => false ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu',
'mobileControl' => 'always' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'integrated_edit_field' => array( 'field' => 'IdResiduo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'IdMedTipOrigen',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'CantidadOrigen',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'FotoOrigen',
'type' => 'integrated_edit_field',
'orientation' => 0,
'mobileControl' => 'always' ),
'integrated_edit_field5' => array( 'field' => 'GPSMapaGoo',
'type' => 'edit_field',
'orientation' => 0,
'mobileControl' => 'always',
'mobileDisplay' => '',
'tooltip' => array( 'field' => 'GPSMapaGoo',
'table' => 'public.GestionRegistrosOrigen',
'type' => 4 ),
'placeholder' => array( 'field' => 'GPSMapaGoo',
'table' => null,
'type' => 5 ),
'joined' => false,
'separated' => true ),
'logo1' => array( 'type' => 'logo' ),
'edit_field_label' => array( 'type' => 'edit_field_label',
'field' => 'GPSMapaGoo',
'separated' => true,
'label' => array( 'field' => 'GPSMapaGoo',
'table' => 'public.GestionRegistrosOrigen',
'type' => 3 ) ),
'edit_field_tooltip' => array( 'type' => 'edit_field_tooltip',
'field' => 'GPSMapaGoo',
'separated' => true,
'tooltip' => array( 'field' => 'GPSMapaGoo',
'table' => 'public.GestionRegistrosOrigen',
'type' => 4 ) ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'public.Usuarios' => 'true' ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>