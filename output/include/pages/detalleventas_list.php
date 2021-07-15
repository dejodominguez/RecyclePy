<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'public.GestionPesosResiduos' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => true ) ),
'master' => array( 'public.Ventas' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'ID' => array( 'totalsType' => '' ),
'Cantidad' => array( 'totalsType' => '' ),
'Precio' => array( 'totalsType' => 'TOTAL' ),
'IDVenta' => array( 'totalsType' => '' ),
'IdFGesPesResiduo' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Cantidad',
'Precio',
'IdFGesPesResiduo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'Cantidad',
'IdFGesPesResiduo',
'IDVenta',
'Precio',
'ID' ),
'filterFields' => array(  ),
'inlineAddFields' => array( 'Cantidad',
'Precio',
'IdFGesPesResiduo' ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'Cantidad' => array( 'simple_grid_field1',
'simple_grid_field3' ),
'Precio' => array( 'simple_grid_field2',
'simple_grid_field5',
'grid_field_totals1' ),
'IdFGesPesResiduo' => array( 'simple_grid_field4',
'simple_grid_field' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'inline_add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field4',
'simple_grid_field3',
'simple_grid_field1',
'simple_grid_field5',
'simple_grid_field2',
'grid_field_totals1',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_checkbox_head',
'grid_checkbox',
'grid_alldetails_link',
'grid_details_link1' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'grid_field_totals1' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link1' => 'grid',
'master_info' => 'top' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field_totals1' => array( 'location' => 'grid',
'cellId' => 'footcell_field2' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_details' ) ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field4' ),
'print_details' => array( 'print_details' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link1' ),
'logo' => array( 'logo1' ),
'master_info' => array( 'master_info' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field3',
'simple_grid_field5' ),
'grid_field_totals' => array( 'grid_field_totals1' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'IdFGesPesResiduo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'Cantidad_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Precio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'IdFGesPesResiduo_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'Cantidad_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Precio_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array( 'Precio_fieldfootercolumn' ),
'items' => array( 'grid_field_totals1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
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
'items' => array( 'menu',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'IdFGesPesResiduo',
'align' => 'left',
'columnName' => 'field',
'background' => '#9ee6b2' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'IdFGesPesResiduo',
'columnName' => 'field',
'align' => 'left' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'Cantidad',
'columnName' => 'field',
'align' => 'left',
'background' => '#9ee6b2' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'Cantidad',
'columnName' => 'field',
'align' => 'left' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ),
'align' => 'left' ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'Precio',
'columnName' => 'field',
'align' => 'left',
'background' => '#9ee6b2' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'Precio',
'columnName' => 'field',
'align' => 'left' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array( 'grid_field_totals1' ),
'field' => 'Precio',
'columnName' => 'field',
'align' => 'left' ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons',
'background' => '#9ee6b2' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox',
'background' => '#9ee6b2' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ),
'columnName' => 'details',
'background' => '#9ee6b2' ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link1' ),
'columnName' => 'details' ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ),
'columnName' => 'details' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'Cantidad',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'ID',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'Precio',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'grid_view' => array( 'type' => 'grid_view' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 'Cantidad',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false ),
'simple_grid_field2' => array( 'field' => 'Precio',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false ),
'search_panel_field3' => array( 'field' => 'IDVenta',
'type' => 'search_panel_field',
'required' => false ),
'simple_grid_field4' => array( 'field' => 'IdFGesPesResiduo',
'type' => 'grid_field',
'inlineAdd' => true,
'inlineEdit' => false,
'label' => array( 'field' => 'IdFGesPesResiduo',
'table' => 'public.DetalleVentas',
'type' => 3 ) ),
'search_panel_field4' => array( 'field' => 'IdFGesPesResiduo',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'public.GestionPesosResiduos' => true ) ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'public.GestionPesosResiduos',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'logo1' => array( 'type' => 'logo' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'public.Ventas' => 'true' ) ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'IdFGesPesResiduo' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'Cantidad',
'label' => array( 'field' => 'Cantidad',
'table' => 'public.DetalleVentas',
'type' => 3 ) ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'Precio' ),
'grid_field_totals1' => array( 'type' => 'grid_field_totals',
'field' => 'Precio',
'totals' => 'TOTAL' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>