<?php
include './connect.inc.php';

$password = $_POST["password"];

//insert into db
$sql = 'INSERT INTO password (password) VALUE (?)';
$statement = $connection->prepare($sql);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$statement->bind_param("s", $hashedPassword);
$statement->execute();
var_dump($hashedPassword);
header("refresh:10; url=../public_html/index.html");
