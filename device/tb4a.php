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
	
	$query ="SELECT * from status";					
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			
           $t=$row["Rc2"] ;
	
		};
		if($t==0){echo  $lang3['dangtat'];};
		if($t==1){echo  $lang3['dangbat'];};



 




?>