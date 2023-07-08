<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacto;
use App\Models\usuario;


class ContactoController extends Controller
{
    //
// Funcion o metodo para consultar contactos form del frontend //*--

public function read(Request $request){

    $contactos = new contacto();
    $data = $contactos->all();
    //return $data;
    return response()->json($data);

}
// Function to create contacto nuevo ******
public function create(Request $request){
        
    $contactos = new contacto();
    $contactos->nombresApellidos = $request->input("nombresApellidos");
    $contactos->email = $request->input("email");
    $contactos->telefono = $request->input("telefono");
    $contactos->asunto = $request->input("asunto");
    $contactos->mensaje = $request->input("mensaje");
    $contactos->save();
    $message = ['message' => 'Registro Exitoso!'];
    return response()->json($message);

}
    // Funcion para guardar registro de nuevos usuarios
public function createUser(Request $request){
    
    $users = new usuario();
    $users->nombres = $request->input("nombres");
    $users->apellidos = $request->input("apellidos");
    $users->tipoId = $request->input("tipoId");
    $users->identificacion = $request->input("identificacion");
    $users->telefono = $request->input("telefono");
    $users->emailUser = $request->input("emailUser");
    $users->profesion = $request->input("profesion");
    $users->rol = $request->input("rol");

    $users->save();
    $message = ['message' => 'Registro Exitoso!'];
    return response()->json($message);

}
//funcion para actualizar usuarios segun el id de cada usuario//**** */

//
public function update(Request $request){

    $idUser = $request->query("id");
    $users = new usuario();
    $userParticular = $users->find($idUser);

    $userParticular->nombres = $request->input("nombres");
    $userParticular->apellidos = $request->input("apellidos");
    $userParticular->tipoId = $request->input("tipoId");
    $userParticular->identificacion = $request->input("identificacion");
    $userParticular->telefono = $request->input("telefono");
    $userParticular->emailUser = $request->input("emailUser");
    $userParticular->profesion = $request->input("profesion");
    $userParticular->rol = $request->input("rol");

     $userParticular->save();
     $message = ["Message:"   => "Actualizacion Exitosa!",
                 "idUsuario:" => $request->query("id"),
                 "Nombres:"   => $userParticular->nombres,

    ];


     return $message;







}

// FUNCION PARA ELIMINAR LOS USUARIOS //****---- */
public function delete(Request $request){

    $idUser = $request->query("id");
    $users = new usuario();
    $userParticular = $users->find($idUser);

    

     $userParticular->delete();
     $message = ["Message:"   => "Eliminacion de Usario Exitosa!",
                 "idUsuario:" => $request->query("id"),
                 
    ];


     return $message;







}

// Funcion para consultar los registros de usuarios guardados //

public function readUser(){
    
    $users = new usuario();
    $data = $users->all();
    //return $data;
    return response()->json($data);
}

public function index(Request $request){
        
    $usuarios = usuario::all();
    return view('usuarios.index', ['usuarios' => $usuarios]);
}


}
