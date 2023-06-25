<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacto;


class ContactoController extends Controller
{
    //
    public function read(Request $request){


        $contactos = new contacto();
        $data = $contactos->all();
        //return $data;
        return response()->json($data);

    }

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

    public function update(){

        return true;
    }

    public function delete(){

        return true;
    }

    public function user(){
        
        return true;
    }

}
