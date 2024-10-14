<?php

$servername = "127.0.0.1";
$username = "xxxvz";
$password = "23142003";
$dbname = "solveitmath";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к БД: " . $conn->connect_error);
}