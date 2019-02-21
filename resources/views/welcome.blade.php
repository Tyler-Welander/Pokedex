@extends('layout')

@section('content')
  	<h2 align="center">Pokedex</h2>
    <h2 align="center">Search for a pokemon</h2><br/>
    <form method="GET" action="\pokemon\{pokemon}">
    	{{ csrf_field() }}
    	<div align="center">
    		<input type="text" name="id" placeholder="Pokemon ID#" />
    	</div>
    	<br/>
    	<div align="center">
    		<button type="submit">Search</button>
    	</div>
    </form>
	</br>
    <form method="GET" action="\pokemon">
        {{ csrf_field() }}
        <div align="center">
            <button type="submit">Show all Pokemon</button>
        </div>
    </form>
    </br>
    <form method="GET" action="\populate">
        {{ csrf_field() }}
        <div align="center">
            <button type="submit">Populate Database</button>
        </div>
@endsection 

@section('links')
	</br>
	<div align="center"><a href="/login_register">Login/Register</a></div>
@endsection