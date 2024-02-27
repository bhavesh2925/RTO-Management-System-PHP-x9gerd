<?php
include('includes/config.php');
if(isset($_POST['$stateid'])){
 $sid=$_POST['$stateid'];

 $query=mysqli_query($con,"select * from tblcity where StateID='$sid'"); ?>
<option value="">Select City</option>
 <?php
    while($rw=mysqli_fetch_array($query))
    {
     ?>      
 <option value="<?php echo $rw['ID'];?>"><?php echo $rw['CityName'];?></option>
                  

<?php }} ?>
?>