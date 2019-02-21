@extends('layout')

@section('content')
	<div style="width:100%; height:300px; margin:auto;">
		<div style="width:50%; float:left;">
			<h2 align="center">Login</h2><br/>
		    <form method="POST" action="/login">
		    	{{ csrf_field() }}
		    	<div align="center">
		    		<input type="text" name="username" placeholder="Username" />
		    	</div>
		    	<br/>
		    	<div align="center">
		    		<input type="password" name="password" placeholder="Password" />
		    	</div>
		    	<br/>
		    	<div align="center">
		    		<button type="submit">Login</button>
		    	</div>
		    </form>
		</div>
		<div style="width:50%; float:right;">
		    <h2 align="center">Register</h2><br/> 
		    <form method="POST" action="/register">
		    	{{ csrf_field() }}
		    	<div align="center">
		    		<input type="text" name="username" placeholder="Username" />
		    	</div>
		    	<br/>
		    	<div align="center">
		    		<input type="password" name="password" placeholder="Password" />
		    	</div>
		    	<br/>
		    	<div align="center">
		    		<input type="email" name="email" placeholder="Email" />
		    	</div>
		    	<br/>
		    	<div align="center">
		    		<button type="submit">Register</button>
		    	</div>
		    </form>
		</div>
	</div>
@endsection 

@section('links')
    <br/>
	<br/>
	<div align="center"><a href="/">Home</a></div>
@endsection