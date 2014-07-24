<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'		=> 'Luke Skywalker',
			'username'	=> 'skywalker',
			'email'		=> 'skywalker@jeditemple.com',
			'password'	=> Hash::make('password'),
		));
	}
}