<?php
session_start();
include "connection.php";

if(isset($_SESSION['customer_id']))
{
	header("Location:user.php");
}

if(isset($_SESSION['customer_id']))
		{
			
			foreach($_SESSION['cart'] as $product_id => $quantity) {	
				//get the name, description and price from the database - this will depend on your database implementation.
				//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				$sql = "SELECT product_name, description, sales_price FROM product WHERE `product_id` = '$product_id'"; 
				$result = mysql_query($sql) or die(mysql_error());
				//Only display the row if there is a product (though there should always be as we have already checked)
				if(mysql_num_rows($result) > 0) {
				list($product_name, $description, $sales_price) = mysql_fetch_row($result);
				$line_cost = $sales_price * $quantity;		//work out the line cost
				$total = $total + $line_cost;	
				}

	}

	$date=date('Y-m-d');
	$ssq=mysql_query("select count(order_id) as order_id from `order` ORDER BY order_id DESC LIMIT 1");
	$ro=mysql_fetch_array($ssq);
	$customer_id=$_SESSION['customer_id'];
	 $order_id=$ro['order_id']+1;
	//echo $cname."===".$cemail."===".$cadd;
    $query="INSERT INTO `order`(`order_id`, `order_date`, `customer_id`, `status`) VALUES ('$order_id','$date','$customer_id','Pending')";
	mysql_query($query) or die(mysql_error());
	$last_id=mysql_insert_id();
	 $last_id;
	foreach($_SESSION['cart'] as $product_id => $quantity) {	
	$query2="INSERT INTO `order_detail`(`order_id`, `product_id`, `order_qty`, `totalprice`) VALUES ('$order_id','$product_id','$quantity','$line_cost')";
	mysql_query($query2) or die(mysql_error());
	
	if($query2)
	{
		
		
		header("location:message.php?Action=Done");
	}
	}
}



?>
