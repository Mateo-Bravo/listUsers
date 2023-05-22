<?php
header("Access-Control-Allow-Origin:*");

$dsn = "mysql:host=localhost;dbname=store";
$username = "root";
$password = "12345";
$options = ["\PDO::ATTR_ERRMODE" => "\PDO::ERRMODE_EXCEPTION"];

$connection = new PDO($dsn, $username, $password);

$query = "SELECT * FROM users;";

$result = $connection->query($query, PDO::FETCH_OBJ);

$users = [];

foreach ($result as $item) {
    $users[] = $item;
}

print json_encode($users);
