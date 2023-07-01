// funcion para aplicar estilo a la opcion seleccionada en el menu y quita la previamente seleccionada

function seleccionar(link){
    var opciones = document.querySelectorAll('#links  a');
    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    link.className = "seleccionado";


// hacemos desaparecer el menu una vez hemos seleccionado una opcion en el modo responsive 
var x = document.getElementById("nav");
    x.className = "";

}
// funcion para visualizar el menu de forma responsive

function responsiveMenu(){
    var x = document.getElementById("nav");
    if(x.className === ""){
        x.className= "responsive";
    }else{
        x.className = "";
    }
}