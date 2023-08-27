<?php
  include "./include/connection.php";

  if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
     $pic=$_FILES['pic']['name'];
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $zipcode=mysqli_real_escape_string($conn,$_POST['zipcode']);
    $citytown=mysqli_real_escape_string($conn,$_POST['citytown']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    $month=mysqli_real_escape_string($conn,$_POST['month']);
    $year=mysqli_real_escape_string($conn,$_POST['year']);
    $placeofbirth=mysqli_real_escape_string($conn,$_POST['placeofbirth']);
      $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $drivinglicence=mysqli_real_escape_string($conn,$_POST['drivinglicence']);
    $nationality=mysqli_real_escape_string($conn,$_POST['nationality']);
    $martialstatus=mysqli_real_escape_string($conn,$_POST['martialstatus']);
    $employer=mysqli_real_escape_string($conn,$_POST['employer']);
    $jobtitle=mysqli_real_escape_string($conn,$_POST['jobtitle']);
    $citytownjob=mysqli_real_escape_string($conn,$_POST['citytownjob']);
    $startmonth=mysqli_real_escape_string($conn,$_POST['startmonth']);
    $startyear=mysqli_real_escape_string($conn,$_POST['startyear']);
    $endmonth=mysqli_real_escape_string($conn,$_POST['endmonth']);
    $endyear=mysqli_real_escape_string($conn,$_POST['endyear']);
    $des=mysqli_real_escape_string($conn,$_POST['des']);
    $school=mysqli_real_escape_string($conn,$_POST['school']);
    $degree=mysqli_real_escape_string($conn,$_POST['degree']);
    $citytownedu=mysqli_real_escape_string($conn,$_POST['citytownedu']);
    $startmonthedu=mysqli_real_escape_string($conn,$_POST['startmonthedu']);
    $startyearedu=mysqli_real_escape_string($conn,$_POST['startyearedu']);
    $endmonthedu=mysqli_real_escape_string($conn,$_POST['endmonthedu']);
    $endyearedu=mysqli_real_escape_string($conn,$_POST['endyearedu']);
    $desedu=mysqli_real_escape_string($conn,$_POST['desedu']);
     $skill1=mysqli_real_escape_string($conn,$_POST['skill1']);
     $skill2=mysqli_real_escape_string($conn,$_POST['skill2']);
     $skill3=mysqli_real_escape_string($conn,$_POST['skill3']);
     $level1=mysqli_real_escape_string($conn,$_POST['level1']);
     $level2=mysqli_real_escape_string($conn,$_POST['level2']);
      $level3=mysqli_real_escape_string($conn,$_POST['level3']);
      $desskill=mysqli_real_escape_string($conn,$_POST['desskill']);

      $exe=strtolower(pathinfo($pic,PATHINFO_EXTENSION));
      $arr=array("jpg","jpeg","png");
              
      if(in_array($exe,$arr)){
              
              $p3=rand(1,1000000).".".$exe;
              $pic=$p3;

              $sql="INSERT INTO `cvmaker`(`firstname`, `lastname`, `email`, `phonenumber`, `address`, `zipcode`, `citytown`, `date`, `month`, `year`, `placeofbirth`, `gender`, `drivinglicence`, `nationality`, `martialstatus`, `employer`, `jobtitle`, `citytownjob`, `startmonth`, `startyear`, `endmonth`, `endyear`, `des`, `school`, `degree`, `citytownedu`, `startmonthedu`, `startyearedu`, `endmonthedu`, `endyearedu`, `desedu`, `skill1`, `skill2`, `skill3`, `desskill`, `level1`, `level2`, `level3`)
              VALUES ('$firstname', '$pic', '$email', '$phonenumber', '$address', '$zipcode', '$citytown', '$date', '$month', '$year', '$placeofbirth', '$gender', '$drivinglicence', '$nationality', '$martialstatus', '$employer', '$jobtitle', '$citytownjob', '$startmonth', '$startyear', '$endmonth', '$endyear', '$des', '$school', '$degree', '$citytownedu', '$startmonthedu', '$startyearedu', '$endmonthedu', '$endyearedu', '$desedu', '$skill1', '$skill2', '$skill3', '$desskill', '$level1', '$level2', '$level3')";
               move_uploaded_file($_FILES['pic']['tmp_name'],'./img/'.$pic);
               $run=mysqli_query($conn,$sql);
               if($run){
                 echo "<script>alert('Your data has been received')</script>";   
               }else{
                 echo "<script>alert('Your data has not  been received')</script>"; 
               }
      }else{
        
          echo "<script>alert ('Your image is not correct formate and your data is not inserted')</script>";
           
      };

 
  }

 
 

  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/7c2464aa6d.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Ubuntu:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>

    </style>
