<?php include "connection.php" ;

if(isset($_POST['name']))

{
$name=$_POST['name'];
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];

$InsertSupplier=mysql_query("Insert INTO vender (name,fname,phone,cnic,address) VALUES ('$name','$fname','$phone','$cnic','$address')");
if($InsertSupplier)
{
	$Status="Inserted Successfully";
}

else
{
	$Status="Insertion Error";
}

}
if(isset($_GET['s']))
{
	$ID=$_GET['s'];
	$Delete=mysql_query("Delete FROM vender Where vendor_id='$ID'");
	if($Delete)
	{
	$Status="Deleted Successfully";
}

else
{
	$Status="Query Error";
}


}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Basit Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php include "header.php" ?>  
           <!-- /. NAV TOP  -->
                <?php include "sidebar.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Vender</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a New Vender<center><?php echo @$Status ?></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                    <form name="form" action="vender.php" method="post" >
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter vender Name" required pattern="[A-Za-z\s]*" />
                                              <label>Father name</label>
                                            <input class="form-control" type="text" name="fname" placeholder="Enter vender FatherName" required pattern="[A-Za-z\s]*" />
                                              <label>Cell no</label>
                                            <input class="form-control" type="text" name="phone" placeholder="Enter vender Cell no" required pattern="[0-9]{14}" />
                                             <label>Cnic</label>
                                            <input class="form-control" type="text" name="cnic" placeholder="Enter vender Cnic no" required pattern="[0-9]{13}" />
                                             <label>Address</label>
                                            <input class="form-control" type="text" name="address" placeholder="Enter vender Address" required pattern="[A-Za-z\s]*" />
                                          
                                        </div>
                                      
                                      
                                      <div class="form-group">
                                            
                                            <input type="submit" class="form-control" />
                                          
                                        </div>
                                      
                                      </form>
                                      </div>
                                      </div>
                                      </div>
  <div class="panel panel-default">
                        <div class="panel-heading">
                             Vender Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Vender Code</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                             <th>Contact No</th>
                                            <th>Cnic</th>
                                            <th>Address</th>
                                            <th>Option</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
											$Selectvender=mysql_query("Select * FROM vender");
											while($FetchVender=mysql_fetch_array($Selectvender))
											{ ?>
                                           
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $FetchVender['vendor_id'] ?> </td>
                                            <td><?php echo $FetchVender['name'] ?></td>
                                            <td><?php echo $FetchVender['fname'] ?></td>
                                             <td><?php echo $FetchVender['phone'] ?> </td>
                                            <td><?php echo $FetchVender['cnic'] ?></td>
                                            <td><?php echo $FetchVender['address'] ?></td>
                                            <td><a href="vender.php?s=<?php echo $FetchVender['vendor_id'] ?>">DEL</a></td>
                                            
                                            </tr>
                                       
                                        <?php } ?>
                                       
                                       
                                    </tbody>
                                
                                
                                </table>
                            </div>
                            
                        </div>
                    </div>
                                      
                                      
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    
   
    
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
    
   
</body>
</html>
                                 
    