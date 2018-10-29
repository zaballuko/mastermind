@extends('layouts.layout')
@section('title','mastermind')

<!-- donde quires que vaya y lo que quieres -->

@section('content')
	<div class="content">
	<h1>Bienvenido/a al Mastermind!</h1>
    <div class="container">
        1<a href=""><img src="img/1.png" name="1"></a>
        2<a href=""><img src="img/2.png" name="2"></a>
        3<a href=""><img src="img/3.png" name="3"></a>
        4<a href=""><img src="img/4.png" name="4"></a><br>
        5<a href=""><img src="img/5.png" name="5"></a>
        6<a href=""><img src="img/6.png" name="6"></a>
        7<a href=""><img src="img/7.png" name="7"></a>
        8<a href=""><img src="img/8.png" name="8"></a>
    
	<form action="/inicio" method="post">
			@csrf
            <br>
			<label>Jugador/a: </label><br><input type="text" name="nombre"><br>
            
            <label>Longitud de la clave:</label><br>
            4<input type="radio" value="4" name="longitud">
            5<input type="radio" value="5" name="longitud">
            <br>
            <label>Numero de balls posibles:</label><br>
            4<input type="radio" value="4" name="ballsPosibles">
            5<input type="radio" value="5" name="ballsPosibles">
            6<input type="radio" value="6" name="ballsPosibles">
            7<input type="radio" value="7" name="ballsPosibles">
            8<input type="radio" value="8" name="ballsPosibles"><br>
            <label>Permitir repetidos:</label><br>
            Si<input type="radio" value="si" name="repetidos">
            No<input type="radio" value="no" name="repetidos"><br>
            <label>Numero de intentos:</label>
            <select name="intentos">
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select><br>
			<button type="submit"  class="btn btn-success">Iniciar partida</button>
		</form>
        </div>
	</div>
@endsection