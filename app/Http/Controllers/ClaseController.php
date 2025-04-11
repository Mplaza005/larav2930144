<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaseController extends Controller
{
    
    public function saludo(){

      return"hola hijitos..";

    }


    public function pordos($numero1){

        $resultado=$numero1*2;

        return $resultado;

    }

    public function suma ($numero1,$numero2){

        $resultado=$numero1+$numero2;

        return view('operaciones',compact('resultado'));

    }




    //return view('courses.list',compact('cursos'));



}
