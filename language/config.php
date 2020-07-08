<?php 
session_start();
if(!isset($_SESSION['lang']))
$_SESSION['lang']="en";
else if (isset($_GET['lang']) && $_SESSION['lang'] && !empty($_GET['lang'])) {
	if ($_GET['lang']=="en") 
		$_SESSION['lang']="en";	
    elseif ($_GET['lang']=="vietnam") {
    	$_SESSION['lang']="vietnam";	
    }


}



require_once $_SESSION['lang'].".php";


 ?>