<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_usuario',
'nombre_usuario',
'password',
'email',
'nombre_completo',
'id_tipo_usu',
'active',
'ext_security_id',
'direc_usuario',
'id_barrio',
'tel_usuario',
'two_factor',
'totp_secret' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_usuario' => array( 'import_field' ),
'nombre_usuario' => array( 'import_field1' ),
'password' => array( 'import_field2' ),
'email' => array( 'import_field3' ),
'nombre_completo' => array( 'import_field4' ),
'id_tipo_usu' => array( 'import_field5' ),
'active' => array( 'import_field6' ),
'ext_security_id' => array( 'import_field7' ),
'direc_usuario' => array( 'import_field8' ),
'id_barrio' => array( 'import_field9' ),
'tel_usuario' => array( 'import_field10' ),
'two_factor' => array( 'import_field11' ),
'totp_secret' => array( 'import_field12' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id_usuario',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'nombre_usuario',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'password',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'nombre_completo',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'id_tipo_usu',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'active',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'ext_security_id',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'direc_usuario',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'id_barrio',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'tel_usuario',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'two_factor',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'totp_secret',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>