<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastermindController extends Controller
{
    function mostarJuego(Request $request){
        /* return $request->all(); */
        $request->session()->put('nombre', $request->input("nombre"));
        $request->session()->put('longitud', $request->input("longitud"));
        $request->session()->put('ballsPosibles', $request->input("ballsPosibles"));
        $request->session()->put('repetidos', $request->input("repetidos"));
        $request->session()->put('intentos', $request->input("intentos"));

        
        //generar array de clave secreta
        $longitud = $request->session()->get('longitud', $request->input("longitud"));
        $claveSecreta = array();
        for ($i=0; $i <= $longitud; $i++) { 
            $numAleatorio = rand(1,$longitud);
            array_push($claveSecreta,$numAleatorio);
       }
       $request->session()->put('claveSecreta', $claveSecreta);
       /* return $request->all(); */
       return view ("juegoMastermind");
    }
    function jugar(Request $request){
        return view ("juegoMastermind");
    }
    
}
