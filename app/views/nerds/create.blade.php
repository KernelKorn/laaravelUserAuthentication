@extends('layouts.main')

@section('content')
	<h1>Create a Nerd</h1>

	{{ HTML::ul($errors->all() )}}

	{{ Form::open(array('url' => 'nerds')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('nerd_level', 'Nerd Level') }}
			{{Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Save', array('class' => 'btn btn-success')) }}

	{{ Form::close() }}
@stop