@extends('layout.app')

@section('title', 'contact us')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Simple Contact</a>
     <div class="collapse navbar-collapse mr-sm-2" id="navbarNav"></div>
     <a class="nav-link" href="{{ route('admin.login') }}">admin <span class="sr-only">(current)</span></a> 
 </nav>
@endsection

@section('content')
	<div class="container mt-5">
		<div class="row">
			<form action="{{ route('contact.store') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input name="username" id="name" class="form-control" type="text" placeholder="Username"/>
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input  name="email" id="email" class="form-control" type="text" placeholder="email"/>
				</div>
				
				<div class="form-group">
					<label for="message">Message</label>
					<textarea name="message" id="message" class="form-control"></textarea>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
@endsection