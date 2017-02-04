<?php session_start();
include "connection.php"; error_reporting(0);
ini_set('display_errors',0);
ob_start();?>
<!DOCTYPE html>
<html>
<head>
<title>water supply</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
</head>
<body> 
<!--header-->
	<?php include "header.php" ?>
	<!--content-->
	<div class="content">
	<div class="single">
		<div class="container">	
						<div class="single-header">
							<h3>My Shopping Cart</h3>
						</div>
                       <div style="width:100%; height:570px; float:left">
                       <br/><br/><br/>
    
                     <?php
	$product_id = $_GET['product_id'];	 //the product id from the URL 
	
	$action 	= $_GET['action']; //the action from the URL 
	//if there is an product_id and that product_id doesn't exist display an error message
	if($product_id && !productExists($product_id)) {
		die("Error. Product Doesn't Exist");
	}
	switch($action) {	//decide what to do	
		case "add":
			$_SESSION['cart'][$product_id]++; //add one to the quantity of the product with id $product_id 
		break;
		case "remove":
			$_SESSION['cart'][$product_id]--; //remove one from the quantity of the product with id $product_id 
			if($_SESSION['cart'][$product_id] == 0) unset($_SESSION['cart'][$product_id]); //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items. 
		break;
		case "empty":
			unset($_SESSION['cart']); //unset the whole cart, i.e. empty the cart. 
		break;
	}
	
	
	
	
?>      <?php	
	if($_SESSION['cart']) {	//if the cart isn't empty

		//show the cart
		echo "<table class='gridtable' width=\"100%\" border='1' cellpadding='2' cellspacing='0' style='color:#000000' '>";	//format the cart using a HTML table
			?>
            <tr align="center" bgcolor="#990000" style="color:#FFF">
            	<th>Particular</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
            
            </tr>
            <?php
			
			$total=0;
			//iterate through the cart, the $product_id is the key and $quantity is the value
			foreach($_SESSION['cart'] as $product_id => $quantity) {	
				//get the name, description and price from the database - this will depend on your database implementation.
				//use sprintf to make sure that $product_id is inserted into the query as a number - to prevent SQL injection
				$sql = "SELECT product_name, description, liter,sales_price FROM product WHERE `product_id` = '$product_id'"; 
				$result = mysql_query($sql) or die(mysql_error());
				//Only display the row if there is a product (though there should always be as we have already checked)
				if(mysql_num_rows($result) > 0) {
					list($product_name, $description, $liter,$sales_price) = mysql_fetch_row($result);
					$line_cost = $sales_price * $quantity;		//work out the line cost
					$total = $total + $line_cost;			//add to the total cost
					echo "<tr>";
						//show this information in table cells
						echo "<td align=\"center\">$product_name</td>";
						echo "<td align=\"center\">$liter</td>";
						//along with a 'remove' link next to the quantity - which links to this page, but with an action of remove, and the id of the current product
	echo "<td align=\"center\">$quantity </td>";

						echo "<td align=\"right\">$line_cost &nbsp;</td>
						<td width='50'><a class='a' href=\"$_SERVER[PHP_SELF]?action=remove&product_id=$product_id\">Remove</a></td>
						
						";

					

					echo "</tr>";

					

				}

			

			}

			

			//show the total

			echo "<tr>";

				echo "<th colspan=\"3\" align=\"right\">Total</th>";

				echo "<th align=\"right\">Rs.$total &nbsp;</th><td></td>";

			echo "</tr>";

			

			//show the empty cart link - which links to this page, but with an action of empty. A simple bit of javascript in the onlick event of the link asks the user for confirmation

			echo "<tr>";

				echo "<td colspan=\"5\" align=\"right\">
				
				<a class='a' href=\"check-out.php\">Buy Now</a>
				<a class='a' href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('Are you sure?');\">Empty Cart</a></td>";

			echo "</tr>";		

		echo "</table>";

		

		

	

	}else{

		//otherwise tell the user they have no items in their cart

		echo "You have no items in your shopping cart.";

		

	}

	

	//function to check if a product exists

	function productExists($product_id) {

		

			$sql = sprintf("SELECT * FROM product WHERE product_id = %d;", $product_id); 

    

    		return mysql_num_rows(mysql_query($sql)) > 0;

	}



?> 
              
                   
            

             
                    
                    </div>
						<div class="clearfix"> </div>
					</div>
				<!---End-blog----->
		</div>
		</div>	
	<!--footer-->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
			<div class="col-md-3 footer-in">
			<h5>Email</h5>
			</div>
			<div class="col-md-6 mail">
				<input type="text" value="ENTER EMAIL" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER EMAIL';}">
			</div>
			<div class="col-md-3 send">
				<input type="submit" value="SUBSCRIBE" >
			</div>
			<div class="clearfix"> </div>
		</div>
			<div class="foter-bottom">
					<ul class="social-ic-icons">
						<li class="facebook"><a href="#"><span> </span></a></li>
						<li class="twitter"><a href="#"><span> </span></a></li>
						<li class="gmail"><a href="#"><span> </span></a></li>
						<li class="print"><a href="#"><span> </span></a></li>
					</ul>
				 <p class="footer-grid">Designed by Abdul Basit</a> </p>
			</div>
		</div>
	</div>
</body>
</html>