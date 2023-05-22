<?php
header("Access-Control-Allow-Origin:*");
$dsn = "mysql:host=localhost;dbname=store";
$username = "root";
$password = "12345";
$options = ["\PDO::ATTR_ERRMODE" => "\PDO::ERRMODE_EXCEPTION"];
$connection = new PDO($dsn, $username, $password);

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id ";
$connection->query($query);

