<?php
session_start();
require 'app/app.php';

if (is_authenticate()) {
	redirect('admin/');
}

if (is_POST()) {
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = sanitize($_POST['password']); //TODO sanitize password (hash)


	// compare with database
	if (authenticate_user($email, $password)) {
		$_SESSION['email'] = $email;
		redirect('admin/');
	} else {
		$view_bag['status'] = 'Invalid email or password';
	}



	if ($email === false) { 
		$view_bag['status'] = "Please enter a valid email address";
	}

}

view('login');

?>