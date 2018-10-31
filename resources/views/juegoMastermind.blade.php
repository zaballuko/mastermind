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
             <!-- @for($i=0;$i<=session()->get('longitud');$i++){
                <a><img src="img/ {{$clave=session()->get('clave')}} .png"></a>
             }
             @endfor  -->  
            <br>
            <label>Introduce el codigo:</label>
            @for ($i=0; $i<session()->get('longitud'); $i++)
                <select name="selectClave{{$i}}">
                    @for ($j=0; $j<session()->get('ballsPosibles')+1; $j++)
                    <option value="{{$j}}">{{$j}}</option>
                    @endfor
                    </select>
            @endfor
            <br>
			<button type="submit"  class="btn btn-success" name=comprobar>Jugar</button>
		</form>
        <br>
        <h3>Jugador/a  <code>{{session()->get('nombre')}}</code></h3>
        <!-- {{var_dump((session()->get('claveSecreta')))}} -->
        @for($i=0;$i<count(session()->get('claveSecreta'));$i++)

            <p>{{(session()->get('claveSecreta'))[$i]}}</p>
        
        @endfor
        <hr>
        </div>
        <p>Intento:</p>
        <p> / {{session()->get('intentos')}}</p>
	</div>
@endsection