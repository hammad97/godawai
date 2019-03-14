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
	    		<div class="col-sm-9">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Terms & Conditions</h2>
<div class="status alert alert-success" style="display: none"></div>

<?php

 $res = mysqli_query($connection,"select text from termncondition")or die("Query 1 is inncorrect..........");

if ($res->num_rows > 0) {
		echo "<p>". "Your access to and use of this website is subject to the following terms and conditions and all applicable laws. By accessing and browsing this Website, you accept, without limitation or qualification, these terms and conditions and acknowledge that any other agreements regarding the use of this Website between you and Godawai(Pvt.) Ltd.are superseded and of no force or effect.<br>";
    while($row = $res->fetch_assoc()) {
		echo $row["text"] . "<br>";
    }
		echo "</p>";	
} else {
    echo "0 results";
}
mysqli_close($connection)
 ?>
 <!--
Your access to and use of this website is subject to the following terms and conditions and all applicable laws. By accessing and browsing this Website, you accept, without limitation or qualification, these terms and conditions and acknowledge that any other agreements regarding the use of this Website between you and Godawai(Pvt.) Ltd.are superseded and of no force or effect.
<br>

1.	The information on this Website is intended for general information purposes only and its accuracy is not guaranteed. Godawai hires experienced, qualified pharmacists from reputable institutions and whilst they may, if asked, recommend a pharmaceutical product for a particular use, it is strongly urged that neither this service nor the use of this Website should be used as a substitute for medical care or medical advice. Should you have a medical condition, promptly see your physician/general practitioner or other health care provider.
<br>
2.	Your order shall stand confirmed once it is dispatched from the relevant Godawai storage facility, which is normally within ten (10) minutes of order placement. Once confirmed, you shall be bound to pay for your order upon its delivery at the address supplied by you in this connection at the time of order placement. In the event of any failure to make payment, Godawai reserves its right to take appropriate steps, at your risk and cost, for the recovery of the outstanding amount along with any applicable damages.
<br>
3.	Many of the pharmaceutical products listed on this Website are available only by prescription. Such products shall not be physically handed over to you by Godawai’s riders until and unless you have provided a recent valid prescription to Godawai along with such other details as Godawai deems appropriate (including but not limited to the name, specialisation, contact details and place of practice of your doctor) either by electronically transmitting scanned copies thereof to Godawai or by providing physical copies thereof to the Godawai rider at the time of delivery.
<br>
4.	The information, documents and graphic depictions (the “Information”) published on this Website are the property of Godawai and where applicable, its business partners. Godawai assumes no responsibility for errors or omissions in the Information on this Website. In no event shall Godawai be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of this Website or the Information. Godawai reserves the right to make additions, deletions, or modification to the Information on this Website at any time without prior notice.
<br>
5.	Except as provided in this paragraph, no license or right, express or implied, is granted to any person under any patent, trademark, trade dress or other proprietary right. Godawai grants a limited right to use the Information provided that the Information is not modified in any way and is used for informational and non-commercial personal use, and provided that Godawai’s copyright notice appears on any copies.
<br>
6.	Links to third party websites may be provided for the interest or convenience of visitors to this Website. The terms of use and privacy policies of third party websites may be different from those that are applicable to this Website. A link from this Website to a third party website does not constitute an endorsement of the products or services offered by the third party website. Furthermore, Godawai accepts no liability for links to third party websites (including any liability deriving from a breach or omission in the privacy policies of third parties) and is not in any way responsible for the accuracy or legality of the content thereof.
<br>
7.	Godawai has not reviewed any or all of the third party websites which contain links to this Website and is not in any way responsible for the accuracy or legality of the content of any such off-site pages or any other websites linked to this Website. If you wish to link your website to this Website, you may only link to the home page. You may not link to any other pages within this Website without the prior written consent of Godawai. Quotation or use of one or more portions of this Website in any third party website without written consent is likewise prohibited.
<br>
8.	Information on this Website is provided "as is" without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement. 9.	Godawai may at any time revise these terms and conditions by updating this posting. You are bound by any such revisions and should therefore periodically visit this page to review the then current terms and conditions by which you are bound.				    	
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