<!DOCTYPE html>
<html lang="en">
<?php 

session_start();
include "./include/connection.php";

if(isset($_POST['submit'])){
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);

  $sql="SELECT * FROM `cvmaker` WHERE `email`='$email' and `phonenumber`='$phonenumber'";
  $run=mysqli_query($conn,$sql);
    $fet=mysqli_fetch_assoc($run);

if(@$fet['email']!=$email and @$fet['phonenumber']!=$phonenumber){
  echo "<script>alert('Your data has been wrong ')</script>";
}else{
  $_SESSION['email']=$email;
  $_SESSION['phonenumber']=$phonenumber;
  header("location:viewcv.php");
  
}


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

    <link rel="stylesheet" href="./loginstyle.css">
    <title>Login</title>
    <style>

    </style>
</head>

<body>

    <?php 
include "./include/header.php";
?>


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
                                <!-- box start  -->
                                <div class="mainbox card cardmain mt-5 mb-5  w-25">
                                    <div class="box  ">
                                        <div class="personaldetail  p-3 ">
                                            <span class="h3">Login</span><span class="h3">Here</span>
                                            <hr class="w-100">
                                        </div>
                                        <div class="addcvform p-3 ">
                                            <form action="" method="post">
                                                <div class="form-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">Email*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" name='email' type="email" 
                                                            class="form-control w-100" style="height:50px;"
                                                            placeholder="Muhammad.Ali">
                                                    </div>

                                                </div>
                                                <div class="form-group" data-aos="fade-right"
                                                    data-aos-easing="ease-in-sine">
                                                    <div class="label">
                                                        <label for="">Phone Number*</label>
                                                    </div>
                                                    <div class="input">
                                                        <input style="height:50px;" type="number" name="phonenumber"
                                                            class="form-control w-100" placeholder="12343">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12   "data-aos="fade-right" 
                                                         data-aos-easing="ease-in-sine">
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
       
                </div>
                
            </div>

        </div>

        
     
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