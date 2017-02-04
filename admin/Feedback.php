<?php include "connection.php" ;

if(isset($_POST['Area']))

{
$Area=$_POST['Area'];
$City=$_POST['City'];
$InsertArea=mysql_query("Insert INTO area (area_name,city_id ) VALUES ('$Area','$City')");
if($InsertArea)
{
	$Status="Inserted Successfully";
}

else
{
	$Status="Insertion Error";
}

}
if(isset($_GET['a']))
{
	$ID=$_GET['a'];
	$Delete=mysql_query("Delete FROM usercomment Where cid='$ID'");
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
    <title> Admin</title>
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
                     <h2>User Comment</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                     </div>
                                      </div>
                                      </div>
     <div class="panel panel-default">
                        <div class="panel-heading">
                             FeedBack Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>C_Id</th>
                                            <th>first_name</th>
                                            <th>last_name</th>
                                            <th>contact</th>
                                            <th>comment</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
											$SelectCity=mysql_query("Select * FROM usercomment");
											while($Fetcharea=mysql_fetch_array($SelectCity))
											{ ?>
                                           
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $Fetcharea['cid'] ?> </td>
                                            <td><?php echo $Fetcharea['first_name'] ?></td>
                                            <td><?php echo $Fetcharea['last_name'] ?></td>
                                            <td><?php echo $Fetcharea['contactno'] ?></td>
                                            <td><?php echo $Fetcharea['comment'] ?></td>
                                           <td><a href="Feedback.php?a=<?php echo $Fetcharea['cid'] ?>">DEL</a></td>
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
