<?php session_start();
include_once('includes/config.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    
    $appid=$_GET['appid'];
    $ressta=$_POST['status'];
    $remark=$_POST['restremark'];
  
   $query=mysqli_query($con, "update   tblllicence set Status='$ressta',Remark='$remark' where ApplicationNumber='$appid'");
    if ($query) {
   
    echo '<script>alert("Learning licence Has been updated.")</script>';
    echo "<script type='text/javascript'> document.location ='all-ll-request.php'; </script>";
  }
  else
    {
    
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>RTO Management System || View Learning Licences Details</title>
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
                        <h1 class="mt-4">View Learning Licences</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">View Learning Licences</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<?php
 $app=$_GET['appid'];
$ret=mysqli_query($con,"select * from tblllicence join users on users.id=tblllicence.UserId where tblllicence.ApplicationNumber='$app'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <table class="table table-bordered data-table">
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
    <td><img src="../llimages/<?php  echo $row['ProfilePic'];?>" height="100" width="100"></td>
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
        <th>RTO Remark</th>
      <?php if($row['Remark']==""){ ?>

                     <td class="font-w600"><?php echo "Not Updated Yet"; ?></td>
                     <?php } else { ?>
                      <td><?php  echo $row['Remark'];?></td><?php } ?> 
  </tr>
  <tr>
    <th>RTO Action Date</th>
      <?php if($row['Remark']==""){ ?>

                     <td class="font-w600">Not Updated Yet</td>
                     <?php } else { ?>
                      <td><?php  echo $row['UpdationDate'];?></td><?php } ?> 
  </tr>
  <?php if($row['Status']=="Accepted")
{ ?>
  <tr>
  <th colspan="4" style="color:red;">
Note: Learning License will valid for 6 Month from the RTO Action Date

  </th>
</tr>
<?php } ?>

</table>

<?php

  if($status==""){ ?>

   <table class="table table-bordered data-table">
<form name="submit" method="post"> 
<tr>
    <th>Remark :</th>
    <td colspan="6">
    <textarea name="restremark" placeholder="" rows="5" cols="14" class="form-control" required="true"></textarea></td>
  </tr>

  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control" required="true" >
     <option value="Accepted" selected="true">Accepted</option>
      <option value="Rejected">Rejected</option>
   </select></td>
  </tr>
    <tr align="center" style="text-align: center';">
      <td></td>
    <td ><button type="submit" name="submit" class="btn btn-primary">Update</button></td>
  </tr>
</form>
  <?php } ?>
 


</table>
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