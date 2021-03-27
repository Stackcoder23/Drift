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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/app.js"></script>

</head>
<body ng-app="myApp" ng-controller="homeCtrl">
     
           
          
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
                        <!-- <img src="assets/admin/img/drift.png" /> -->

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="#" style="color:#fff;" ng-click="logout()">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="<?php echo base_url();?>admin/Home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
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

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>HOME</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url();?>admin/Add" >
                          <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Add Product</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
      
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url();?>admin/User" >
                      <i class="fa fa-users fa-5x"></i>
                      <h4>Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url();?>admin/Order" >
                             <i class="fa fa-gear fa-5x"></i>
                      
                      <h4>Orders </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url();?>admin/Edit" >
                      <i class="fa fa-key fa-5x"></i>
                      <h4>View / Edit Product</h4>
                      </a>
                      </div>
                     
                     
                  </div>

                             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url();?>admin/Settings_admin" >
                       <i class="fa fa-user fa-5x"></i>
                      <h4>Admin Settings</h4>
                      </a>
                      </div>
                  </div>
              </div>
                <br>
                <br>
                  
          
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
        <div class="row">
                <div class="col-lg-12" >
                                    <p class="copywrite"> 
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</i> by DRIFT a complete tyre service portal. For more details CONTACT US.</p>
                          
                </div>
           
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/homeCtrl.js"></script>
    
   
</body>
</html>
