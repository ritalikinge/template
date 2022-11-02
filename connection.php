<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server = "localhost";
$username = "root";
$password = 'sWT1234#$';
$db = "test";

$conn = mysqli_connect($server, $username, $password, $db);
if ($conn) {
    //  die('Connected successfully');
} else {
    die('Connection is not sucessfull : ' . mysqli_connect_error());
}
