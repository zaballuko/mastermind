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
        return view ("juegoMastermind");
    }
    
}
