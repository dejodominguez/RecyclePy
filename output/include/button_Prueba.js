
Runner.buttonEvents["Prueba"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Prueba';if(!pageObj.buttonEventBefore['Prueba']){pageObj.buttonEventBefore['Prueba']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Prueba']){pageObj.buttonEventAfter['Prueba']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var message=result["txt"]+" !!!";ctrl.setMessage(message);}}
$('a[id="Prueba"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Prueba"+"_"+Runner.genId();var button_Prueba=new Runner.form.Button({id:this.id,btnName:"Prueba"});button_Prueba.init({args:[pageObj,proxy,pageid]});});};