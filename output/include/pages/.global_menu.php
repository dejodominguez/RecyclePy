<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'breadcrumb' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'public.Recicladores',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'public.GestionPesosResiduos',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'public.Residuos',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'above-grid' => array( 'breadcrumb' ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'breadcrumb' => 'above-grid',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'breadcrumb' => array( 'breadcrumb' ),
'welcome_item' => array( 'welcome_item',
'welcome_item2',
'welcome_item1' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 8,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
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
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'public.Recicladores',
'linkPage' => 'list',
'linkText' => array( 'table' => 'public.Recicladores',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'shopping-cart' ),
'linkComments' => array( 'text' => 'Recicladores description',
'type' => 0 ),
'background' => '#008B8B' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'public.Residuos',
'linkPage' => 'list',
'linkText' => array( 'table' => 'public.Residuos',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'earphone' ),
'linkComments' => array( 'text' => 'Residuos description',
'type' => 0 ),
'background' => '#4169E1' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'public.GestionPesosResiduos',
'linkPage' => 'list',
'linkText' => array( 'table' => 'public.GestionPesosResiduos',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Gestion Pesos Residuos description',
'type' => 0 ),
'background' => '#E67349' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>