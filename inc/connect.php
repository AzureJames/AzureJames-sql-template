<?php 
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (!defined("BASE_URL")) {
	define("BASE_URL", "https://username.dmitstudent.ca/dmit2503/project-name/");
}
?>