<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{
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
			if (isset($_SESSION['IS_LOGGED_IN'])) {
				$mainView = '../views/users/account.php';
			} else {
				$mainView = '../views/home.php';
			}
			break;
		case '/results':
			$mainView = '../views/ads/index.php';
			break;
		case '/login':
			$mainView = '../views/users/login.php';
			$data['message'] = '';
			if(Auth::check()){
				header("Location: /users/account");
			}
			if(!empty($_POST['loginUsername']) && !empty($_POST['loginPassword']) && empty($_POST['signupUsername']) && empty($_POST['signupName']) && empty($_POST['signupEmail']) && empty($_POST['signupPassword'])) {
				$usernameOrEmail = Input::get('loginUsername');
				$password = Input::get('loginPassword');
				Auth::attempt($usernameOrEmail, $password);
				$_SESSION['IS_LOGGED_IN'] = $usernameOrEmail;
				header("Location: /users/account");
			} elseif (!empty($_POST['signupUsername']) && !empty($_POST['signupName']) && !empty($_POST['signupEmail']) && !empty($_POST['signupPassword']) && $_POST['signupPassword'] === $_POST['confirmPassword'] && empty($_POST['loginUsername']) && empty($_POST['loginPassword'])) {
				// var_dump($_POST);
				$_SESSION['IS_LOGGED_IN'] = $_POST['signupUsername'];
				User::insertUser();
				$usernameOrEmail = $_POST['signupUsername'];
				$password = $_POST['signupPassword'];
				Auth::attempt($usernameOrEmail, $password);
				header("Location: /users/account");
			} 
			// } elseif (!Auth::attempt($usernameOrEmail, $password)) {
			// 	$data['message'] = "Please enter username or password.";
			// }
			break;				
		case '/create':
			$mainView = '../views/ads/create.php';
			break;
		case '/edit':
			$mainView = '../views/ads/edit.php';
			break;
		case '/logout':
			Auth::logout();
			$mainView = '../views/home.php';
			break;
		default:    // displays 404 if route not specified above
			$mainView = '../views/404.php';
			break;
	}

	$data['mainView'] = $mainView;

	return $data;
}

extract(pageController());