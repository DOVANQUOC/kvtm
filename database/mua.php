<?php
include "../language/config.php";
$server 	= "localhost:3306";	
$username 	= "root";			
$password 	= "admin";
$DB 		= "smartgarden";			
/*   control1     */
$conn = new mysqli($server, $username, $password,$DB);		
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$query ="SELECT * from display";					
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			if($row["Rain1"]==1)   echo $lang2['rain'] ;
			if($row["Rain1"]==0)  echo $lang2['norain']  ;

	
		};



 




?>