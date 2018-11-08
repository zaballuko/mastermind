<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastermindController extends Controller
{
    function mostarJuego(Request $request){
        /* return $request->all(); */
        /* pasar parametros a la sesion */
        $request->session()->put('nombre', $request->input("nombre"));
        $request->session()->put('longitud', $request->input("longitud"));
        $request->session()->put('ballsPosibles', $request->input("ballsPosibles"));
        $request->session()->put('repetidos', $request->input("repetidos"));
        $request->session()->put('intentos', $request->input("intentos"));
        $request->session()->put('arrayClaveIntroducidas', array());

        
        /* //generar array de clave secreta */
        $longitud = $request->session()->get('longitud', $request->input("longitud"));
        $ballsPosibles = $request->session()->get('ballsPosibles', $request->input("ballsPosibles"));

        $claveSecreta = array();
        for ($i=0; $i <= $longitud-1; $i++) { 
            $numAleatorio = rand(1,$ballsPosibles);
            array_push($claveSecreta,$numAleatorio);
        }
        /* pasar clave secreta generada a la session */
        $request->session()->put('claveSecreta', $claveSecreta);
        
        /*devolver a la vista  */
        return view ("juegoMastermind");
        }


        function jugar(Request $request){
            /* recoger clave del select en array,comparar con claveSecreta */
            $longitud = $request->session()->get('longitud', $request->input("longitud"));
            
            for ($i=0; $i < $longitud; $i++) { 
                $arrayClaveIntroducida[$i] = $request->session()->get('selectClave'.$i, $request->input("selectClave".$i));
            }
            $claveSecreta=$request->session()->get('claveSecreta');
            $candidatos=0;
            $aciertos=0;
            for ($i=0; $i < $longitud; $i++) { 
                if(in_array($arrayClaveIntroducida[$i],$claveSecreta)){
                     
                    if(array_search($arrayClaveIntroducida[$i],$claveSecreta) == $i){
                        $candidatos++;
                    }else{
                        $aciertos++;
                    }       
                }
            }
            
            $request->session()->push('arrayClaveIntroducidas', [
                'claveIntro'=>$arrayClaveIntroducida,
                'candidatos'=>$candidatos,
                'aciertos'=>$aciertos
            ]);
            return view ("juegoMastermind");
        }
    
}
