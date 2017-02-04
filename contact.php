<?php session_start();?><?php include"connection.php" ?>
<?php
if(isset($_POST['Insert']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contactno=$_POST['cellno'];
$comment=$_POST['message'];

$sql=mysql_query("INSERT INTO usercomment (first_name,last_name,contactno,comment) values('$fname','$lname','$contactno','$comment')");
header("location:contact.php");
}
?>
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
	<div class="contact">
		<div class="container">	
			<div class="contact-top">		
				<h3>contact</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore </p>
			</div>
			<div class="map-content">
			<div class="col-md-6 map">
			<h4>OUR LOCATION</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
				<div class="col-md-6 contact-grid">
					<h4>COMMENT FORM</h4>
					<form action="contact.php" method="post">
						
						<input type="text" placeholder="first name" name="fname" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						
						<input type="text" placeholder="last name" name="lname" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						
						<input type="text" placeholder="phone number" name="cellno" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					
						<textarea cols="77" rows="6" value="" name="message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}">message</textarea>
						<div class="send-in">
							<input type="submit" value="Send" name="Insert" >
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>	
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
		<div class="footer-top">
			<div class="col-md-3 footer-in">
			<h5><small>News letter</small></h5>
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
				 <p class="footer-grid">Designed by Abdul basit</a> </p>
			</div>
		</div>
	</div>
</body>
</html>