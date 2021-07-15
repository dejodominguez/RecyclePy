<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["public_Recicladores_map"] = true;
		$this->events["public_Recicladores_map1"] = true;
		$this->events["public_Recicladores_snippet"] = true;
		$this->events["public_Recicladores_snippet1"] = true;
		$this->events["public_GestionRegistrosOrigen_map"] = true;



		}

//	handlers

//	onscreen events
	function event_public_Recicladores_snippet(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event_public_Recicladores_snippet1(&$params)
	{
	// Put your code here.
echo "Es un proyecto de reciclaje con recolectores de la ASO San Francisco y 
separación desde el origen";
	;
}

	function event_public_Recicladores_map(&$params)
	{
		$mapSettings['id'] = "public_Recicladores_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// Uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';


DisplayMap($mapSettings);
	;
}
	function event_public_Recicladores_map1(&$params)
	{
		$mapSettings['id'] = "public_Recicladores_map1";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Latitude";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Longitude";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// Uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';


DisplayMap($mapSettings);
	;
}
	function event_public_GestionRegistrosOrigen_map(&$params)
	{
		$mapSettings['id'] = "public_GestionRegistrosOrigen_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "DirecUsuario";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
$mapSettings['heatMap'] = true;

// Uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';


DisplayMap($mapSettings);
	;
}



}
?>
