<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'perpustakaan';

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $message) {
    echo $message->getMessage();
}

require_once 'base-url.php';

require_once 'functions.php';
