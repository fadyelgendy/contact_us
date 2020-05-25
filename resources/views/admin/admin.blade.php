@extends('layout.app')

@section('title', 'Admin')

@section('content')
	<div class="container mt-5">
		<h3>Users List:</h3>
		<table class="table table-bordered table-white table-striped table-hover">
			<thead>
    			<tr>
    				<th>#</th>
    				<th>Username</th>
    				<th>Email</th>
    				<th>Message</th>
    			</tr>
			</thead>
			
			<tbody>
			@foreach($contacts as $contact)
				<tr>
					<td>{{ $loop->index + 1 }}</td>
					<td>{{ $contact->name }}</td>
					<td>{{ $contact->email }}</td>
					<td>{{ $contact->message }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection