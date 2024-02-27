<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['rid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>RTO Management System || RTO Office Details</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
   <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
   <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">RTO Office Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">RTO Office Details</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<?php
$cid=$_SESSION['cid'];
$query=mysqli_query($con,"select tblstate.StateName,tblstate.ID as sid,tblcity.ID as cid,tblcity.CityName,tblcity.StateID,tblcity.CreationDate as ccd,tblrto.ID as rid,tblrto.StateID,tblrto.CityID,tblrto.NameofRTO,tblrto.RTOAddress,tblrto.Nodalofficer, tblrto.Username,Nodalofficer, tblrto.CreationDate as rcd from tblrto join tblstate on tblstate.ID=tblrto.StateID join tblcity on tblcity.ID=tblrto.CityID where tblrto.CityID='$cid'");
while($row=mysqli_fetch_array($query))
{
?>     
<table class="table table-bordered data-table">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 RTO Office Details</td></tr>

    <tr>
    <th>Name of RTO</th>
    <td><?php  echo $row['NameofRTO'];?></td>
    <th>Name of Nodal Officer</th>
    <td><?php  echo $row['Nodalofficer'];?></td>
 </tr>
 <tr>
    <th>Address of RTO</th>
    <td><?php  echo $row['RTOAddress'];?></td>
    <th>State Name</th>
    <td><?php  echo $row['StateName'];?></td>
 </tr>
 <tr>
    <th>City Name</th>
    <td><?php  echo $row['CityName'];?></td>
    <th>Username</th>
    <td><?php  echo $row['Username'];?></td>
 </tr>
 </table> <?php } ?>                            


                            </div>
                        </div>
                    </div>
                </main>
          <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php } ?>