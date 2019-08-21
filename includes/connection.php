<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$connection = new mysqli($server, $username, $password, $database);

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}
