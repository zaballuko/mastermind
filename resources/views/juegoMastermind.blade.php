@extends('layouts.layout')
@section('title','mastermind')

<!-- donde quires que vaya y lo que quieres -->

@section('content')
	<div class="content">
	<h1>Bienvenido/a al Mastermind! <code>{{session()->get('nombre')}}</code></h1>
    <div class="container">
        
	<form action="/jugar" method="post">      
			@csrf
            <br>
            <p>clave introducida:
            <br>
            <br>
            @if(session()->get('arrayClaveIntroducidas') == null)
             es la primera partida
            @else
        
                @foreach( session()->get('arrayClaveIntroducidas') as $clave)
                    @for($i=0; $i < count($clave['claveIntro']); $i++)
                    <a><img src="img/{{$clave['claveIntro'][$i]}}.png"></a>
                    @endfor
                    Aciertos: {{$clave['aciertos']}}
                    Candidatos: {{$clave['candidatos']}}
                    <br>
                @endforeach                    
                <br><br>
            @endif
            </p>

            <br>
            <label>Introduce el codigo:</label>
            @for ($i=0; $i<session()->get('longitud'); $i++)
                <select name="selectClave{{$i}}">
                    @for ($j=1; $j<session()->get('ballsPosibles')+1; $j++)
                    <option value="{{$j}}">{{$j}}</option>
                    @endfor
                    </select>
            @endfor
            <br>
			<button type="submit"  class="btn btn-success" name=comprobar>Jugar</button>
	</form>
    <br>
        <h3>Jugador/a  <code>{{session()->get('nombre')}}</code></h3>
        
        <p>clave secreta 
        @for($i=0;$i<count(session()->get('claveSecreta'));$i++)

            {{(session()->get('claveSecreta'))[$i]}}
            <a><img src="img/{{(session()->get('claveSecreta'))[$i]}}.png"></a>
        
        @endfor
        </p>
        
        <hr>
        </div>
        <p>Intento:</p>
        <p> / {{session()->get('intentos')}}</p>
	</div>
@endsection