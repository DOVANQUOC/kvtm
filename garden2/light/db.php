<?php
	$server     = "localhost:3306"; 
$username   = "root";           
$password   = "admin";
$DB         = "smartgarden";            
/*   control1     */
$con= new mysqli($server, $username, $password,$DB);      
	mysqli_set_charset($con, "utf8");
?>