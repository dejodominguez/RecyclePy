
Runner.pages.PageSettings.addPageEvent('public.GestionRegistrosOrigen',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var GeoMap=Runner.getControl(pageid,'GPSMapaGoo');if(navigator.geolocation){navigator.geolocation.getCurrentPosition(showPosition);}
function showPosition(position){alert("Latitude: "+position.coords.latitude+" Longitude: "+position.coords.longitude);}
function showPosition(position){GeoMap.setValue(position.coords.latitude+','+position.coords.longitude);};});