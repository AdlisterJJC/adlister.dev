<?php

require_once __DIR__ . '/../utils/helper_functions.php';




function pageController()
{

	function loginCheck() {

		if(!empty($_POST)) {
			$usernameOrEmail = Input::get('loginUsername');
			$password = Input::get('password');
			Auth::attempt($usernameOrEmail, $password);
			if (Auth::check()) {
				header("Location: http://adlister.dev/account.php");
				exit;
			} else {
				$message = "Please retry username/email or password.";
			}
	}
		
	}

	// defines array to be returned and extracted for view
	$data = [];

	// get the part of the request after the domain name
	$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {
		// TODO: put routes here
		case '/':
			$mainView = '../views/home.php';
			break;
		case '/users/edit':
			$mainView = '../views/users/edit.php';
			break;
		case '/users/account':
			$mainView = '../views/users/account.php';
			break;
		case '/results':
			$mainView = '../views/ads/index.php';
			break;
		case '/login':
			$mainView = '../views/users/login.php';
			$data['message'] = '';

			if(Auth::check()){
				header("Location: http://adlister.dev/account.php");
			}
			if(!empty($_POST)) {
				$usernameOrEmail = Input::get('loginUsername');
				$password = Input::get('loginPassword');
				Auth::attempt($usernameOrEmail, $password);
			} else {
				$data['message'] = "Please enter username or password.";
			}
			break;
		case '/signup':
			$mainView = '../views/users/signup.php';
			break;
		case '/create':
			$mainView = '../views/ads/create.php';
			break;
		case '/edit':
			$mainView = '../views/ads/edit.php';
			break;
		default:    // displays 404 if route not specified above
			$mainView = '../views/404.php';
			break;
	}

	$data['mainView'] = $mainView;

	return $data;
}

extract(pageController());