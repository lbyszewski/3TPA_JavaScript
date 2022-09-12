<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'user';
$port = "3308";

$connection = new mysqli($hostname, $username, $password, $database, $port);

if(mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
