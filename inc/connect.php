<?php 
$conn = new mysqli("localhost", "agallaghermicha1", "HIwViS4BbKBFrsx", "agallaghermicha1");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (!defined("BASE_URL")) {
	define("BASE_URL", "https://username.dmitstudent.ca/dmit2503/project-name/");
}
?>
