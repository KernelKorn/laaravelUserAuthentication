<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf=8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Authentication App with Laravel 4</title>
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
	{{ HTML::style('css/main.css')}}

</head>

<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav navbar-nav">
                	@if(!Auth::check())
	                    <li>{{ HTML::link('users/register', 'Register') }}</li>
	                    <li>{{ HTML::link('users/login', 'Login') }}</li>
                	@else
                		<li>{{ HTML::link('users/logout', 'Logout') }}</li>
                        <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
                        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
                	@endif
                </ul>
            </div>
        </div>
    </div>
</nav>


    <div class="container">
        @if(Session::has('message'))
            <p class="alert alert-warning">{{ Session::get('message') }}</p>
        @endif
        @yield('content')
    </div>

	<div class="wrapper">

	</div><!--/#wrapper -->
</body>
</html>