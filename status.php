<?php session_start(); include "connection.php";?><!DOCTYPE html>
<html>
<head>
<title>Water supply</title>
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
		
			<div class="resources">
			<div class="container">	
			<p>Check Your Order Status</p>
			<div class="page-not-found">
					<form action="status.php" method="get">
                    		<input type="text" value="" name="email" style="width:300px;">
                            <input type="submit" value="Find">
                    </form>
				</div>
			<div class="sub"><br/><br/>
            <?php if(isset($_GET['email'])){?>
			  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date Time</th>
                                            <th>First Name</th>
                                            <th>City</th>
                                             <th>Cell No</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
									$email=$_GET['email'];
									$OrderDetail=mysql_query("select * FROM `order`
LEFT JOIN customer
ON customer.customer_id=`order`.customer_id where email='$email'
");
											while($FetchOrderDetail=mysql_fetch_array($OrderDetail))
											{ ?>
                                           
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $FetchOrderDetail['order_date'] ?> </td>
                                            <td><?php echo $FetchOrderDetail['first_name'] ?></td>
                                            <td><?php echo $FetchOrderDetail['city'] ?></td>
                                             <td><?php echo $FetchOrderDetail['cellno'] ?> </td>
                                            <td><?php echo $FetchOrderDetail['address']?></td>
                                             <td><?php echo $FetchOrderDetail['status']?></td>
                                            
                                            </tr>
                                       
                                        <?php } ?>
                                       
                                       
                                    </tbody>
                                
                                
                                </table> <?php }?>
			</div>
	</div>
		</div>	
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
			<div class="col-md-3 footer-in">
			<h5>Newsletter</h5>
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