<?php

namespace App;

abstract class Api {

    static function get_data() {

        $ch = \curl_init();

        $options = [
            CURLOPT_URL => "https://fakestoreapi.com/products",
            CURLOPT_RETURNTRANSFER => true
        ];

        \curl_setopt_array($ch, $options);

        $result = \curl_exec($ch);

        \curl_close($ch);

        $api_data = json_decode($result, true);

        return $api_data;
    }
}