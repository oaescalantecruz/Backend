// JS para almacenar usuario nuevo

console.log("Loading JS...")


// Function para guardar un nuevo contacto del frontend *************-------------

function saveContact() {

    let nombresApellidos = document.getElementById("nombresApellidos");
    let email = document.getElementById("email");
    let telefono = document.getElementById("telefono");
    let asunto = document.getElementById("asunto");
    let mensaje = document.getElementById("mensaje");



let contacto = {

    nombresApellidos: nombresApellidos.value,
    email: email.value,
    telefono: telefono.value,
    asunto: asunto.value,
    mensaje: mensaje.value
    

}

console.log(contacto);

// Funcion para generar la api o endpoint para crear un nuevo contacto // ***- ****- y sus parametros

let url = "http://localhost:8000/api/crear";

fetch(url, {

    method : "POST",
    headers : {

    "Content-Type" : "aplication/json"
},

    body : JSON.stringify(contacto),


}).then(response => {

    console.log(response);
    if(response.status == 200){
        alert("Creacion Exitosa del Contacto!");
    }else{
        alert("Error con Creacion del Contacto!");
  
    }

})

return true;

}