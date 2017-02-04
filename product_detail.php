<?php session_start();?>
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
							<h3>Procuct Detail</h3>
						</div>
                         <?php include "connection.php";
						 $product_id=$_GET['product_id'];
				$sql=mysql_query("select * from product where product_id=$product_id");
				$row=mysql_fetch_array($sql);
				
					$picture=$row['picture'];
					$product_id=$row['product_id'];
				
			?>
						<div class="single-page-artical">
								<div class="artical-content">
									<h3><?php echo $row['product_name'];?></h3>
									<img class="img-responsive" src="admin/ProductImages/<?php echo $picture;?>" style="width:100%; height:300px;" title="banner1">
									<p><?php echo $row['description'];?></p>
								    </div>
								    
		  						 <div class="share-artical">
		  						 	<h3>Other Detail</h3>
		  						 	<ul>
		  						 		<li><strong>Price:</strong> Rs. <?php echo $row['sales_price'];?></li>
		  						 	
		  						 	</ul>
		  						 </div>
                                 <br/>
                                 <center>
		  					<?php if(isset($_SESSION['customer_id'])){?><a href="checkout.php?product_id=<?php echo $product_id?>&&action=add"><img src="images/BuyNow.png" width="200"></a> <?php } else{?>
                            <a href="user.php"><img src="images/LOGIN.jpg" width="200"></a>
                            <?php } ?>
                            </center>
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