@extends('layouts.main')

@section('content')
	<h1>All the Nerds</h1>

	<!-- @if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif -->

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Nerd Level</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
		@foreach($nerds as $nerd)
			<tr>
				<td>{{ $nerd->id }}</td>
				<td>{{ $nerd->name }}</td>
				<td>{{ $nerd->email }}</td>
				<td>{{ $nerd->nerd_level }}</td>
				<td>
					<a class="btn btn-small btn-success" href="URL::to('nerds/' . $nerd->id) }}">Show</a>
					<a class="btn btn-small btn-info" href="URL::to('nerds/' . $nerd->id . '/edit')">Edit</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop