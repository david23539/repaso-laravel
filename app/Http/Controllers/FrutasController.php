<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //
    public function index(){
        return view('frutas.index') ->with('frutas',array('naranja','pera','sandia','melon','piña'));
    }

    public function naranjas(){
        return 'Accion de naranjas';
    }

    public function peras(){
        return 'Accion de peras';
    }

    public function recibirFormulario(Request $request){
        $data = $request;
        /*var_dump($data);
        die();*/
//        return 'El nombre de la fruta es '.$data['nombre'] .' y la descripcion sería '. $data['descripcion'];
        return 'El nombre de la fruta es '.$request->input('nombre');//dos formas

    }

}
