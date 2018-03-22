<?php
	header("Access-Control-Allow-Origin: *");
	require 'dbConnection.php';
	$data = $_POST["data"];
	$user = $_POST["userName"];
	if ($user == '' || !isset($_POST["userName"])) {
      echo 'Invalid Request';
      die();
    }

	$sql = "INSERT INTO sla_data (id,user_name,data) VALUES (0,'$user', '$data')";
	if ($conn->query($sql) === TRUE) {
		$resp["success"] = true ;
    	$resp["message"] = "Successfully Saved!" ;
	} else {
		$resp["success"] = false ;
    	$resp["message"] = "Error!" ;
	}
	$conn->close();
	echo json_encode($resp);
?>