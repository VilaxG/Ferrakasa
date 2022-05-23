

function aumentar(ide){
    var inicio = document.getElementById(ide).value;
    var cantidad = document.getElementById(ide).value = ++inicio;
}
function disminuir(ide){
    var inicio = document.getElementById(ide).value;
    var comprobar =document.getElementById(ide).value;
    if(comprobar>0){
        var cantidad = document.getElementById(ide).value = --inicio;
    } 
}