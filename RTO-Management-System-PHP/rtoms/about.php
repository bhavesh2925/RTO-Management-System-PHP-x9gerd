<?php
session_start();
error_reporting(0);

include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>RTO Management System | About Us</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});
	</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<?php include_once('includes/header.php');?>
<!-- //header -->
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>|</i></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- about -->
	<div class="about">
		<div class="container">
			<h3>About Us</h3>
			<p class="quia">detail description about RTO MS</p>

			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_left">
					<div class="col-md-6 agile_about_grid_left1">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-6 agile_about_grid_left1">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
					<img class="agile_about_grid_left_img img-responsive" src="images/banner.jpg" alt=" " />
				</div>
				<div class="col-md-6 agile_about_grid_right">
					 <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
					<h4><?php  echo $row['PageTitle'];?></h4>
					<p><?php  echo $row['PageDescription'];?></p><?php } ?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->


<!-- footer -->
	<?php include_once('includes/footer.php');?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>