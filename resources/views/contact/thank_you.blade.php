@extends('layout.app')

@section('title', 'Thank You')

@section('navbar') <nav></nav> @endsection

@section('content')
	<div class="container mt-5 text-center">
		<div class="alert alert-success">
			<p class="lead">Thank You, {{ $name }} , Your message has been Sent!</p>
		</div>
		
		<a href="{{route('contact')}}" class="btn btn-light">Back</a>
	</div>
@endsection