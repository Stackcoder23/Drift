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
                
                    <span class="logout-spn" >
                        <a href="#" style="color:#fff;">LOGOUT</a>  
                    </span>
                </div>
            </div>
            
            <div>
                
                    
                        <form name="loginForm" method="post">
                            <div class="num">
                            <div class="n">
                                <h1 class="h"><center>* ADMIN LOGIN *<br><span class="bull"> </center></h1>
                            </div>
                            <br>
                            <input class="inputss" type="email" name="email"  placeholder="Email" ng-model="admin.username">
                            <input class="inputss" type="password" name="password"  placeholder="Password" ng-model="admin.password">
                            <a ><input class="buy-b" type="submit" name="login" value="LOGIN" ng-click="login()"></a>
                            </div>
                        </form>
                    
                
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
