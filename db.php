<?php
$host = "localhost";
$port = "5432";
$dbname = "smartinventory";
$user = "postgres";
$password = "2Ac31E6b";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Database connection failed.");
}
?>