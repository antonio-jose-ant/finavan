/*funciones dentro de nuestro proyecto*/
var colapce = document.getElementById('colapce');
colapce.addEventListener('click',function () {
    var alto=document.getElementById('alto');
    if(alto.className==""){
        alto.className="despliega";
    }else{
        alto.className="";
    }
});