<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastermindController extends Controller
{
    function mostarJuego(Request $request){
    	return view("juegoMastermind",[
            'nombre' => $request->input("nombre"),
            'longitud' => $request->input("longitud"),
            'ballsPosibles' => $request->input("ballsPosibles"),
            'repetidos' => $request->input("repetidos"),
            'intentos' => $request->select("intentos")
    	]);
    }
    function jugar(Request $request){
        


    	return view("juegoMastermind",[
            'nombre' => $request->input("nombre"),
            'longitud' => $request->input("longitud"),
            'ballsPosibles' => $request->input("ballsPosibles"),
            'repetidos' => $request->input("repetidos"),
            'intentos' => $request->select("intentos"),
            'balls' => $request->select("balls"),
    	]);
    }
}
