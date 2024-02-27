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
        
        <title>RTO Management System - Between Dates Reports</title>
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
                        <h1 class="mt-4">DL Between Dates Reports</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">DL Between Dates Reports</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<form  method="post" action="bwdates-reports-dldetails.php">                                
<div class="row">
<div class="col-2">From Date:</div>
<div class="col-6">
    <input type="date" class="form-control" name="fromdate" id="fromdate" value="" required='true' />
</div>
</div>
<br>
<div class="row">
<div class="col-2">To Date:</div>
<div class="col-6"><input type="date" class="form-control" name="todate" id="todate" value="" required='true' /></div>
</div>
<br>
<div class="row">
<div class="col-2">Request Type:</div>
<div class="col-6"><input type="radio" name="requesttype" value="all" checked="true">All
                <input type="radio" name="requesttype" value="Accepted">Accepted
                <input type="radio" name="requesttype"  value="Rejected">Rejected
                  <input type="radio" name="requesttype" value="">New
                 </div>
</div>

<div class="row">
<div class="col-2"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
</div>

</form>
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