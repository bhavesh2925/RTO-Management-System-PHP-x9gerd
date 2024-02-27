<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['rtomsuid']==0)) {
  header('location:logout.php');
  } else{


  ?>
<!DOCTYPE html>
<html>
<head>
<title>RTO Management System || All Learning Licence Request</title>

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
				<li>All Learning Licence Request</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>All Learning Licence Request</h3>
			<p class="quia">Check Your Learning Licence Request</p>
			
			<div class="col-md-12 wthree_contact_left">
				<h4>Learning Licence Request Status</h4>
				<?php
 $app=$_GET['appid'];
$ret=mysqli_query($con,"select * from tblllicence join users on users.id=tblllicence.UserId where tblllicence.ApplicationNumber='$app'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <table class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 User Details</td></tr>

    <tr>
    <th>Application Number</th>
    <td><?php  echo $row['ApplicationNumber'];?></td>
    <th>First Name</th>
    <td><?php  echo $row['FirstName'];?></td>
 </tr>
    
 
    <th>Last Name</th>
    <td><?php  echo $row['LastName'];?></td>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
  <tr>
    
    <th>Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
    <th>Profile Pic</th>
    <td><img src="llimages/<?php  echo $row['ProfilePic'];?>" height="100" width="100"></td>
  </tr>
  
  <tr>
    
       <th>Father's Name</th>
    <td><?php  echo $row['FathersName'];?></td>
     <th>Date of Birth</th>
    <td><?php  echo $row['DateofBirth'];?></td>
  </tr>
 
  <tr>
   
     <th>Education Qualification</th>
    <td><?php  echo $row['EducationQualification'];?></td>
     <th>Type of Licence</th>
    <td><?php  echo $row['LicenceType'];?></td>
  </tr>
  <tr>
     <th>Permanent Address</th>
    <td><?php  echo $row['PermanentAddress'];?></td>
     <th>Communication Address</th>
    <td><?php  echo $row['CommunicationAddress'];?></td>
  </tr>
  <tr>
     <th>Blood Group</th>
    <td><?php  echo $row['BloodGroup'];?></td>
     <th>Apply Date</th>
    <td><?php  echo $row['ApplyDate'];?></td>
  </tr>
  <tr>
    <th>Application Status</th>
    <td> <?php  
    $status=$row['Status'];
if($row['Status']=="Accepted")
{
  echo "Approved";
}


if($row['Status']=="Rejected")
{
  echo "Application Rejected";
}

if($row['Status']=="")
{
  echo "Wait for  rto approval";
}



     ;?></td>
     <th>Application Remark</th>
      <?php if($row['Remark']==""){ ?>

                     <td class="font-w600"><?php echo "Not Updated Yet"; ?></td>
                     <?php } else { ?>
                      <td><?php  echo $row['Remark'];?></td><?php } ?> 
  </tr>
</table><?php } ?>
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