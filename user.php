<?php session_start(); include"connection.php" ?>
<?php
if(isset($_POST['Insert']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$faname=$_POST['faname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnic=$_POST['CNIC1'].$_POST['CNIC2'].$_POST['CNIC3'];
$phoneno=$_POST['phoneno'];
$tellandline=$_POST['tellandline'];
$address=$_POST['address'];
$city=$_POST['city'];
$reg_date=date('Y-m-d');
$area_id=$_POST['area_id'];


$sql=mysql_query("INSERT INTO customer (first_name, last_name, father_name, cnic,email, password, city, cellno, tel_landline, address, registeration_date,area_id) values ('$fname','$lname','$faname','$cnic','$email' ,'$password','$city', '$phoneno', '$tellandline', '$address', '$reg_date','$area_id')");
header("location:user.php");
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
	<div class="content" style="background:#F3F3F3; width:100%;" align="center">
    <div class="container-fluid">
    <div class="row">
    
    
    		<div class="col-md-6 contact-grid" style="height:auto;">
            
            <h1>User Registration</h1>
            
            
            <form action="user.php" method="post">
						
						<input type="text" value="" placeholder="Enter Your First Name" name="fname" required pattern="[A-Za-z\s]*">
						<input type="text" value="" placeholder="Enter Your Last Name" name="lname" required pattern="[A-Za-z\s]*" >
                        <input type="text" value="" placeholder="Enter Your Father Name" name="faname" required pattern="[A-Za-z\s]*" >
                        <input type="email" value="" placeholder="Enter Your Email" name="email" required style="width:100%; height:50px; border:none; padding-left:15px;" />
                        <input type="password" value="" placeholder="Enter Your Password" name="password" required style="width:100%; height:50px; border:none; margin-top:20px; padding-left:15px;" />
                        <input type="text" value=""  name ="CNIC1" pattern="[0-9]{5}" placeholder="CNIC Family Code eg (36302)" required style="width:30%"/ >-
                        <input type="text" value="" name ="CNIC2" pattern="[0-9]{7}" placeholder="CNIC Main Code eg (1014156)" required style="width:50%"/ >-                      	<input type="text" value="" name ="CNIC3" pattern="[0-9]{1}" placeholder="eg (1)" required style="width:10%"/ >  
                        <select name="city" style="width:100%; height:50px; border:none;" required>
                         	<option>Select City</option>
                         <?php $sql=mysql_query("select * from city");
						 		while($row=mysql_fetch_array($sql))
								{
									?>
                                    <option><?php echo $row['city_name']?></option>
                                    <?php
								}
						 
						 ?>
                        </select>
                        <br/><br/>
                         <select name="area_id" style="width:100%; height:50px; border:none;" required>
                         	<option>Select Area</option>
                         	 <?php $sql1=mysql_query("select area_id,area_name,city_name FROM area
LEFT JOIN city
ON area.city_id=city.city_id");
						 		while($row1=mysql_fetch_array($sql1))
								{
									?>
                                    <option value='<?php echo $row1['area_id']?>'><?php echo $row1['area_name']?> &nbsp;&nbsp;&nbsp;(<?php echo $row1['city_name']?>) </option>
                                    <?php
								}
						 
						 ?>
                         	
                        </select>
                         <input type="text" value="" name="phoneno"  placeholder="Enter Phone Number " required pattern="[0-9]{12}"  / >
                         <input type="text" value="" name="tellandline"  placeholder="Enter Tel Landline " required pattern="[0-9]{11}"  / >
                         <textarea value="" name="address"  placeholder="Enter your Postal Address" rows="5" required / ></textarea>
                         
                         
                         
                        
                        
					
						
						
                        <div class="send-in">
							<input type="submit" value="Send" name="Insert" >
						</div>
					</form>
            
            
            </div>
            
            
            <div class="col-md-6 contact-grid" style= "height:500px;">
            <h1>User Login</h1>
            
            <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];}?>
            <form style="margin-top:30px" action="logincheck.php" method="post">
						
						<input type="email" name="email" value="" placeholder="Enter Your Email" required style="width:100%; height:50px; border:none; padding-left:15px;" />
                        <input type="password" name="password" value="" placeholder="Enter Your Password" required style="width:100%; height:50px; border:none; margin-top:20px; padding-left:15px;" />
                         <div class="send-in">
                     <input type= "checkbox" value="" >  Remember me
                            <input type="reset" value="Clear" >
							<input type="submit" value="LOGIN" >
						</div>
            
            </form>
            
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
				 <p class="footer-grid">Designed by Abdul Basit </p>
			</div>
		</div>
	</div>
</body>
</html>