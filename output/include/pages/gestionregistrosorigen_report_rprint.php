<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'nombre_completo',
'descri_barrio',
'cantidad_origen',
'descri_med_tip_origen',
'descri_residuo',
'id_usuario',
'gps_mapa_goo',
'id_ges_reg_origen',
'nombre_usuario',
'direc_usuario',
'foto_origen' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'nombre_completo' => array( 'report_grid_field2' ),
'descri_barrio' => array( 'report_grid_field4' ),
'cantidad_origen' => array( 'report_grid_field5' ),
'descri_med_tip_origen' => array( 'report_grid_field6' ),
'descri_residuo' => array( 'report_grid_field7' ),
'id_usuario' => array( 'report_grid_field8' ),
'gps_mapa_goo' => array( 'report_grid_field9' ),
'id_ges_reg_origen' => array( 'report_grid_field' ),
'nombre_usuario' => array( 'report_grid_field1' ),
'direc_usuario' => array( 'report_grid_field3' ),
'foto_origen' => array( 'report_grid_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'report_grid_field' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field2',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field',
'report_grid_field1',
'report_grid_field3',
'report_grid_field10' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array(  ),
'fields' => array( array( 'field' => 'id_ges_reg_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'nombre_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'nombre_completo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'direc_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_barrio',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'cantidad_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_med_tip_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_residuo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'id_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'gps_mapa_goo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'foto_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'plain',
'vertSummary' => false ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field',
'report_grid_field1',
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array(  ),
'fields' => array( array( 'field' => 'id_ges_reg_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'nombre_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'nombre_completo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'direc_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_barrio',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'cantidad_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_med_tip_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'descri_residuo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'id_usuario',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'gps_mapa_goo',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ),
array( 'field' => 'foto_origen',
'grid' => true,
'min' => false,
'max' => false,
'sum' => false,
'avg' => false ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'plain',
'vertSummary' => false ) ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field2' => array( 'field' => 'nombre_completo',
'type' => 'report_grid_field' ),
'report_grid_field4' => array( 'field' => 'descri_barrio',
'type' => 'report_grid_field' ),
'report_grid_field5' => array( 'field' => 'cantidad_origen',
'type' => 'report_grid_field' ),
'report_grid_field6' => array( 'field' => 'descri_med_tip_origen',
'type' => 'report_grid_field' ),
'report_grid_field7' => array( 'field' => 'descri_residuo',
'type' => 'report_grid_field' ),
'report_grid_field8' => array( 'field' => 'id_usuario',
'type' => 'report_grid_field' ),
'report_grid_field9' => array( 'field' => 'gps_mapa_goo',
'type' => 'report_grid_field' ),
'report_grid_field' => array( 'field' => 'id_ges_reg_origen',
'type' => 'report_grid_field' ),
'report_grid_field1' => array( 'field' => 'nombre_usuario',
'type' => 'report_grid_field' ),
'report_grid_field3' => array( 'field' => 'direc_usuario',
'type' => 'report_grid_field' ),
'report_grid_field10' => array( 'field' => 'foto_origen',
'type' => 'report_grid_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>