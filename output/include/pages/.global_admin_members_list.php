<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'username_button' ),
'top' => array( 'breadcrumb',
'loginform_login' ),
'above-grid' => array( 'members_save',
'members_reset',
'members_choose_columns',
'members_displaying_filter' ),
'below-grid' => array(  ),
'grid' => array( 'members_username_label',
'members_displayname_label',
'members_email_label',
'members_groupname_label',
'members_search',
'members_all_users_checkbox',
'members_all_groups_checkbox',
'members_username',
'members_displayname',
'members_email',
'members_group_checkbox' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'guestloginbutton' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'username_button' => 'supertop',
'breadcrumb' => 'top',
'loginform_login' => 'top',
'members_save' => 'above-grid',
'members_reset' => 'above-grid',
'members_choose_columns' => 'above-grid',
'members_displaying_filter' => 'above-grid',
'members_username_label' => 'grid',
'members_displayname_label' => 'grid',
'members_email_label' => 'grid',
'members_groupname_label' => 'grid',
'members_search' => 'grid',
'members_all_users_checkbox' => 'grid',
'members_all_groups_checkbox' => 'grid',
'members_username' => 'grid',
'members_displayname' => 'grid',
'members_email' => 'grid',
'members_group_checkbox' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'members_save' => array( 'members_save' ),
'members_reset' => array( 'members_reset' ),
'members_choose_columns' => array( 'members_choose_columns' ),
'members_displaying_filter' => array( 'members_displaying_filter' ),
'members_username_label' => array( 'members_username_label' ),
'members_displayname_label' => array( 'members_displayname_label' ),
'members_email_label' => array( 'members_email_label' ),
'members_groupname_label' => array( 'members_groupname_label' ),
'members_search' => array( 'members_search' ),
'members_all_users_checkbox' => array( 'members_all_users_checkbox' ),
'members_username' => array( 'members_username' ),
'members_group_checkbox' => array( 'members_group_checkbox' ),
'members_all_groups_checkbox' => array( 'members_all_groups_checkbox' ),
'members_displayname' => array( 'members_displayname' ),
'members_email' => array( 'members_email' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'exit_adminarea_link' => array( 'exit_adminarea_link' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'admin_members_list',
'type' => 'admin_members_list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'admin-topbar-menu',
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
'items' => array( 'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'admin-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb',
'loginform_login' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'admin-members-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'members_save',
'members_reset' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'members_choose_columns',
'members_displaying_filter' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'admin-header',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'admin-members-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'hcell_username' ),
array( 'cell' => 'hcell_displayname' ),
array( 'cell' => 'hcell_email' ),
array( 'cell' => 'hcell_groupname' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'hcell_search' ),
array( 'cell' => 'hcell_dn' ),
array( 'cell' => 'hcell_e' ),
array( 'cell' => 'hcell_all_checkbox' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_u' ),
array( 'cell' => 'cell_dn' ),
array( 'cell' => 'cell_e' ),
array( 'cell' => 'c_gn' ) ),
'section' => 'body' ) ),
'cells' => array( 'hcell_username' => array( 'model' => 'hcell_username',
'items' => array( 'members_username_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_displayname' => array( 'model' => 'hcell_displayname',
'items' => array( 'members_displayname_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_email' => array( 'model' => 'hcell_email',
'items' => array( 'members_email_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_groupname' => array( 'model' => 'hcell_groupname',
'items' => array( 'members_groupname_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_search' => array( 'model' => 'hcell_search',
'items' => array( 'members_search' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_dn' => array( 'model' => 'hcell_dn',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_e' => array( 'model' => 'hcell_e',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_all_checkbox' => array( 'model' => 'hcell_all_checkbox',
'items' => array( 'members_all_users_checkbox' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_u' => array( 'model' => 'cell_u',
'items' => array( 'members_all_groups_checkbox',
'members_username' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_dn' => array( 'model' => 'cell_dn',
'items' => array( 'members_displayname' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_e' => array( 'model' => 'cell_e',
'items' => array( 'members_email' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c_gn' => array( 'model' => 'c_gn',
'items' => array( 'members_group_checkbox' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'members_save' => array( 'type' => 'members_save' ),
'members_reset' => array( 'type' => 'members_reset' ),
'members_choose_columns' => array( 'type' => 'members_choose_columns' ),
'members_displaying_filter' => array( 'type' => 'members_displaying_filter' ),
'members_username_label' => array( 'type' => 'members_username_label' ),
'members_displayname_label' => array( 'type' => 'members_displayname_label' ),
'members_email_label' => array( 'type' => 'members_email_label' ),
'members_groupname_label' => array( 'type' => 'members_groupname_label' ),
'members_search' => array( 'type' => 'members_search' ),
'members_all_users_checkbox' => array( 'type' => 'members_all_users_checkbox' ),
'members_username' => array( 'type' => 'members_username' ),
'members_group_checkbox' => array( 'type' => 'members_group_checkbox' ),
'members_all_groups_checkbox' => array( 'type' => 'members_all_groups_checkbox' ),
'members_displayname' => array( 'type' => 'members_displayname' ),
'members_email' => array( 'type' => 'members_email' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'loginform_login' => array( 'type' => 'loginform_login' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'exit_adminarea_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'exit_adminarea_link' => array( 'type' => 'exit_adminarea_link' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>