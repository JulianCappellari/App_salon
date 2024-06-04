<?php

$db = mysqli_connect($_ENV['BD_HOST'], $_ENV['BD_USUARIO'],$_ENV['BD_PASSWORD'], $_ENV['BD_NOMBRE']);

$db -> set_charset('utf8');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
