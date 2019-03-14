<?php include("connection.php"); ?>
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
	
	<section>
		<div class="container">
			<div class="row">
               <div class="col-sm-3">
	<div class="left-sidebar">
<h2>Category by Type And Diseases</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	<div class="panel panel-default">
	<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" 
href="#medicines">
         <span class="badge pull-right">
         <i class="fa fa-plus"></i>
         </span>Medicines</a>
</h4>
	</div>
	<div id="medicines" class="panel-collapse collapse">
	<div class="panel-body">
		<ul>
<li><a href="link_form.php?link=tablet">Tablets </a></li>
<li><a href="link_form.php?link=syrup">Syrups </a></li>
<li><a href="link_form.php?link=vial">Medication Vial </a></li>
<li><a href="link_form.php?link=oralvial">Oral Medication Vial</a></li>
<li><a href="link_form.php?link=ointment">Ointments</a></li>
<li><a href="link_form.php?link=drops">Drops</a></li>
		</ul>
	</div></div>
	</div>
	
		<div class="panel panel-default">
		<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" href="#equip">
<span class="badge pull-right"><i class="fa fa-plus">
</i></span>Medical Equipements</a></h4>
		</div>
		<div id="equip" class="panel-collapse collapse">
		<div class="panel-body">
	<ul>
	<li><a href="link_form.php?link=imaging">Medical Imaging Machines</a></li>
	<li><a href="link_form.php?link=treatmentpumps">Treatment Pumps</a></li>
	<li><a href="link_form.php?link=lasers">Medical Lasers</a></li>
	<li><a href="link_form.php?link=testing">Testing Equipements</a></li>
	</ul>
		 </div></div>
		 </div>
		<div class="panel panel-default">
		<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordian" href="#disease">
<span class="badge pull-right"><i class="fa fa-plus">
</i></span>Diseases</a></h4>
		</div>
		<div id="disease" class="panel-collapse collapse">
		<div class="panel-body">
	<ul>
	<li><a href="link_form.php?link=allergycoldcoughdisease">Allergy, Cold and Cough</a></li>
	<li><a href="link_form.php?link=bonesjointsmusclesdisease">Bones, Joints and Muscles</a></li>
	<li><a href="link_form.php?link=liverkidneydisease">Liver and Kidney</a></li>
	<li><a href="link_form.php?link=diabetesdisease">Diabetes Management</a></li>
	<li><a href="link_form.php?link=cardiacdisease">Cardiac Care</a></li>
	<li><a href="link_form.php?link=eyeeardisease">Eye and Ear care</a></li>
	<li><a href="link_form.php?link=skinhairdisease">Skin and Hair Care</a></li>
	<li><a href="link_form.php?link=stomachdisease">Stomach Care</a></li>
	</ul>
		 </div></div>
		 </div>		 
         </div>
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
			
</div>              
         
					
				</div>
			</div>
		</div>
	</section>
	
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