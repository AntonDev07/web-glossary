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

  view('admin/delete', $term);

	
}


if (is_POST()) {
	$id = sanitize($_POST['id']);

	if (empty($id)) {
		//TODO: display message
	} else {
		Data::delete_term($id);
		redirect('index.php');
	}
}
