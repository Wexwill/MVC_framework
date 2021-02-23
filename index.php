<?php 

require_once './app/autoloader.php';
require_once './app/config.php';
require_once './app/functions.php';

App\DB::connect();

// App\DB::put_data();

new App\Router();
