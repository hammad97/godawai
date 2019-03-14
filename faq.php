<?php include("connection.php");?>
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
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->

<body>
	<?php include("include/header.php"); ?>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
<h2 class="title text-center">Information</h2>    			    			</div>
			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    				<h2 class="title text-center">Frequently Asked Questions</h2>
<div class="status alert alert-success" style="display: none"></div>
<div class="text-left">
<?php

 $product_details = mysqli_query($connection,"select question,answer from faq")or die("Query 1 is inncorrect..........");

if ($product_details->num_rows > 0) {
		echo "<p>";
    while($row = $product_details->fetch_assoc()) {
		echo $row["question"] . "<br>";
		echo $row["answer"] . "<br>";
    }
		echo "</p>";	
} else {
    echo "0 results";
}
mysqli_close($connection)
 ?>
<!--
<p>
How to Order?
<br>
Our user-friendly website lists hundreds of products in many different categories. 
<br>
Just browse, choose and add your selected product to the cart. Put your details and check out by selecting a payment method. 
<br>
<br>
<br>
Q: How to use Cart?
<br>
The cart allows you to review your selection, make sure everything is okay, make some changes before ordering if needed, see the final price and the total amount. 
<br>
You will access it every time you click on "Buy a product" or on "Cart" at the top of the page.
<br>
<br>
Q: Do I have to order online?
<br>
As we are primarily an online retailer therefore you can only order online.
<br>
 It is fast, convenient and safe. Plus, you get a larger variety of products.
<br>
 In uncertain conditions for instance if your internet crashes, then you may call our customer support team and order via telephone.
<br>
<br>
Q: How do I know that my order has been placed?
<br>
Once you've placed your order, you will receive an order confirmation email containing your order number.
<br>
You will also receive a confirmation call from our team shortly.
<br>
<br>
Q: Can I make changes to my order?
<br>
Definitely! You may change the order until you receive a confirmation call from our customer representative.
<br>
 After you receive a confirmation call, you will not be able to make changes to your order.
<br>
<br>
Q: Can I cancel my order?
<br>
Yes! If in case you want to cancel your order after placing it, you will need to make sure that you cancel it before shipment. 
<br>
Once you receive an email saying that the order has been shipped, you won’t be able to cancel it.
<br>
<br>
Q: What if my desired product is out of stock?
<br>
You can set a notification update on that product and we will let you know once it becomes available.
<br>
<br>
Q: What if I can’t find something I want on GoDawai?
<br>
Please inform us via email or by calling our customer support. We are always willing to expand our product range.
<br>
<br>
Q2: How can I contact you?
<br>
Please fill in the Contact Us form, or 
<br>
call us at Mobile: +92 123 456 789
<br>
Email: info@godawai.com
<br>
<br>
Q:Are all products on GoDawai original and genuine?
<br>
Yes, we are committed to offering our customers only 100% genuine and original products.
<br>
 We also take all necessary actions to ensure this: any seller found to be selling non-genuine prodcts is immediately delisted from GoDawai.
<br>
<br>
Q:Are the prices on GoDawai negotiable?
<br>
Prices on GoDawai are not negotiable. GoDawai has thousands of sellers which offer you the best prices and deals.
<br>
<br>
Q:Why do I see different prices for the same product?
<br>
Some of our products are offered by different sellers. That allows you to chose your prefered offer.
	    			<br>
					</p>
					-->
					</div>
	    		</div>
					<div class="col-sm-4">
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></a></i>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
	    				</div>
	    			</div>	
	    		</div>
					</div>
	    		</div>
	    		    			
	    	<!--/#contact-page-->
<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>

