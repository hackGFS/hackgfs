<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function splash()
	{
		return View::make('splash');
	}

	public function subscribe()
	{

		$email = Input::get('email');

		$subscribe = new Subscribe;

		$subscribe->email = $email;

		$subscribe->save();

		return 'true';

	}

}
