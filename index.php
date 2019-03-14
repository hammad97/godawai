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
	<section id="slider"><!--slider-->
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
<li data-target="#slider-carousel" data-slide-to="0" class=""></li>
<li data-target="#slider-carousel" data-slide-to="1" class=""></li>
<li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
	</ol>
	    <div class="carousel-inner">
		<div class="item">
		<div class="col-sm-6">
<h1><span>Get</span>-Dawaai</h1>
<h2>Medicines</h2>
<p>GoDawai offers you multiple Brand products in Medicines. Like 'Bayer, Pfizer, Searle , GSK and many more'
</p>
<a href="medicines.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/cos1.jpg" class="girl img-responsive" alt="">
		</div></div>
		<div class="item">
		<div class="col-sm-6">
<h1><span>Get</span>-Dawaai</h1>
<h2>Medical Equipment</h2>
<p>We bring to your doorsteps a wide range of professional brands, like: Edan, Midmark, Skytron, Steris, Stryker and many more. </p>
<a href="medicines.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/cos2.jpg" class="girl img-responsive" alt="">
		</div></div>
							
		<div class="item active">
		<div class="col-sm-6">
<h1><span>Get</span>-Dawaai</h1>
<h2>GoDawai</h2>
<p>We offer you medicines and medical equipments at wholesale rates, you can confirm from anywhere we will always be having lowest rates and genuine products.</p>
<a href="medicines.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/cos3.jpg" class="girl img-responsive" alt="">
		</div>
		</div>
		</div>
						
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i></a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i>
		</a>
		</div></div>
		</div></div>
	    </section><!--/slider-->
	
	<section>
	<div class="container">
    <div class="row">
	<div class="col-sm-3">
	<div class="left-sidebar">
<h2>Category</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->

	<div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=medicines">Medicines</a></h4>
		 </div></div>
         <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=equip">Medical Equipment</a></h4>
		 </div></div>
		</div><!--/category-products-->
		
        <div class="brands_products">
        <!--brands_products-->
<h2>Brands</h2>
	<div class="brands-name">
	<ul class="nav nav-pills nav-stacked">
	<li><a href="link_form.php?link=bayer"><img src="images/brands/bayer.jpg" style="width:200px"></a></li>
   <li><a href="link_form.php?link=abbott"><img src="images/brands/abbott.jpg" style="width:200px"></a></li>
   <li><a href="link_form.php?link=gsk"><img src="images/brands/gsk.png" style="width:200px"></a></li>
 <li><a href="link_form.php?link=novartis"><img src="images/brands/novartis.png" style="width:200px"></a></li>
<li><a href="link_form.php?link=pfizer"><img src="images/brands/pfizer.png" style="width:200px"></a></li>
   <li><a href="link_form.php?link=searle"><img src="images/brands/searle.png" style="width:200px"></a></li>

   </ul>
			</div></div><!--/brands_products-->
						
		</div></div>
				
			
		<div class="category-tab"><!--category-tab-->
			<div class="col-sm-12">
	<ul class="nav nav-tabs">
	<li  class="active">
    <a href="#sale" data-toggle="tab">
    Sale</a></li>
    <li><a href="#tablet" data-toggle="tab">
    Tablets</a></li>
    <li><a href="#syrups" data-toggle="tab">
    Syrups</a></li>
    <li><a href="#equip" data-toggle="tab">
    Equipment</a></li>
    </ul></div> 
			<div class="tab-content">
          <div class="tab-pane fade active in" id="sale">
<?php 
$sale=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where tags like '%sale%'
order by rand() LIMIT 0,4")or die("Query 2 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($sale))
{
	
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href=product_details.php?id=$product_id class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name </p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div>
			<img src='images/sale.png' class='sale' alt=''></div>
			</div></div>";
}
?>
            
		    </div>
			<div class="tab-pane fade" id="tablet">
			
            <?php 
$tablet=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%tablet%' order by rand() LIMIT 0,4")or die("Query 4 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($tablet))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href=product_details.php?id=$product_id class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
			</div>
			<div class="tab-pane fade" id="syrups">
			<?php 
$syrups=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%syrups%' order by rand() LIMIT 0,4")or die("Query 5 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($syrups))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href=product_details.php?id=$product_id class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
        <div class="tab-pane fade" id="equip">
			<?php 
$equip=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%equip%' order by rand() LIMIT 0,4")or die("Query 6 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($equip))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href=product_details.php?id=$product_id class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
         
        </div>
        
        <img style="width:100%" src="images/aaa copy.jpg">
        </div><!--/category-tab-->
	</div></div>				
	<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">
Recommended Items</h2>
		<?php include("include/recomended.php");?>
        </div><!--/recommended_items-->
</div>
</section><br>
	
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