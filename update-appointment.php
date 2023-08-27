
<?php
  include "./include/connection.php";

    $up=$_GET['upid'];
    $upsql="SELECT * FROM `patient_record` WHERE `pid`='$up'";
    $uprun=mysqli_query($conn,$upsql);
    $upfet=mysqli_fetch_assoc($uprun);
  if(isset($_POST['submit'])){
    $patient_name=mysqli_real_escape_string($conn,$_POST['patient_name']);
    $pfather_name=mysqli_real_escape_string($conn,$_POST['pfather_name']);
    $pemail=mysqli_real_escape_string($conn,$_POST['pemail']);
    $pmobile_number=mysqli_real_escape_string($conn,$_POST['pmobile_number']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
    $cdoctorname=mysqli_real_escape_string($conn,$_POST['cdoctorname']);
    $pdate=mysqli_real_escape_string($conn,$_POST['pdate']);
    date_default_timezone_set("Asia/Karachi");
    $ptime=mysqli_real_escape_string($conn,$_POST['ptime']);
    
    $sql="UPDATE `patient_record` SET `patient_name`='$patient_name',`pfather_name`='$pfather_name',`pemail`='$pemail',`pmobile_number`='$pmobile_number',`password`='$password',`cpassword`='$cpassword',`cdoctorname`='$cdoctorname',`pdate`='$pdate',`ptime`='$ptime' WHERE `pid`='$up'";
    $run=mysqli_query($conn,$sql);
    if($run){
      echo "<script>alert('Your Appointment has been updated')</script>";   
      header("Refresh:0,url=./view-appointment.php");
    }else{
      echo "<script>alert('Your Appointment has not been updated')</script>"; 
    }
  }
 
  ?>



<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<?php 
include "./include/header.php";
?>
<style>
  body{
    background-image: url(./include/pic1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  .card {
    background-color: rgba(28, 40, 145, 0.25);
    
  }
  .form-group label{
    color:white;
  }
 
</style>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-4">
        <div class="row justify-content-center ">
          
          <div class="col-12 col-sm-10  col-md-6  col-lg-6  col-xl-6 ">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="text-white">Register your Appointment</h4>
              </div>
              <div class="card-body">
                <form method="POST" >
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Patient Name</label>
                      <input id="frist_name" type="text" class="form-control" value="<?php echo $upfet['patient_name']?>" name="patient_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="father_name">Patient Father Name</label>
                      <input id="father_name" type="text" class="form-control" value="<?php echo $upfet['pfather_name']?>" name="pfather_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" value="<?php echo $upfet['pemail']?>" class="form-control" name="pemail">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile_number">Mobile number </label>
                    <input id="mobile_number" type="tel" class="form-control" value="<?php echo $upfet['pmobile_number']?>" name="pmobile_number">
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password"  value="<?php echo $upfet['password']?>" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="cpassword" class="d-block">Password Confirmation</label>
                      <input id="cpassword"name="cpassword" value="<?php echo $upfet['cpassword']?>" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="doctor">Choose a Doctor </label>
                    
                    <select name="cdoctorname" id="" class="form-control">
                    <option selected>Choose a doctor</option>
                    <?php
                      $sql="SELECT * FROM `doctors-name`";
                      $run=mysqli_query($conn,$sql);
                      while($fet=mysqli_fetch_assoc($run)){
                        ?>
                        <option value="<?php echo $fet['did']?>"><?php echo $fet['dname']?></option>
                        <?php
                      }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="date">Appointment date </label>
                    <input id="date" value="<?php echo $upfet['pdate']?>" type="date" class="form-control" name="pdate">
                    
                  </div>
                  <div class="form-group">
                    <label for="time">Appointment time </label>
                    <input id="time" type="time" value="<?php echo $upfet['ptime']?>" class="form-control" name="ptime">
                    
                  </div>
                 
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                      Update your Appointment
                    </button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
  include "./include/footer.php";
  ?>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>