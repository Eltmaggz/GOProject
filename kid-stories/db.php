<?php
$host = "localhost";
$user = "root"; // default for XAMPP
$pass = "";     // default is blank
$db = "kids_stories";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
