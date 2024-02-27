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
        
        <title>RTO Management System | RTO Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
   <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                          
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <?php 
$sid=$_SESSION['sid'];
$cid=$_SESSION['cid'];                          
$query2=mysqli_query($con,"Select * from  tblllicence where Status is null && StateID=$sid && CityID=$cid");
$newapp=mysqli_num_rows($query2);
?>
                                    <div class="card-body">New LL Application(<?php echo $newapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="new-ll-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <?php $query3=mysqli_query($con,"Select * from  tblllicence where Status ='Accepted' && StateID=$sid && CityID=$cid");
$accapp=mysqli_num_rows($query3);
?>
                                    <div class="card-body">Accepted LL Application(<?php echo $accapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="accepted-ll-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <?php $query4=mysqli_query($con,"Select * from  tblllicence where Status ='Rejected' && StateID=$sid && CityID=$cid");
$rejapp=mysqli_num_rows($query4);
?>
                                    <div class="card-body">Rejected LL Application(<?php echo $rejapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="rejected-ll-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <?php $query5=mysqli_query($con,"Select * from  tblldicence where Status is null && StateID=$sid && CityID=$cid");
$newdlapp=mysqli_num_rows($query5);
?>
                                    <div class="card-body">New DL Application(<?php echo $newdlapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="new-dl-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <?php $query6=mysqli_query($con,"Select * from  tblldicence where Status ='Accepted' && StateID=$sid && CityID=$cid");
$accdlapp=mysqli_num_rows($query6);
?>
                                    <div class="card-body">Accepted DL Application(<?php echo $accdlapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="accepted-dl-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <?php $query7=mysqli_query($con,"Select * from  tblldicence where Status ='Rejected' && StateID=$sid && CityID=$cid");
$rejdlapp=mysqli_num_rows($query7);
?>
                                    <div class="card-body">Rejected DL Application(<?php echo $rejdlapp;?>)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="rejected-dl-request.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                     
                    </div>
                </main>
              <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>