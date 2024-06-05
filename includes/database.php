<?php

$db = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_NAME'));
// $db = mysqli_connect('localhost', 'root', 'julian2003', 'appsalon_mvc');

// $db = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'],$_ENV['DB_PASS'], $_ENV['DB_NAME']);
// var_dump($_ENV);

$db -> set_charset('utf8');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
