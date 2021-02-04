<?php 
session_start();
require '../app/app.php';
ensure_is_user_authenticate();

view('admin/index', Data::get_terms());
