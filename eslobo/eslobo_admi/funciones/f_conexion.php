<?php
$servername = "remotemysql.com";
$username = "t0Waz9JAzD";
$password = "JjRrGMaTeL";
$db="t0Waz9JAzD";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>