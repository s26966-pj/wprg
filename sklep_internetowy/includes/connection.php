<?php
$servername = "szuflandia.pjwstk.edu.pl";
$username = "s26966";
$password = "Kam.Litt";
$dbname = "s26966";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
