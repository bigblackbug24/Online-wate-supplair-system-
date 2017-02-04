<?php
include "connection.php";

if(isset($_GET['o']))
{
	$ID=$_GET['o'];
	$Delete=mysql_query("Delete FROM order Where supplier_id='$ID'");
	if($Delete)
	{
	$Status="Deleted Successfully";
}

else
{
	$Status="Query Error";
}


}

if(isset($_GET['Status']))
{
	$Status=$_GET['Status'];
	$order_id=$_GET['order_id'];
	$sql=mysql_query("UPDATE `order` SET `status`='$Status' WHERE `order_id`='$order_id'");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin  : Basit Admin</title>
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
                     <h2>Orders</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Orders Detail<center><?php echo @$Status ?></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                    <form name="form" action="supplier.php" method="post" >
                                        <div class="form-group">
                                           <?php
										  
										 if(isset($_GET['o']))
										 {  $OID=$_GET['o'];
											$SelectOrder=mysql_query("Select * FROM `order` Where order_id='$OID'");
											while($FetchOrder=mysql_fetch_array($SelectOrder))
											{ ?>
                                            <label>Customer ID</label>
                                            <input class="form-control" type="text" name="" value="<?php echo $FetchOrder['customer_id'] ?>" />
                                              <label>Date</label>
                                            <input class="form-control" type="text" name="" value="<?php echo $FetchOrder['order_date'] ?>" />
                                              <label>Supplier</label>
                                            <input class="form-control" type="text" name="" value="<?php echo $FetchOrder['supplier_od'] ?>"/>
                                             <label>Status</label>
                                            <input class="form-control" type="text" name=""  value="<?php echo $FetchOrder['status'] ?>" />
                                            
                                          <?php }} ?>
                                        </div>
                                      
                                      
                                      <div class="form-group">
                                        </div>
                                      
                                      </form>
                                      </div>
                                      </div>
                                      </div>
  <div class="panel panel-default">
                        <div class="panel-heading">
                             Order Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date Time</th>
                                            <th>First Name</th>
                                            <th>City</th>
                                             <th>Cell No</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
											$OrderDetail=mysql_query("select order_id,first_name,order_date,`status`,city,cellno,address FROM `order`
LEFT JOIN customer
ON customer.customer_id=`order`.customer_id
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
                                            <td>
                                            <a href="invoice.php?order_id=<?php echo $FetchOrderDetail['order_id'] ?>">View</a> |
                                             <a href="order.php?order_id=<?php echo $FetchOrderDetail['order_id'] ?>&Status=Canceled">Canceled</a> |
                                              <a href="order.php?order_id=<?php echo $FetchOrderDetail['order_id'] ?>&Status=Approved">Approved</a>
                                            </td>
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
                                 
    