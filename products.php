<?php session_start();?><!DOCTYPE html>
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
	<div class="products">
		<div class="container">	
			<div class="products-top">		
				<h3>our products</h3>
				<p>We are delivering sustainable, scalable clean water access.We eliminate pollution our product is reliable. We consume all possible resources to provide you purity because we care . </p>
			</div>
			<div class="products-bottom">
			
            <?php include "connection.php";
				$sql=mysql_query("select * from product");
				while($row=mysql_fetch_array($sql))
				{
					$picture=$row['picture'];
					$product_id=$row['product_id'];
					
			?>
              <div class="col-md-4">
					<div class="view view-tenth">
					      <a href="product_detail.php?product_id=<?php echo $product_id;?>">
						   <div class="inner_content clearfix">
							<div class="product_image" style="margin-top:30px;">
								<img src="admin/ProductImages/<?php echo $picture;?>" class="img-responsive of-my" alt="" style="width:259px !important; height:194px !important;"/>
								<div class="mask" >
			                        <h4><?php echo $row['product_name'];?> </h4>
			                        <p><?php echo $row['description'];?><br/><strong>Price</strong><?php echo $row['sales_price'];?></p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  
					 <?php } ?>
		
					 
					  
					  
				
		</div>
		</div>	
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
						<li class="facebook"><a href="https://www.facebook.com"><span> </span></a></li>
						<li class="twitter"><a href="https://twitter.com/login"><span> </span></a></li>
						<li class="gmail"><a href="https://mail.google.com"><span> </span></a></li>
						
					</ul>
				 <p class="footer-grid">Designed by Abdul Basit</a> </p>
			</div>
		</div>
	</div>
</body>
</html>