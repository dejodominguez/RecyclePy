<?php
			$optionsArray = array( 'totals' => array( 'id_reciclador' => array( 'totalsType' => '' ),
'foto_reciclador' => array( 'totalsType' => '' ),
'ci_reciclador' => array( 'totalsType' => '' ),
'nombre_reciclador' => array( 'totalsType' => '' ),
'apellido_reciclador' => array( 'totalsType' => '' ),
'direc_reciclador' => array( 'totalsType' => '' ),
'tel_reciclador' => array( 'totalsType' => '' ),
'logo_aso' => array( 'totalsType' => '' ),
'id_residuo' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'IdReciclador',
'foto_reciclador',
'ci_reciclador',
'nombre_reciclador',
'apellido_reciclador',
'direc_reciclador',
'tel_reciclador',
'logo_aso',
'id_residuo' ),
'exportFields' => array( 'IdReciclador',
'foto_reciclador',
'ci_reciclador',
'nombre_reciclador',
'apellido_reciclador',
'direc_reciclador',
'tel_reciclador',
'logo_aso',
'id_residuo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'IdReciclador' => array( 'export_field' ),
'foto_reciclador' => array( 'export_field1' ),
'ci_reciclador' => array( 'export_field2' ),
'nombre_reciclador' => array( 'export_field3' ),
'apellido_reciclador' => array( 'export_field4' ),
'direc_reciclador' => array( 'export_field5' ),
'tel_reciclador' => array( 'export_field6' ),
'logo_aso' => array( 'export_field7' ),
'id_residuo' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
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
'export_field6',
'export_field7',
'export_field8' ) ),
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
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'IdReciclador',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'foto_reciclador',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'ci_reciclador',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'nombre_reciclador',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'apellido_reciclador',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'direc_reciclador',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'tel_reciclador',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'logo_aso',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'id_residuo',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 7,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>