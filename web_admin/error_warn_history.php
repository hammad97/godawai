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
	<h1>Warning/Error Logs </h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Message</th><th>Date Occurred</th>
	
<?php 

$result=mysqli_query($connection,"select message,datee from warning_error_logs")or die ("query 1 incorrect.....");

while(list($message,$datee)=mysqli_fetch_array($result))
{
echo "<tr><td>$message</td><td>$datee</td></tr>";
}

?>
</table>
</div></div>

</div></div>
<?php include("include/js.php");?>
</body>
</html>