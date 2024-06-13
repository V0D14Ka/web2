<?php
$servername = 'db';
$username = 'root';
$password = 'root';
$dbname = 'web2';

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die('Error via connect: '. mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($link, $sql)) {
    echo("Error via creating table");
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS users(
    id int not null primary key auto_increment,
    username varchar(15) not null unique,
    email varchar(30) not null,
    pass varchar(30) not null)";

if (!mysqli_query($link, $sql)) {
    echo("Error via creating table users");
}

$sql = "CREATE TABLE IF NOT EXISTS posts(
    id int not null primary key auto_increment,
    title varchar(30) not null,
    content varchar(500) not null)";

if (!mysqli_query($link, $sql)) {
    echo("Error via creating table posts");
}

mysqli_close($link);
?>