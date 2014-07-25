<?php

class bearController extends BaseController
{
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth');
	}

	public function view()
	{
		$Bears = Bear::with('trees', 'picnics')->get();

			return View::make('eloquent', array(
				'bears' => $Bears
			));
	}
}