<?php

header("Access-Control-Allow-Origin:*");

$rawData = file_get_contents("php://input");

$user = json_decode($rawData);

$dsn = "mysql:host=localhost;dbname=store";
$username = "root";
$password = "12345";


$connection = new PDO($dsn, $username, $password);

$id = $user->id;
$name = $user->name;
$email = $user->email;
$birthdate = $user->birthdate;
$sex = $user->sex;

$query = "UPDATE users SET 
    username = '$name', email = '$email', 
    birthdate = '$birthdate', sex = '$sex' 
    WHERE id = $id";
    
$connection->query($query);

echo "{'message': 'ok'}";





