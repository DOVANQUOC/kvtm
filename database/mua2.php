<?php

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
			if($row["Rain2"]==1) echo "Rain" ;
			if($row["Rain2"]==0) echo "No rain" ;

	
		};



 




?>