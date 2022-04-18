
/*funcion para aparecer/desaparecer contenedores */

function aparecer(ide){
    var troc=document.getElementById(ide);
    var visible;
    if(troc.style.display == "none"){
        visible="block";
    }else /*if( troc.style.display == "block")*/{
        visible="none";
    }
    troc.style.display=visible;

}