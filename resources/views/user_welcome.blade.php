@extends('layout')

@section('content')
  	<h2 align="center">Pokedex</h2>
	<h2 align="center">Mark a pokemon as captured</h2><br/>
	<form method="POST" action="/captured/{pokemon}">
    	{{ csrf_field() }}
    	<div align="center">
    		<input type="text" name="id" placeholder="Pokemon ID#" />
    	</div>
        <div align="center">
            <input type="hidden" name="username" value="{{ $username }}" />
        </div>
        <br/>
        <br/>
    	<div align="center">
    		<button type="submit">Mark as captured</button>
    	</div>
    </form>
    <br>
    <br>
    <form method="GET" action="/captured">
        {{ csrf_field() }}
        <div align="center">
            <input type="hidden" name="username" value="{{ $username }}" />
        </div>
        <div align="center">
            <button type="submit">Show captured Pokemon</button>
        </div>
    </form>
@endsection

@section('links')
	<br/>
	<br/>
	<div align="center"><a href="/">Home</a></div>
@endsection