<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>RTO Management System || Search Driving Licence Application</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
 <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
       <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Search Driving Licence Application</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Search Driving Licence Application</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              
                            </div>
                            <form method="post" class="form-horizontal">
           
           <br>
            <div class="row">
<div class="col-4" style="padding-left: 30px;font-weight: bold;">Search by Application Number / Name :</div>
<div class="col-6"><input type="text" class="form-control"  id="searchdata" name="searchdata" value="" required='true' /></div>
</div>
          
           <div class="text-center">
                  <button class="btn btn-primary my-4" type="submit" name="search">Search</button>
                </div>
          </form>
                             <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];

  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
                            <div class="card-body">
                                <table id="datatablesSimple">
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
                                    <tfoot>
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
                                    </tfoot>
                                    <tbody>
<?php
$sid=$_SESSION['sid'];
$cid=$_SESSION['cid'];
$ret=mysqli_query($con,"select tblrto.ID as rtoid,tblrto.NameofRTO,tblrto.StateID as rstid,tblrto.CityID as rctid,tblldicence.ID as dlid,tblldicence.ApplicationNumber,tblldicence.StateID as dlsid,tblldicence.CityID as dlcid,tblldicence.ApplyDate,tblldicence.Status,users.id,users.FirstName,users.LastName,users.MobileNumber,users.Email from tblldicence join users on users.id=tblldicence.UserId join tblrto on tblrto.CityID=tblldicence.CityID where tblldicence.ApplicationNumber like '%$sdata%' || users.FirstName like '%$sdata%'");
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
                                        <?php $cnt=$cnt+1; } } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include_once('includes/footer.php');?>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>