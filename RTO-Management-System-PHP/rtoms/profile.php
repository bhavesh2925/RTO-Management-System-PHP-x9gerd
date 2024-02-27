
<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['rtomsuid']==0)) {
  header('location:logout.php');
  } else{
     if(isset($_POST['submit']))
  {
    $sid=$_SESSION['rtomsuid'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    
   

    $query=mysqli_query($con, "update users set FirstName='$fname', LastName='$lname' where ID='$sid'");


    if ($query) {
    echo "<script>alert('Your profile has been updated.');</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>RTO Management System || User Profile</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script>
function getcity(val1) {
  $.ajax({
type:"POST",
url:"get_city.php",
data:'$stateid='+val1,
success:function(data){
$("#city").html(data);
}

  });
}
</script>
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
				<li>User Profile</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>User Profile</h3>
			<p class="quia">Check Your Own Profile</p>
			
			<div class="col-md-8 wthree_contact_left">
				<h4>User Profile</h4>
				<form action="#" method="post" enctype="multipart/form-data">
					<?php
$uid=$_SESSION['rtomsuid'];
$ret=mysqli_query($con,"select * from users where ID='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>  
					<div class="col-md-6 wthree_contact_left_grid">
						
						<label style="padding-top: 20px;">First Name</label>
						<input type="text"  id="firstname" name="firstname" value="<?php  echo $row['FirstName'];?>" required="true">
						<br>
						<label style="padding-top: 20px;">Last Name</label>
						<input type="text"  id="lastname" name="lastname" value="<?php  echo $row['LastName'];?>" required="true">
						<label style="padding-top: 20px;">Email address</label>
						<input type="email"  id="email" name="email" value="<?php  echo $row['Email'];?>"  readonly="true">
						<label style="padding-top: 20px;">Mobile Number</label>
						<input type="text" id="mobilenumber" name="mobilenumber" value="<?php  echo $row['MobileNumber'];?>"  readonly="true">
						<br>
						<label>Registraton Date</label>
						<input type="text" id="regdate" name="regdate" value="<?php  echo $row['regDate'];?>"  readonly="true">
						
					</div>
				
					<div class="clearfix"></div>
				<hr><?php } ?>
					<button class="btn btn-primary" type="submit" name="submit">Update</button>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<?php include_once('includes/footer.php');?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
<?php } ?>