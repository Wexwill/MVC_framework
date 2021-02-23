<?php

namespace App;

abstract class DB {

    static function connect() {
        $host = DB_HOST;
        $db   = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASSWORD;
        $charset = DB_CHARSET;

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        
        try {
            $pdo = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $PDOe) {
            exit('DB Error:' . $PDOe->getMessage());
        }

        return $pdo;
    }


                    // Метод для пушинга данных в бд

    // static function put_data() {

    //     $data = Api::get_data();

    //     foreach ($data as $key) {

    //         switch ($key['category']) {
    //             case "electronics":
    //                 $sql = 'INSERT INTO `electronics` (`id`, `title`, `price`, `description`, `category`, `image`) VALUES ("' . $key['id'] . '", "' . $key['title'] . '", "' . $key['price'] . '", "' . $key['description'] . '", "' . $key['category'] . '", "' . $key['image'] . '")';
    //                 DB::connect()->query($sql);
    //             break;

    //             case "jewelery":
    //                 $sql = 'INSERT INTO `jewelery` (`id`, `title`, `price`, `description`, `category`, `image`) VALUES ("' . $key['id'] . '", "' . $key['title'] . '", "' . $key['price'] . '", "' . $key['description'] . '", "' . $key['category'] . '", "' . $key['image'] . '")';
    //                 DB::connect()->query($sql);
    //             break;

    //             case "men clothing":
    //                 $sql = 'INSERT INTO `men clothing` (`id`, `title`, `price`, `description`, `category`, `image`) VALUES ("' . $key['id'] . '", "' . $key['title'] . '", "' . $key['price'] . '", "' . $key['description'] . '", "' . $key['category'] . '", "' . $key['image'] . '")';
    //                 DB::connect()->query($sql);
    //             break;

    //             case "women clothing":
    //                 $sql = 'INSERT INTO `women clothing` (`id`, `title`, `price`, `description`, `category`, `image`) VALUES ("' . $key['id'] . '", "' . $key['title'] . '", "' . $key['price'] . '", "' . $key['description'] . '", "' . $key['category'] . '", "' . $key['image'] . '")';
    //                 DB::connect()->query($sql);
    //             break;
    //         }
    //     }
    // }
}