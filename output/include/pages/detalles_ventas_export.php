<?php
			$optionsArray = array( 'totals' => array( 'id_ges_pes_residuo' => array( 'totalsType' => '' ),
'concat' => array( 'totalsType' => '' ),
'id_deta_venta' => array( 'totalsType' => '' ),
'cantidad_venta' => array( 'totalsType' => '' ),
'precio_venta' => array( 'totalsType' => '' ),
'id_venta' => array( 'totalsType' => '' ),
'sub_total' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id_deta_venta',
'cantidad_venta',
'precio_venta',
'id_venta',
'id_ges_pes_residuo',
'sub_total',
'concat' ),
'exportFields' => array( 'id_venta',
'id_deta_venta',
'cantidad_venta',
'precio_venta',
'concat',
'id_ges_pes_residuo',
'sub_total' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_deta_venta' => array( 'export_field' ),
'cantidad_venta' => array( 'export_field1' ),
'precio_venta' => array( 'export_field2' ),
'id_venta' => array( 'export_field3' ),
'id_ges_pes_residuo' => array( 'export_field4' ),
'sub_total' => array( 'export_field5' ),
'concat' => array( 'export_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field3',
'export_field',
'export_field1',
'export_field2',
'export_field6',
'export_field4',
'export_field5' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field3' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field6' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field3',
'export_field',
'export_field1',
'export_field2',
'export_field6',
'export_field4',
'export_field5' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id_deta_venta',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'cantidad_venta',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'precio_venta',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'id_venta',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'id_ges_pes_residuo',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'sub_total',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'concat',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 7,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>