<?php

$servername = "mysql";
$username = "bhuser";
$password = "bhpass";
$dbname = "bhv2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>