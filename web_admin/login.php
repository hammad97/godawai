<?php
session_start();
//session_regenerate_id(true);
include("connection.php");
$check=0;

if(isset($_POST['submit']))
{
$username = $_POST['user_name'];
$password = $_POST['password'];

$query=mysqli_query($connection,"select user_id from admin_login where user_name='$username' and user_password='$password'")or die ("query 1 incorrect.......");


list($user_id)=mysqli_fetch_array($query);



$_SESSION['user_id']=$user_id;
$query=mysqli_query($connection,"update admin_login set user_password='$password' where user_name='$username'")or die ("query 1 incorrect.......");
header("location: index.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" 	/>
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<title>GoDawai Admin Login</title>
</head>
<body>
<div class="container page-header well" align="center">
<a href="/mysite/index.php" ><img src="../images/logo.png"></a>
<h1 align="center">Welcome &nbsp;&nbsp;
Admin Login</h1>
<div align="center">
<form action="login.php" method="post" id="login" name="login" enctype="multipart/form-data">
<div class="form-group">
<input type="text" style="font-size:18px; width:200px" class="input-lg" name="user_name" id="user_name" placeholder="User-Name" required autofocus>
</div>
<div class="form-group">
<input type="password" class="input-lg" name="password" style="font-size:18px; width:200px" id="password" placeholder="Password" required>
 </div>
 <div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>
</div>

</form>
</div>
</div>
</body>
</html>