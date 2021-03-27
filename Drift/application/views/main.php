<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/app.js"></script>


</head>
<body ng-app="myApp" ng-controller="loginCtrl">  
    <div class="container-fluid" >             
        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <!-- <img src="assets/img/drift.png" /> -->
                        </a>
                    </div>
                
                  <!--   <span class="logout-spn" >
                        <a href="#" style="color:#fff;" ng-click="logout()">LOGOUT</a>  
                    </span> -->
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <!-- <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="active-link">
                            <a href="<?php echo base_url();?>admin/home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/Add"><i class="fa fa-table "></i>Add Product <span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/User"><i class="fa fa-edit "></i>Users  <span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/Order"><i class="fa fa-edit "></i>Orders  <span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/Edit"><i class="fa fa-edit "></i>View / Edit Products  <span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/Settings_admin"><i class="fa fa-edit "></i>Admin Settings  <span class="badge">Included</span></a>
                        </li>                    
                    </ul>
                </div>
            </nav> -->
            <!-- /. NAV SIDE  -->
            <div>
                <div>
                    <div class="num">
                        <form name="loginForm" method="post">
                            <div class="n">
                                <h1 class="h"><center>* Admin Login *<br><span class="bull"> </center></h1>
                            </div>
                            <br>
                            <input class="inputss" type="email" name="email"  placeholder="Email" ng-model="admin.username">
                            <input class="inputss" type="password" name="password"  placeholder="Password" ng-model="admin.password">
                            <!-- <button type="submit" class="btn btn-primary" >login</button> -->





                            <!-- <a ><input class="buy-b" type="submit" name="login" value="LOGIN" ng-click="login()"></a> -->
                            <button class="buy-b btn" name="login" ng-click="login()">Login</button>
                           <!--  <button class="buy-b btn" name="login" ng-click="register()">Register</button> -->
                            <!-- <a><input class="buy-b" type="submit" name="login" value="CREATE ACCOUNT"></a> -->
                        </form>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>


            <!-- /. PAGE WRAPPER  -->
        </div>
        <div class="footer">
        
            <div class="row">
                <div class="col-lg-12" >
                    <p class="copywrite">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</i> by DRIFT a complete tyre service portal. For more details CONTACT US.</p>
                </div>
            </div>
        </div>
           
    </div>      

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/loginCtrl.js"></script>
   
</body>
</html>
