<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DRIFT A complete tyre service portal</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url();?>assets/website/img/core-img/d.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/website/css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/website/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/app.js"></script>



</head>
<body ng-app="myApp" ng-controller="loginCtrl">

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                
                <!-- LOGO -->
                <a href="index.html"><img src="<?php echo base_url();?>assets/website/img/core-img/drift.png" alt=""></a> 

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
                <a href="index.html"><img src="<?php echo base_url();?>assets/website/img/core-img/drift.png" alt=""></a> 
            
            </div>
            <!-- Drift Nav -->
             <!-- <nav class="amado-nav">
                 <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="modification.html">Modification</a></li>
                    <li><a href="membership_1.html">Membership</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </nav>  -->
            <br>
            <!-- Button Group -->
            
            <!-- Cart Menu -->
            <!-- <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="<?php echo base_url();?>assets/website/img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
               
                <a href="#" class="search-nav"><img src="<?php echo base_url();?>assets/website/img/core-img/search.png" alt=""> Search</a>
            </div>
            -->
           
        </header>
        <!-- Header Area End -->


  <div class="num">
    <div class="row">
        <form name="userdetails">
            <div class="n">
                <h1 class="h"><center>* Registration *<br><span class="bull"><h5>Get yourself register with us.</h5></span> </center></h1>
            </div><br>

            
            <input class="inputss" type="text" name="firstname" required="" placeholder="Full Name" ng-model="user.firstname">
            <input class="inputss" type="text" name="address" required="" placeholder="Address"ng-model="user.address">
            <label class="inputss">Profile Pic</label>
            <input class="inputss" type="file" file-model = "myFile" >
            <input class="inputss" type="text" name="phonenumber" required="" placeholder="Phone Number" ng-model="user.number" ng-pattern="/^[0-9]*$/" ng-maxlength="10">
            <div ng-show="userdetails.phonenumber.$error.pattern" style="color:red">Please Enter Only Numbers</div>
            <div ng-show="userdetails.phonenumber.$error.maxlength" style="color:red">Maximum 10 digit number</div>
            <input class="inputss" type="text" name="gender" required="" placeholder="Gender" ng-model="user.gender">
            <input class="inputss" type="email" name="email" required="" placeholder="Email" ng-model="user.email">
            <input class="inputss" type="password" name="password" required="" placeholder="Password" ng-model="user.password">
            <input class="inputss" type="password" name="con_password" required="" placeholder="Confirm Password" ng-model="user.con_password">

            <br> <h2 class="h">* Enter your Vehicle Details *</h2><br>

            <input class="inputss" type="text" name="regno" required="" placeholder="Registration Number" ng-model="user.regno" ng-pattern="/^[0-9]*$/">
            <div ng-show="userdetails.regno.$error.pattern" style="color:red">Please Enter Only Numbers</div>

            <input class="inputss" type="text" name="chassisno" required="" placeholder="Chassi Number" ng-model="user.chassino" ng-pattern="/^[0-9]*$/">
            <div ng-show="userdetails.chassisno.$error.pattern" style="color:red">Please Enter Only Numbers</div>

            <input class="inputss" type="text" name="vehicletype" required="" placeholder="Vehicle Type Ex: car,bike,suv" ng-model="user.vehicle_type">
            <input class="inputss" type="text" name="model" required="" placeholder="Vehicle Model" ng-model="user.model">
            
        
        <a> <button  class="buy-b" ng-click="register();"> REGISTER</button></a>
        <br><br>
       
        </form>
    </div>
    <div class="row">
    <p>Already have an account?</p>
            <a href="<?php echo base_url();?>Main"><button class="buy-b"> LOGIN</button></a>
    </div>
      </div>
      </div>

    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php echo base_url();?>assets/website/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/website/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/website/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url();?>assets/website/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/website/js/active.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/loginCtrl.js"></script>

</body>
</html>