<?php
   include "./include/connection.php";
   session_start();
   $email=$_SESSION['email'];
   $phonenumber=$_SESSION['phonenumber'];
   
   if($email and  $phonenumber){
       echo "<script>alert('Welcome here')</script>";
       session_destroy();
   }else{
       session_destroy();
        header("location:auth-login.php");
   }
    $sql="SELECT * FROM `cvmaker` INNER JOIN `date-of-birth` ON `date`=`dateid` INNER JOIN `month-of-birth` ON `month`=`mbid` INNER JOIN `year-of-birth` ON `year`=`ybid`  INNER JOIN `edendmonth` ON `endmonthedu`=`ed-end-id`  INNER JOIN `edendyear` ON `endyearedu`=`edendid` INNER JOIN `edmonth` ON `startmonthedu`=`edid`  INNER JOIN `edu-year` ON `startyearedu`=`ed-id`   INNER JOIN `weendmonth` ON `endmonth`=`weendid` INNER JOIN `weendyear` ON `endyear`=`weyearid`  INNER JOIN `wemonth` ON `startmonth`=`weid` INNER JOIN `weyear` ON `startyear`=`weyid` WHERE `email`='$email'  ";
    
   @$run=mysqli_query($conn,$sql);
   @$fet=mysqli_fetch_assoc($run)
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Ubuntu:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./viewcvstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="main p-5">
        <div class="container d-flex justify-content-center">
            <div class="row w-75 row1 ">
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="left ">
                        <div class="img " align='center' >
                            <img src="<?php echo "./img/".$fet['lastname']?>"  class="mt-2" style='width:200px; height:200px; border-radius:50%; border:2px solid white; align-items:center;'  alt="picture">
                        </div>
                    
                        <div class="name p-3">
                            <h1><b> <?php echo $fet['firstname']?></b></h1>
                        </div>
                        <div class="contact p-3">
                            <h3><b>Contact</b></h3>
                            <hr class="w-100">
                            <h4>Address:</h4>
                            <p><?php echo $fet['address']?></p>
                            <h4>Phone:</h4>
                            <p><?php echo $fet['phonenumber']?></p>
                            <h4>Email:</h4>
                            <p><?php echo $fet['email']?></p>
                        </div>
                        <div class="profile p-3">
                            <h3><b>Profile</b></h3>
                            <hr class="w-100 h-3">
                            <h4>Date of Birth</h4>
                            <p><?php echo $fet['dateofbirth']?>-<?php echo $fet['monthofbirth']?>-<?php echo $fet['yearofbirth']?></p>
                            
                            <h4>Place of Birth</h4>
                            <p><?php echo $fet['placeofbirth']?></p>
                            <h4>Gender</h4>
                            <p><?php echo $fet['gender']?></p>
                            <h4>Martial Status</h4>
                            <p><?php echo $fet['martialstatus']?></p>
                            <h4>Nationality</h4>
                            <p><?php echo $fet['nationality']?></p>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 m-0 p-0">
               
                    <div class="right ">
                        <div class="workexperience ">
                            <h3><b>Work Experience</b> </h3>
                            <hr class="w-100">
                            <div class="name">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h5><b><?php echo $fet['employer']?></b></h5>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                        <h5><b><?php echo $fet['jobtitle']?></b></h5>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 ">
                                        <h5><b><?php echo $fet['wemonth2']?><sup class="text-danger">Start</sup></b></h5>
                                        <h5><b><?php echo $fet['weyear2']?></b></h5>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <h5><b><?php echo $fet['weendmonth2']?><sup class="text-danger">End</sup></b></h5>
                                        <h5><b><?php echo $fet['weendyear2']?></b></h5>
                                    </div>
                                </div>
                                <br>
                                <div class="workdescription">
                                    <h3><b>Work Description</b> </h3>
                                    <hr class="w-100">
                                    <p><?php echo $fet['des']?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="Educationexperience  mt-5">
                            <h3><b>Education</b></h3>
                            <hr class="w-100">
                            <div class="education">
                                <div class="row">
                                    <div class="school">
                                        <h5><b><?php echo $fet['school']?></b></h5>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <h5><b><?php echo $fet['degree']?></b></h5>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 ">
                                        <h5><b><?php echo $fet['edmonth2']?><sup class="text-danger">Start</sup></b></h5>
                                        <h5><b><?php echo $fet['edyear']?></b></h5>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <h5><b><?php echo $fet['edendmonth2']?><sup class="text-danger">End</sup></b></h5>
                                        <h5><b><?php echo $fet['edendyear2']?></b></h5>
                                    </div>
                                </div>
                                <br>
                                <div class="educationdescription ">
                                    <h3><b>Education Description</b> </h3>
                                    <hr class="w-100">
                                    <p><?php echo $fet['desedu']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="skillexperience mt-5 ">
                            <h3><b>Skill</b></h3>
                            <hr class="w-100">
                            <div class="skill">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <h5><b><?php echo $fet['skill1']?></b></h5>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">

                                        <h5><b><?php echo $fet['level1']?></b></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <h5><b><?php echo $fet['skill2']?></b></h5>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">

                                        <h5><b><?php echo $fet['level2']?></b></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <h5><b><?php echo $fet['skill3']?></b></h5>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">

                                        <h5><b><?php echo $fet['level3']?></b></h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
