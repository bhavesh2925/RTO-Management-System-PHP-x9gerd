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
<title>RTO Management System || All Driving Licence Request</title>

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
				<li>All Driving Licence Request</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>All Driving Licence Request</h3>
			<p class="quia">Check Your Driving Licence Request</p>
			
			<div class="col-md-12 wthree_contact_left">
				<h4>Driving Licence Request Status</h4>
				<table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Application Number</th>
                                            <th>RTO Name</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Apply Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                          
                                    <tbody>
<?php
$uid=$_SESSION['rtomsuid'];
$ret=mysqli_query($con,"select tblrto.ID as rtoid,tblrto.NameofRTO,tblrto.StateID as rstid,tblrto.CityID as rctid,tblldicence.ID as dlid,tblldicence.ApplicationNumber,tblldicence.StateID as dlsid,tblldicence.CityID as dlcid,tblldicence.ApplyDate,tblldicence.Status,users.id,users.FirstName,users.LastName,users.MobileNumber,users.Email from tblldicence 
    join users on users.id=tblldicence.UserId 
    left join tblrto on tblrto.CityID=tblldicence.CityID where tblldicence.UserId=$uid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>  

                                <tr>
                                            <td><?php echo $cnt;?></td>
                  <td><?php  echo $row['ApplicationNumber'];?></td>
                  <td><?php  echo $row['NameofRTO'];?></td>
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                  <td><?php  echo $row['Email'];?></td>
                  <td><?php  echo $row['ApplyDate'];?></td>
                  <?php if($row['Status']==""){ ?>

                     <td class="font-w600"><?php echo "Not Updated Yet"; ?></td>
                     <?php } else { ?>
                      <td><?php  echo $row['Status'];?></td><?php } ?> 
                                    <td><a href="view-dl-request.php?appid=<?php echo $row['ApplicationNumber'];?>" class="btn btn-primary">View Details</a></td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>
                                       
                                    </tbody>
                                </table>
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