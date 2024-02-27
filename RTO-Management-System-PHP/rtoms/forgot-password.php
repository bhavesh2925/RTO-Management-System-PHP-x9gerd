<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
$password=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select ID from users where  Email='$email' and MobileNumber='$contactno' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
      $query1=mysqli_query($con,"update users set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>RTO Management System | Forgot Password Page</title>
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
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
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
				<li>Reset Your Password</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- login -->
	<div class="login">
		<div class="container">
			<h6>Reset Your Password</h6>
			<h3>Welcome to our RTOMS.
				Reset your password and Fill below details.</h3>

			<form action="#" method="post" name="changepassword" onsubmit="return checkpass();">
				<input type="text"  name="email" placeholder="Enter Your Email" required="true">
<hr>
				<input type="text" name="contactno" placeholder="Contact Number" required="true" pattern="[0-9]+">
				<input type="password" id="userpassword" name="newpassword" placeholder="New Password" class="lock">
				<input type="password" class="form-control" id="userpassword" name="confirmpassword" placeholder="Confirm Password" class="lock">
				
				<div class="remember">
					 
					 <div class="w3agile_forgot">
						<h4><a href="login.php">Signin</a></h4>
					 </div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="Submit"  name="submit">
			</form>
				
			<div class="agile_back_home">
				<a href="index.php">back to home</a>
			</div>
		</div>
	</div>
<!-- //login -->
<!-- footer -->
	<?php include_once('includes/footer.php');?>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>