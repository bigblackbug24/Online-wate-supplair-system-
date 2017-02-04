<?php include "connection.php" ;

if(isset($_POST['name']))

{
$File= "ProductImages/" . basename($_FILES['image']['name']);
$Move=move_uploaded_file($_FILES['image']['tmp_name'], $File);
$pname=$_POST['name'];
$description=$_POST['description'];
$liter=$_POST['liter'];
$saleprice=$_POST['sprice'];
$image=basename($_FILES['image']['name']);


$InsertSupplier=mysql_query("Insert INTO product (product_name,description,liter,sales_price,picture) VALUES ('$pname','$description','$liter','$saleprice','$image')");
if($InsertSupplier)
{
	$Status="Inserted Successfully";
}

else
{
	$Status="Insertion Error";
}

}
if(isset($_GET['p']))
{
	$ID=$_GET['p'];
	$Delete=mysql_query("Delete FROM product Where product_id='$ID'");
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
                     <h2>Product</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a New Product<center><?php echo @$Status ?></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                    <form name="form" action="Product.php" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input class="form-control" type="text" name="name" placeholder="Enter Product Name" required pattern="[A-Za-z\s]*" />
                                       <label>Description</label>  
                                       <input class="form-control" type="text"  name="description" placeholder="Enter Product Description" required patter"[A-Za-z\s]*" />
                                        <label>Liter</label>
                                        <input class="form-control" type="text" name="liter" placeholder="Enter Quantity in Liter" required pattern="[0-9]*" />
                                        <label>Sale Price</label>
                                        <input class="form-control" type="text" name="sprice" placeholder="Enter Sale Price" required pattern="[0-9]*" />
                                        <label>Product Image</label>
                                        <input class="form-control" type="file" name="image" /> 
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
                             Product Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                             <th>Liter</th>
                                            <th>Sales Price</th>
                                            <th>Product Image</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
											$SelectProduct=mysql_query("Select * FROM product");
											while($FetchProduct=mysql_fetch_array($SelectProduct))
											{ ?>
                                           
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $FetchProduct['product_id'] ?> </td>
                                            <td><?php echo $FetchProduct['product_name'] ?></td>
                                            <td><?php echo $FetchProduct['description'] ?></td>
                                             <td><?php echo $FetchProduct['liter'] ?> </td>
                                            <td><?php echo $FetchProduct['sales_price'] ?></td>
                                             <td><img src="ProductImages/<?php echo $FetchProduct['picture'] ?>" width="100px" /></td>
                                             <td><a href="product.php?p=<?php echo $FetchProduct['product_id'] ?>">DEL</a></td>
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
                                 
    