<?php  

function redirect($url) {
	header("Location: $url");
	die();
}

function view($name, $model = null) {
	global $view_bag;
	require APP_PATH. "/views/layout.view.php";
}

function output($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function is_POST() {
	return $_SERVER['REQUEST_METHOD'] === 'POST';
}
function is_GET() {
	return $_SERVER['REQUEST_METHOD'] === 'GET';
}
function sanitize($value) {
	$temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

	if ($temp === false) {
		return '';
	}
	return $temp;
}


function authenticate_user($email, $password) {
	$users = CONFIG['users'];

	if (!isset($users[$email])) {
		return false;
	}

	$user_password = $users[$email];

	return $password === $user_password;
}

function is_authenticate() {
	return isset($_SESSION['email']);
}

function ensure_is_user_authenticate() {
	if(!is_authenticate()) {
		redirect('../login.php');
	}
}