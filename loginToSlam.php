<?php
	header("Access-Control-Allow-Origin: *");
	require 'dbConnection.php';
	$userName = $_POST["username"];
	$password = $_POST["password"];
	if ($userName == '' || $password == '') {
      echo 'Invalid Request';
      die();
    }

	$sql = "SELECT password FROM  sla_users WHERE user_name = '$userName'";
	$result = $conn->query($sql);
	$receivedPassword = "";
	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
        	$receivedPassword = $row["password"];
    	}
	}
	if ($receivedPassword == $password) {
      echo "SUCCESS";
    } else {
      echo "Failed";
    }
	$conn->close();
?>