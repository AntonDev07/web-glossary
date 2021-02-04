<?php 
session_start();
require '../app/app.php';
ensure_is_user_authenticate();


if (is_POST()) {
	$term = sanitize($_POST['term']);
	$definition = sanitize($_POST['definition']);

	if (empty($term) || empty($definition)) {
		//TODO: display message
	} else {
		Data::add_term($term, $definition);
		redirect('index.php');
	}
}



view('admin/create');
