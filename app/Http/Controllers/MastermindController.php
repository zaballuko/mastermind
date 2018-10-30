<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastermindController extends Controller
{
    function mostarJuego(Request $request){
        /* return $request->all(); */
        $request->session()->put('nombre', $request->input("nombre"));
        $longitud = $request->session()->put('longitud', $request->input("longitud"));
        $request->session()->put('ballsPosibles', $request->input("ballsPosibles"));
        $request->session()->put('repetidos', $request->input("repetidos"));
        $request->session()->put('intentos', $request->input("intentos"));
        $claveSecreta= array();
        for ($i=0; $i < $longitud; $i++) { 
            $num_aleatorio = rand(1,$longitud);
            array_push($claveSecreta,$num_aleatorio);
       }
       $request->session()->put('claveSecreta', $claveSecreta);
        //creas un array de clave secreta
        return view ("juegoMastermind");
    }
    function jugar(Request $request){
        for ($i=0; $i < session()->get('longitud'); $i++) { 
            
        }
        return $request->all(); 
        return view ("juegoMastermind");
    }
    
}
