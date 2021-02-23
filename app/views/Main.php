<?php

namespace App\Views;

abstract class Main {

    static function base($db_html) {

        ob_start();
        require_once './app/layouts/header.php';
        require_once './app/layouts/index.php';
        require_once './app/layouts/footer.php';
        $html = ob_get_clean();

        echo $html;
    }
}