</head>

<body>

    


    <body>
        <div class="main ">
            <div class="header">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="firstheading">
                                    <span class="h1">Create</span><span class="h1">Cv/Portfolio</span>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="secondheading" align='center'>
                                    <span class="h1 ">Personal</span> <span class="h1">Details</span>

                                </div>
                                <div class="icon" align='center'>
                                    <a href="./Register-cv.php"><i
                                            class="fa-solid fa-user text-white fa-3x mx-5 mt-2"></i></a>
                                    <a href="./Register-cv.php"><i
                                            class="fa-solid fa-book text-white fa-3x mx-5 mt-2 "></i></a>
                                    <a href="./Register-cv.php"><i
                                            class="fa-solid fa-pen text-white fa-3x mx-5 mt-2"></i></a>
                                </div>
                             
                                <div class="mainbox card cardmain mt-5 mb-3  w-75">
                                    <div class="box  ">
                                        <div class="personaldetail  p-3 mt-3">
                                            <span class="h3">Personal</span><span class="h3">Details</span>
                                            <hr class="w-100">
                                        </div>
                                        <div class="addcvform p-3 ">
                                            <form action="" method="post" enctype= multipart/form-data>
                                                <div class="form-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">First Name*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" type="text" name="firstname"
                                                            class="form-control w-100" style="height:50px;"
                                                            placeholder="Muhammad.Ali">
                                                    </div>

                                                </div>
                                                <div class="form-group" data-aos="fade-left"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">Image*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input  style="height:50px;" multiple type="file" name="pic"
                                                            class="form-control w-100">
                                                    </div>

                                                </div>

                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Email*</label>
                                                        <input style="height:50px;" type="Email" name="email"
                                                            class="form-control" placeholder="Muhammad@gmail.com">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Phone Number*</label>
                                                        <input style="height:50px;" type="number" name="phonenumber"
                                                            class="form-control mx-1 " placeholder="03032123906">
                                                    </div>
                                                </div>
                                                <div class="form-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">Address*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" type="text" name="address"
                                                            class="form-control w-100" placeholder="Muhammad.Ali">
                                                    </div>

                                                </div>
                                                <div class="input-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50">
                                                        <label for="">ZipCode*</label>
                                                        <input style="height:50px;" type="text" name="zipcode"
                                                            class="form-control" placeholder="234">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">city Town*</label>
                                                        <input style="height:50px;" type="text" name="citytown"
                                                            class="form-control mx-1 " placeholder="Lahore">
                                                    </div>
                                                </div>

                                                <div class="input-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  ">
                                                        <div class="row">
                                                            <label for="">Date of Birth*</label>
                                                            <div class="col-4">

                                                                <select style="height:50px;" name="date" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                     $sql="SELECT * FROM `date-of-birth`";
                                                                     $run=mysqli_query($conn,$sql);
                                                                     
                                                                    while($fet=mysqli_fetch_assoc($run)){

                                                                    
                                                                    ?>

                                                                    <option value="<?php echo $fet['dateid']?>">
                                                                        <?php echo $fet['dateofbirth']?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4">

                                                                <select style="height:50px;" name="month" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                     $sql="SELECT * FROM `month-of-birth`";
                                                                     $run=mysqli_query($conn,$sql);
                                                                     
                                                                    while($fet=mysqli_fetch_assoc($run)){

                                                                    
                                                                    ?>
                                                                    <option value="<?php echo $fet['mbid']?>">
                                                                        <?php echo $fet['monthofbirth']?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <select style="height:50px;" name="year" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                     $sql="SELECT * FROM `year-of-birth`";
                                                                     $run=mysqli_query($conn,$sql);
                                                                     
                                                                    while($fet=mysqli_fetch_assoc($run)){
                                                                    ?>


                                                                    <option value="<?php echo $fet['ybid']?>">
                                                                        <?php echo $fet['yearofbirth']?></option>
                                                                    <?php
                                                                    }
                                                                   ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  ">
                                                        <label for="">Place of birth*</label>
                                                        <input style="height:50px;" type="text" name="placeofbirth"
                                                            class="form-control mx-1 " placeholder="placeofbirth">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Gender*</label>
                                                        <select style="height:50px;" name="gender" id=""
                                                            class="form-select">
                                                            <option selected>Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="male">Femail</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Driving Licence*</label>
                                                        <input style="height:50px;" type="text" name="drivinglicence"
                                                            class="form-control mx-1 " placeholder="334dd">
                                                    </div>

                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Nationality*</label>
                                                        <input style="height:50px;" type="text" name="nationality"
                                                            class="form-control" placeholder="Pakistani">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Martial Status*</label>
                                                        <input style="height:50px;" type="text" name="martialstatus"
                                                            class="form-control mx-1 " placeholder="single">
                                                    </div>
                                                </div>
                                                <div class="personaldetail  p-3 mt-3">
                                                    <span class="h3">Work Experience</span><span
                                                        class="h3">Experience</span>
                                                    <hr class="w-100">
                                                </div>

                                                <div class="form-group w-100" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">Employer*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" type="text" name="employer"
                                                            class="form-control w-100" placeholder="e.g pwc">
                                                    </div>

                                                </div>
                                                <div class="input-group" data-aos="fade-left"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50">
                                                        <label for="">Job title*</label>
                                                        <input style="height:50px;" type="text" name="jobtitle"
                                                            class="form-control" placeholder="Manager">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50" data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">city Town*</label>
                                                        <input style="height:50px;" type="text" name="citytownjob"
                                                            class="form-control mx-1 " placeholder="Job city">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <div class="row">
                                                            <label for="">Start Date*</label>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="startmonth" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                  $sql="SELECT * FROM `wemonth`";
                                                                  $run=mysqli_query($conn,$sql);
                                                                        while($fet=mysqli_fetch_assoc($run)){

                                                                        
                                                                    ?>

                                                                    <option value="<?php echo $fet['weid']?>">
                                                                        <?php echo $fet['wemonth2']?></option>

                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="startyear" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `weyear`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                       
                                                                    ?>
                                                                    <option value="<?php echo $fet['weyid']?>">
                                                                        <?php echo $fet['weyear2']?></option>

                                                                    <?php
                                                                      }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <div class="row">
                                                        <label for="">End Date*</label>
                                                            <div class="col-4 w-50">
                                                           
                                                                <select style="height:50px;" name="endmonth" id=""
                                                                    class="form-select mx-1">
                                                                   
                                                                    <?php
                                                                         $sql="SELECT * FROM `weendmonth`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                       
                                                                    ?>
                                                                    <option value="<?php echo $fet['weendid']?>">
                                                                        <?php echo $fet['weendmonth2']?></option>

                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="endyear" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `weendyear`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                       
                                                                    ?>
                                                                    <option value="<?php echo $fet['weyearid']?>">
                                                                        <?php echo $fet['weendyear2']?></option>

                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-12 col-md-12 col-sm-12  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Description Resume Objective*</label>
                                                        <textarea name="des" id="des" cols="30" rows="5"
                                                            class="form-control  "
                                                            placeholder="Description resume"></textarea>
                                                    </div>
                                                </div>
                                                <div class="personaldetail  p-3 mt-3">
                                                    <span class="h3">Education and</span><span class="h3">
                                                        Qualification</span>
                                                    <hr class="w-100">
                                                </div>

                                                <div class="form-group w-100" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">School*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" type="text" name="school"
                                                            class="form-control w-100" placeholder="matric">
                                                    </div>

                                                </div>
                                                <div class="input-group" data-aos="fade-left"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50">
                                                        <label for="">Degree*</label>
                                                        <input style="height:50px;" type="text" name="degree"
                                                            class="form-control" placeholder="M.phil">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">city Town*</label>
                                                        <input style="height:50px;" type="text" name="citytownedu"
                                                            class="form-control mx-1 " placeholder="citytown">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  " data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <div class="row">
                                                            <label for="">Start Date*</label>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="startmonthedu" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `edmonth`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                    ?>
                                                                    <option value="<?php echo $fet['edid']?>">
                                                                        <?php echo $fet['edmonth2']?></option>

                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="startyearedu" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `edu-year`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                    ?>
                                                                    <option value="<?php echo $fet['ed-id']?>">
                                                                        <?php echo $fet['edyear']?></option>
                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <div class="row">
                                                            <label for="">End Date*</label>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="endmonthedu" id=""
                                                                    class="form-select mx-1">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `edendmonth`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                    ?>
                                                                    <option value="<?php echo $fet['ed-end-id']?>">
                                                                        <?php echo $fet['edendmonth2']?></option>
                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4 w-50">

                                                                <select style="height:50px;" name="endyearedu" id=""
                                                                    class="form-select">
                                                                    
                                                                    <?php
                                                                         $sql="SELECT * FROM `edendyear`";
                                                                         $run=mysqli_query($conn,$sql);
                                                                         while($fet=mysqli_fetch_assoc($run)){

                                                                    ?>
                                                                    <option value="<?php echo $fet['edendid']?>">
                                                                        <?php echo $fet['edendyear2']?></option>
                                                                    <?php
                                                                         }
                                                                            ?>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-12 col-md-12 col-sm-12  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Description Education*</label>
                                                        <textarea name="desedu" id="desedu" cols="30" rows="5"
                                                            class="form-control  "></textarea>
                                                    </div>
                                                </div>
                                                <div class="personaldetail  p-3 mt-3">
                                                    <span class="h3">Skills</span><span class="h3"> </span>
                                                    <hr class="w-100">

                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Skill*</label>
                                                        <input style="height:50px;" name="skill1" type="text"
                                                            name="skill" class="form-control"
                                                            placeholder="e.g Microsoft word">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Level*</label>
                                                        <select style="height:50px;" name="level1" id=""
                                                            class="form-select mx-1">
                                                            
                                                            <option value="beginner">beginner</option>
                                                            <option value="Expert">Expert</option>
                                                            <option value="Master">Master</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-1">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">

                                                        <input style="height:50px;" type="text" name="skill2"
                                                            class="form-control" placeholder="e.g Microsoft powerpoint">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">

                                                        <select style="height:50px;" name="level2" id=""
                                                            class="form-select mx-1">
                                                            
                                                            <option value="beginner">beginner</option>
                                                            <option value="Expert">Expert</option>
                                                            <option value="Master">Master</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-1">
                                                    <div class="col-lg-6 col-md-6 col-sm-12  w-50" data-aos="fade-right"
                                                        data-aos-easing="ease-in-sine">

                                                        <input style="height:50px;" type="text" class="form-control"
                                                            placeholder="e.g Microsoft Excel" name="skill3">
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 w-50 " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">

                                                        <select style="height:50px;" name="level3" id=""
                                                            class="form-select mx-1">
                                                                         
                                                            <option value="beginner">beginner</option>
                                                            <option value="Expert">Expert</option>
                                                            <option value="Master">Master</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col-lg-12 col-md-12 col-sm-12  " data-aos="fade-left"
                                                        data-aos-easing="ease-in-sine">
                                                        <label for="">Description Skill*</label>
                                                        <textarea name="desskill" id="desskill" cols="30" rows="5"
                                                            class="form-control  "></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12   "
                                                            data-aos="fade-right" data-aos-easing="ease-in-sine">
                                                            <div class="input mt-3 ">
                                                                <input type="submit" name="submit"
                                                                    class="btn btn-lg form-control w-100  btn-block btn-dark ">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <footer class="   ">
            <div class="container ">
                <div class="row  w-100 ">
                    <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-4 offset-md-4  ">
                        <div class=" mx-5 mt-5 justify-content-center  ">
                            <p>Thanks for "submiting" your data</p>

                        </div>
                        <div class=" mx-5 ">
                            <a href="./Register-cv.php" target="_blank" rel="noopener noreferrer" class="text-white h4 ">  General Terms</a>
                            <a href="./auth-login.php" target="_blank" class="text-white h4 " rel="noopener noreferrer">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
            </div>

        </div>

       
        <?php
  include "./include/footer.php";
  ?>
        <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)



            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1500, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
        </script>
    </body>




</html>