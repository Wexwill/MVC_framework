<?php

namespace App\Models;

abstract class Main {

    static function get($path = '') {

        $pdo = \App\DB::connect();
        if (is_object($pdo)) {
            $sql = "SELECT * FROM `pages`";
            $query = $pdo->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        }

        $pages = [];
        foreach($result as $item) {
            array_push($pages, $item['path']);
        }

        foreach($pages as $page) {
            if ($page == $path) {
                $sql = "SELECT * FROM `" . $path . "`";
                $query = $pdo->query($sql);
                $db_data = $query->fetchAll(\PDO::FETCH_ASSOC);
            }
        }

        $db_html = self::get_html($db_data);
        return $db_html;
    }

    static function get_html($db_data = []) {
        
        $db_html = '';

        if (!empty($db_data)) {
            foreach($db_data as $product) {
                $db_html .= '
                    <div class="products_item">
                        <a href="">
                            <h3>' . $product['title'] . '</h3>
                            <image src="' . $product['image'] . '" alt="' . $product['category']  . '">
                            <p>Price: ' . $product['price'] . '$</p>
                        </a>
                    </div>
                '; 
            }
        }
        return $db_html;
    }
}
