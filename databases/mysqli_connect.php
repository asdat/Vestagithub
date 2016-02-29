<?php

$link = mysqli_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}

$sql = 'CREATE DATABASE my_db';
if (mysqli_query($sql, $link)) {
    echo "База my_db успешно создана\n";
} else {
    echo 'Ошибка при создании базы данных: ' . mysqli_error() . "\n";
}

$mysqli = new mysqli("localhost", "user", "password", "database");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

mysqli_query("set names utf-8");
mysqli_query("set character_set_server=utf-8");
?>
