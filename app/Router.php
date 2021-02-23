<?php

namespace App;

class Router {

    function __construct() {

        $path = '';
        $path_array = explode('/', $_REQUEST['path']);

        if (count($path_array) > 0) $path = $path_array[0];

        new Controllers\Main($path);
    }
}