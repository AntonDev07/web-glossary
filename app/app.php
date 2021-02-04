<?php

define('APP_PATH', dirname(__FILE__, 2));

require 'functions.php';	
require 'config.php';
require APP_PATH. '/data/FileDataProvider.class.php';
require APP_PATH. '/data/MysqlDataProvider.class.php';
require APP_PATH. '/data/Data.class.php';


Data::initialize(new MysqlDataProvider(CONFIG['db']));
