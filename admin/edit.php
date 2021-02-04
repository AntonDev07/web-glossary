<?php 
session_start();
require '../app/app.php';
ensure_is_user_authenticate();

if (is_GET()) {
  $key = sanitize($_GET['key']);

  if (empty($key)) {
  	view('not_found');
  	die();
  }

  $term = Data::get_term($key);

  if ($term === false) {
	view('not_found');
	die();
  }

  view('admin/edit', $term);

	
}


if (is_POST()) {
	$term = sanitize($_POST['term']);
	$definition = sanitize($_POST['definition']);
	$id = sanitize($_POST['id']);

	if (empty($term) || empty($definition) || empty($id)) {
		//TODO: display message
	} else {
		Data::update_term($id, $term, $definition);
		redirect('index.php');
	}
}
