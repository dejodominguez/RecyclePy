<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'id_ges_pes_residuo',
'concat',
'kilo_residuo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_ges_pes_residuo' => array( 'integrated_edit_field' ),
'concat' => array( 'integrated_edit_field1' ),
'kilo_residuo' => array( 'integrated_edit_field4' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'top' => array( 'view_header' ),
'grid' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field4',
'details_preview',
'integrated_edit_field1' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'view_header' => 'top',
'master_info' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field4' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field1' => 'grid' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field4' ),
'master_info' => array( 'master_info' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field4',
'details_preview',
'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'menu' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
'integrated_edit_field',
'integrated_edit_field4',
'details_preview',
'integrated_edit_field1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'id_ges_pes_residuo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'concat',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'kilo_residuo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'public.recicladores' => 'true',
'public.residuos' => 'true' ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'public.detalles_ventas',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>