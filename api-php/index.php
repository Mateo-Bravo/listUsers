<?php
header("Access-Control-Allow-Origin:*");
$rawData = file_get_contents("php://input");
$user = json_decode($rawData);
$dsn = "mysql:dbname=store;host=localhost:3306";
$username = "root";
$password = "12345";


$connection = new PDO($dsn, $username, $password);

$name = $user->name;
$email = $user->email;
$birthdate = $user->birthdate;
$sex = $user->sex;

$query = "INSERT INTO users 
    (name, email, birthdate, sex) 
    VALUES('$name', '$email', '$birthdate', '$sex')";

$connection->query($query);

echo "{'message': 'ok'}";




