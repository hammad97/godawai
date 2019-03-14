<?php
if(isset($_POST['sendbutton']))
{
//echo "alert('in if')";
$user_name=$_POST['user_name'];
$user_mail=$_POST['user_mail'];
$user_message=$_POST['user_message'];

// Create connection
$conn = new mysqli("localhost","root","","godawai");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO user_feedback(user_name, user_mail, user_message)".
      "VALUES('" . $user_name . "', '" . $user_mail . "', '" . $user_message . "')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	  
		 
	$conn->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GoDawai - Medicines on a click away</title>
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/main.css" rel="stylesheet">
	<link href="layout/css/responsive.css" rel="stylesheet">
	<link href="layout/css/feed.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->
<body>
<?php include("include/header.php"); ?>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-20">    			   			
<h2 class="title text-center">Feedback</h2> </div>
	 		
			</div>  
<div class="row">  	
<div class="container">
  <form id="contact" action="feed.php" name="contact" accept-charset="utf-8" method="POST">
    <label><span>Name</span><input id="user_name" name="user_name" type="text" placeholder="Name" required /></label>
    <label><span>Email</span><input id="user_mail" name="user_mail" type="text" placeholder="Email" required /></label>
	<label><span>Message</span><textarea name="user_message" id="user_message" placeholder="Message" required ></textarea></label>

</div>
</div>
</div>
	<div class="col-sm-12">
    <button type="submit" name="sendbutton" id="sendbutton" class="btn btn-success" onclick="return true;">Send </button>
  </form>
</div>	
<br>
</br>
<?php include("include/footer.php"); ?>
<script src="layout/js/jquery.js"></script>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>	
    <script src="layout/js/feed.js"></script>
	<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>	