<?php

function get_nav() {

    $pdo = App\DB::connect();

    if (is_object($pdo)) {
        $sql = "SELECT * FROM `pages`";
        $query = $pdo->query($sql);
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    $nav = '';
    if (!empty($result)) {
        foreach($result as $product) {
            $nav .= '<li><a href="/' . $product['path'] . '/">' . $product['name'] . '</a></li>';
        }
    }
    return $nav;
}

function home_content() {

    $home_html = '
    <div class="home_content">
        <h1>Welcome to the online store!</h1>
    </div>
    ';

    return $home_html;
}