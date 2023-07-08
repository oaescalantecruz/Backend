// JS para almacenar usuario nuevo

console.log("Loading JS...")


// Function para guardar un nuevo usuario *************-------------

function saveUser(){

/*let modal = document.getElementById("modal");
let instanceModal = M.Modal.getInstance(document.querySelectorAll("modalMessage"));
//instanceModal.open();

console.log(M.Modal);*/


let nombres = document.getElementById("first_name");
let apellidos = document.getElementById("last_name");
let tipoId = document.getElementById("tipoid");
let identificacion = document.getElementById("identificacion");
let telefono = document.getElementById("telefono");
let email = document.getElementById("email");
let profesion = document.getElementById("profesion");
let rol = document.getElementById("rol");

let usuario = {

    nombres: nombres.value,
    apellidos: apellidos.value,
    tipoId: tipoId.value,
    identificacion: identificacion.value,
    telefono: telefono.value,
    emailUser: email.value,
    profesion: profesion.value,
    rol: rol.value

}

console.log(usuario);

// Funcion para generar la api o endpoint para crear usuario // ***- ****- y sus parametros

let url = "http://localhost:8000/api/usuario";

fetch(url, {

    method : "POST",
    headers : {

    "Content-Type" : "aplication/json"
},

    body : JSON.stringify(usuario),


}).then(response => {

    console.log(response);
    if(response.status == 200){
        alert("Creacion Exitosa de Usuario!");
    }else{
        alert("Error con Creacion de Usuario!");
  
    }

})/*.then(result => {


    console.log(result);

})*/

//alert("Creacion Usuario Exitosa")
return true;

}