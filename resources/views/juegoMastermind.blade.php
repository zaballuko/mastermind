@extends('layouts.layout')
@section('title','mastermind')

<!-- donde quires que vaya y lo que quieres -->

@section('content')
	<div class="content">
	<h1>Bienvenido/a al Mastermind!</h1>
    <div class="container">
        
	<form action="/jugar" method="post">
            <input type="hidden" name="nombre" value="{{$nombre}}">
			<!-- metes el nombre en un hidden para guardarlo-->
			@csrf
            <br>
            <label>Introduce el codigo:</label>
            <select name="balls">
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
            <select name="bolas">
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
            <select name="bolas">
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
            <select name="bolas">
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
            <br>
			<button type="submit"  class="btn btn-success">Comprobar</button>
		</form>
        <br>
        <h3>Jugador/a  {{$nombre}}</h3>
        <hr>
        </div>
        <p>Intento: </p>
	</div>
@endsection