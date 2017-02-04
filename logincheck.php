<?php 
ob_start();
session_start();

	include "connection.php";
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$rs = mysql_query ("select * from customer where email='".$email."'");
		if (mysql_num_rows($rs)==0)
		{
		//session_register ("msg");
		$_SESSION['msg'] = "Invalid email";
		header ("Location:user.php");
		}
		else
		{
		$data = mysql_fetch_array($rs);
			if ($data['password'] == $password)
			{
			
			
			
			//session_register ("usname");
			
		
		
		$_SESSION['customer_id'] = $data['customer_id'];
					$_SESSION['email'] = $data['email'];
		
					header ("Location:products.php");

					
				
			}
			else
			{
			//session_register ("msg");
			$_SESSION['msg'] = "Invalid Password";
			header ("Location:user.php");
			}
	
	   }

mysql_free_result ($rs);
?>