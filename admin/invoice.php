<?php include "connection.php" ?>
<?php

$OID=$_GET['order_id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
window.print();
</script>

</head>

<body>

<center>

<div style="width:1024px; height:150px;">

<div style="height:150px; width:512px; float:left;" align="center">
<img src="../images/cooltext189854530610201.png"/>
</div>
<div style="height:150px; width:512px; float:left;" align="center">

<table>

<tr>
<td><b>Address : </b></td>
<td><u>_____________________________</u></td>
</tr>	

<tr>
<td><b>Email : </b></td>
<td><u>_____________________________</u></td>
</tr>

<tr>
<td><b>Phone : </b></td>
<td><u>_____________________________</u></td>
</tr>

<tr>
<td><b>Cell : </b></td>
<td><u>_____________________________</u></td>
</tr>


</table>



</div>


</div>

<div style=" height:200px; clear:both; width:1024" align="center">

<?php
$OQuery=mysql_query("select * FROM `order`
LEFT JOIN customer
ON customer.customer_id=`order`.customer_id
LEFT JOIN area
ON area.area_id=customer.area_id
LEFT JOIN supplier
ON supplier.area_id=area.area_id
WHERE `order`.order_id='$OID'
");
$FetchOD=mysql_fetch_array($OQuery);
?>

<hr />

<table width="1024px" cellpadding="0" cellspacing="0">

<tr>
<td width="15%"><b>Customar Name :</b></td>
<td width="30%"><u><?php echo $FetchOD['first_name'] ?></u></td>
<td width="10%"> </td>
<td width="15%"><b>Date :</b></td>
<td width="30%"><u><?php echo $FetchOD['order_date'] ?></u></td>
</tr>
<tr>
<td width="15%"><b>Country :</b></td>
<td width="30%"><u><?php echo $FetchOD['city'] ?></u></td>
<td width="10%"> </td>
<td width="15%"><b>City :</b></td>
<td width="30%"><u><?php echo $FetchOD['address'] ?></u></td>
</tr>

</table>

<table width="1024px" cellpadding="0" cellspacing="0">

<tr>
<td width="15%"><b>Cell :</b></td>
<td width="30%"><u><?php echo $FetchOD['cellno'] ?></u></td>
<td width="10%"> </td>
<td width="15%"><b>Telephone :</b></td>
<td width="30%"><u><?php echo $FetchOD['tel_landline'] ?></u></td>

</tr>
<tr>
<td width=""><b>Supplier Name</b></td>
<td width=""><u><?php echo $FetchOD['name'] ?></u></td>
</tr>

</table>


<table width="1024px" cellpadding="0" cellspacing="0">

<tr>
<td width="15%"><b>Address</b></td>
<td width="85%"><u><?php echo $FetchOD['address'] ?></u></td>

</tr>

</table>


</div>


<div style="width:1024px">

<table width="1024" border="1px" cellpadding="0" cellspacing="0">
    
      <tr>
        <th>Sr</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>LTR</th>
        <th>Rate</th>
        <th>Quantity</th>
        <th>Total</th>
        
      </tr>
    
    
    <?php
	$TTotal=0;
	$SrNo=0;
	$query4=mysql_query("select product_name,description,liter,sales_price,order_qty,sales_price*order_qty AS totalprice FROM order_detail
LEFT JOIN product
ON product.product_id=order_detail.product_id
where order_id=$OID");
$SrNo=0;
while($row4=mysql_fetch_array($query4))
{		
$SrNo=$SrNo+1;	


?>
    
      <tr>
        <td><?php echo $SrNo ?></td>
        <td><?php echo $row4['product_name']; ?></td>
        <td><?php echo $row4['description']; ?></td>
        <td><?php echo $row4['liter']; ?></td>
        <td><?php echo $row4['sales_price']; ?></td>
        <td><?php echo $row4['order_qty']; ?></td>
       
        <td><?php echo $totalprice=$row4['totalprice']; ?></td>
      
      </tr>
  
  <?php $TTotal=$TTotal+$totalprice; }
  
   ?>
   
 

  
  <tr>
  <td align="right" colspan="6"><strong>Total</strong> &nbsp;</td>
  <td  align="right"><?php echo $TTotal;?>/-</td>
  </tr>
  
  
  </table>

</div>



<div style="width:1024px; margin-top:50px;" align="center">

<table width="80%">

<tr>
<td width="13%"><b>Prepared By :</b></td>
<td width="20%"><u>_________________</u></td>

<td width="13%"><b>Checked By :</b></td>
<td width="20%"><u>_________________</u></td>


<td width="14%"><b>Approved By :</b></td>
<td width="20%"><u>_________________</u></td>
</tr>


</table>

<hr />
</div>
</center>

</body>
</html>