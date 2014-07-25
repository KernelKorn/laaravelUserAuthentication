@extends('layouts.main')

@section('content')

{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>

    @if ($errors->has())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="form-group @if ($errors->has('firstname')) has-error @endif">
	    {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
	    @if ($errors->has('firstname')) <p class="help-block">{{ $errors->first('firstname') }} </p> @endif
	</div>
	<div class="form-group @if ($errors->has('lastname')) has-error @endif">
	    {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
	    @if ($errors->has('lastname')) <p class="help-block">{{ $errors->first('lastname') }} </p> @endif
	</div>
	    <div class="form-group @if ($errors->has('email')) has-error @endif">
	    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
	    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
	</div>
	    <div class="form-group @if ($errors->has('password')) has-error @endif">
	    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
	    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
	</div>
	<div class="form-group @if ($errors->has('password_confirmation')) has-error @endif">
	    {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
		@if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
	</div>
	<div class="form-group">
	    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
    </div>
{{ Form::close() }}
@stop