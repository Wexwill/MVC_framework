<?php

namespace App\Controllers;

use \App\Models\Main as Models;
use \App\Views\Main as Views;

class Main {

    function __construct($path)
    {
       if (!empty($path)) $this->path = $path;
       $this->run();
    }

    protected function run() {
        @$db_html = Models::get($this->path);
        Views::base($db_html);
    }
}