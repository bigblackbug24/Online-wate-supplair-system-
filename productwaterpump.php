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
							<h3>Our Blog</h3>
						</div>
						<div class="single-page-artical">
								<div class="artical-content">
									<h3>Lorem Ipsum is simply dummy text</h3>
									<img class="img-responsive" src="images/slider1.jpg" title="banner1">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								    </div>
								    <div class="artical-links">
		  						 	<ul>
		  						 		<li><a href="#"><small> </small><span>june 14, 2013</span></a></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="share-artical">
		  						 	<h3> Also share on</h3>
		  						 	<ul>
		  						 		<li><a href="#"><span class="face"> </span>Facebook</a></li>
		  						 		<li><a href="#"><span class="twitter"> </span>Twiiter</a></li>
		  						 		<li><a href="#"><span class="link-in"> </span>Linked-in</a></li>
		  						 		<li><a href="#"><span class="google"> </span>Google+</a></li>
		  						 		<li><a href="#"><span class="pin"> </span>Pintrest</a></li>
		  						 		<li><a href="#"><span class="rss"> </span>Rss</a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="artical-commentbox">
		  						 	<h3>leave a comment</h3>
		  						 	<div class="table-form">
									<form>
										<input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
										<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										<input type="text" class="textbox" value="Phone:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
										<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>	
									</form>
									<a href="#">submit comment</a>
								</div>
		  						 </div>
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