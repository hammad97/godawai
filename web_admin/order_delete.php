<?php
include("check_session.php");
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
  <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Order Delete History </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Order Id</th><th>Product Name</th><th>Customer Name</th><th>Date Deleted</th>
	
<?php 

$result=mysqli_query($connection,"select order_id,p_names,cus_name,datee from order_Delete_history")or die ("query 1 incorrect.....");

while(list($order_id,$p_names,$cus_name,$datee)=mysqli_fetch_array($result))
{
echo "<tr><td>$order_id</td><td>$p_names</td><td>$cus_name</td><td>$datee</td></tr>";
}
mysqli_close($connection);
?>
</table>
</div></div>

</div></div>
<?php include("include/js.php");?>
</body>
</html>