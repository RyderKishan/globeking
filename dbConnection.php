<?php
	$servername = "sql113.epizy.com";
	$username = "epiz_20759692";
	$password = "2D0oC2LImR";
	$dbname = "epiz_20759692_slambook_db";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>