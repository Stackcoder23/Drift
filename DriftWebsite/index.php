<?php
    include("connection.php");
    session_start();
    $errors = 0;
    $login = 1;
    $fullname="";
    $address="";
    $phone="";
    $gender="";
    $email="";
    $password="";
    $regno="";
    $chassisno="";
    $vehicletype="";
    $model="";
    $image="";
/*    $image = addslashes($_FILES["myimage"]["tmp_name"]);
    $image = file_get_contents($_FILES["myimage"]["tmp_name"]);
    $image = base64_encode($image); */
    if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $phone = mysqli_real_escape_string($conn, $_POST['phonenumber']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['con_password']);
  $image = $_FILES["myimage"]['name'];
//  $image1 = base64_encode($image);

/*  $image = rand(1000,10000)."-".$_FILES["myimage"]["name"];
  $tname = $_FILES["files"]["tmp_name"];
  $upload = '/img';
  move_uploaded_file($tname, $upload.'/'.$image); */


  $regno = mysqli_real_escape_string($conn, $_POST['regno']);
  $chassisno = mysqli_real_escape_string($conn, $_POST['chassisno']);
  $vehicletype = mysqli_real_escape_string($conn, $_POST['vehicletype']);
  $model = mysqli_real_escape_string($conn, $_POST['model']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if ($password != $cpassword) {
  //  array_push($errors, "The two passwords do not match");
    $errors = 1;
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user['email'] === $email) {
    //  array_push($errors, "email already exists");
      $errors = 1;
    }

  // Finally, register user if there are no errors in the form
  if ($errors == 0) {

    $query = "INSERT INTO customer (fullname, address, photo, phone, gender, email, password, type) 
              VALUES('$fullname','$address','$image','$phone','$gender','$email', '$password', '0')";
//    mysqli_query($conn, $query);
    if($conn->query($query)=== true){
        echo "cuustomer inserted";
        move_uploaded_file($_FILES["myimage"]["tmp_name"], "upload/".$_FILES["myimage"]["name"]);
    }
    else{
        $login = 0;
        echo "error:" .$conn->error;
    }


    $user_check_id = "SELECT userid FROM customer WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_id);
    $id = mysqli_fetch_array($result);
    $id1 = implode(" ", $id);

    $query2 = "INSERT IGNORE INTO vehicle (regno, chassisno, type, model, userid) 
              VALUES('$regno','$chassisno','$vehicletype','$model','$id1')";
//    mysqli_query($conn, $query2);
    if($conn->query($query2)=== true){
        echo "vehicle inserted";
    }
    else{
        $login = 0;
        echo "error:" .$conn->error;
    } 

    if($login == 1){
    $_SESSION['login_user'] = $email;
    header('location: home.php');
//    echo "$image";
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DRIFT A complete tyre service portal</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/d.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/bstyle.css">
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
      body{
        size: 100%;
        overflow-x: hidden;
        width: 100%;
      }
    </style>

</head>
<body>
   <!-- Search Wrapper Area Start -->
<!--    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                
                <!-- LOGO -->
                <a href="index.html"><img src="img/core-img/drift.png" alt=""></a> 

            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
               
               <!-- LOGO -->
                <a href="index.php"><img src="img/core-img/drift.png" alt=""></a> 
            
            </div>
            <br>

           
           
        </header>
        <!-- Header Area End -->


  <div class="num">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="n">
        <h1 class="h"><center>* Registration *<br><span class="bull"><h5>Get yourself register with us.</h5></span> </center></h1>
        </div><br>

        
        <input class="inputss" type="text" name="firstname" required="" placeholder="Full Name">
        <input class="inputss" type="text" name="address" required="" placeholder="Address">
        <label class="inputss">Profile Pic</label>
        <input class="inputss" type="file" file-model = "myFile"  name="myimage" required="">
        <input class="inputss" type="text" name="phonenumber" required="" placeholder="Phone Number">
        <input class="inputss" type="text" name="gender" required="" placeholder="Gender">
        <input class="inputss" type="email" name="email" required="" placeholder="Email">
        <input class="inputss" type="password" name="password" required="" placeholder="Password">
        <input class="inputss" type="password" name="con_password" required="" placeholder="Confirm Password">

        <br> <h2 class="h">* Enter your Vehicle Details *</h2><br>

        <input class="inputss" type="text" name="regno" required="" placeholder="Registration Number">
        <input class="inputss" type="text" name="chassisno" required="" placeholder="Chassi Number">
        <input class="inputss" type="text" name="vehicletype" required="" placeholder="Vehicle Type Ex: car,bike,suv">
        <input class="inputss" type="text" name="model" required="" placeholder="Vehicle Model">
        
        <a><button type="submit" class="buy-b" name="reg_user"> Register</button></a>
		<br><br>
    
   
        </form>
        <p>Already have an account?</p>
        <a href="../Drift"><button class="button">Admin Login</button></a>

        <a href="login.php"><button class="button">Customer Login</button></a>
      </div>

    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>
</html>