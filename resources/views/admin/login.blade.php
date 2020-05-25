@extends('layout.app')

@section('title', 'Login')

@section('navbar')
	<nav class="navbar navbar-expand-lg navbar-default bg-dark">
		<a href="#" class="navbar-brand">Login</a>
	</nav>
@endsection

@section('content')
	<div class="container mt-5">
		<div class="row">
			<form action="{{ route('login.check') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input name="username" id="name" class="form-controll" type="text" placeholder="Username"/>
				</div>
				
				<div class="form-group">
					<label for="password">Name</label>
					<input name="password" id="password" class="form-controll" type="password" placeholder="password"/>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
@endsection