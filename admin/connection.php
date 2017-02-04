<?php
session_start();
	$con = mysql_connect("localhost", "root", "");
	$conect=mysql_select_db("watersupply",$con);
	
	if(!isset($_SESSION['abadmin']))
	{
		
		header("Location:login.php");
		
	}
	
?>


