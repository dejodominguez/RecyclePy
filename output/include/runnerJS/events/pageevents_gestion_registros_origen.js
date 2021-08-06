
Runner.pages.PageSettings.addPageEvent('public.gestion_registros_origen',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var GeoMap=Runner.getControl(pageid,'gps_mapa_goo');if(navigator.geolocation){navigator.geolocation.getCurrentPosition(showPosition);}
function showPosition(position){alert("Latitude: "+position.coords.latitude+" Longitude: "+position.coords.longitude);}
function showPosition(position){GeoMap.setValue(position.coords.latitude+','+position.coords.longitude);};});