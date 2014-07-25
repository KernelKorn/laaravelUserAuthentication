@extends('layouts.main')

@section('content')
	<div class="col-sm-8 col-sm-offset-2">
		@foreach ($bears as $bear)

			<h2>{{ $bear->name }} <small> {{ $bear->type }}: Level {{ $bear->danger_level }}</small></h2>

			<h4>Trees</h4>
			@foreach ($bear->trees as $tree)
				<p>{{ $tree->type }}</p>
			@endforeach

			<h4>Picnics</h4>
			@foreach ($bear->picnics as $picnic)
				<p>{{ $picnic->name }}: Taste Level {{ $picnic->taste_level }} </p>
			@endforeach
		@endforeach
@stop