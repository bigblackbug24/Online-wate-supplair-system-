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
	$Delete=mysql_query("Delete FROM area Where area_id='$ID'");
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
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                     <h2>Area</h2>   
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a New Area<center><?php echo @$Status ?></center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                    <form name="form" action="area.php" method="post" >
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" name="City" required >
                                            <option value="">Select City</option>
                                            
                                            <?php
											$SelectCity=mysql_query("Select * FROM city");
											while($FetchCity=mysql_fetch_array($SelectCity))
											{ ?>
                                            <option value="<?php echo $FetchCity['city_id'] ?>"><?php echo $FetchCity['city_name'] ?></option>
                                            
                                            <?php } ?>
                                            
                                            </select>
                                          
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input class="form-control" type="text" name="Area" placeholder="Enter Your Area Name" required pattern="[A-Za-z0-9\s]*" />
                                          
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
                             Area Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Area Code</th>
                                            <th>City Code</th>
                                            <th>Area Name</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
                                    <?php
											$SelectCity=mysql_query("Select * FROM area");
											while($Fetcharea=mysql_fetch_array($SelectCity))
											{ ?>
                                           
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $Fetcharea['area_id'] ?> </td>
                                            <td><?php echo $Fetcharea['city_id'] ?></td>
                                            <td><?php echo $Fetcharea['area_name'] ?></td>
                                           <td><a href="area.php?a=<?php echo $Fetcharea['area_id'] ?>">DEL</a></td>
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
