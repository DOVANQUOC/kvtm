<?php
	$server 	= "localhost";	
$username 	= "id12468691_kvtm_user";			
$password 	= "W1mBGLKrlmfkl#!%";
$DB 		= "id12468691_kvtm_db";			
/*   control1     */
$con = new mysqli($server, $username, $password,$DB);		
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	mysqli_set_charset($con, "utf8");
?>