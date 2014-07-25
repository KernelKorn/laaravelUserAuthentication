<?php

Class UsersController extends BaseController
{
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('except'=>array('getRegister', 'postCreate', 'getLogin', 'postSignin')));
	}

	public function getRegister()
	{
		return View::make('users.register');
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$rules);
		Log::info($validator->fails());

		if ($validator->fails()) {

			return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		} else {

			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/login')->with('message', 'Thanks for registering');
		}
	}

	public function getLogin()
	{
		return View::make('users.login');
	}

	public function postSignin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			return Redirect::to('nerds/')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('users/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}

	public function getDashboard() {
		return View::make('users.dashboard');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('users/login')->with('message', 'You are now logged out!');
	}
}
?>