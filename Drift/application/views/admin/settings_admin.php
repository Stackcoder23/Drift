<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?=base_url()?>assets/admin/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/app.js"></script>

</head>
<body ng-app="myApp" ng-controller="loginCtrl">
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
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
                 


                   <li>
                        <a href="<?=base_url();?>admin/Home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="<?=base_url();?>admin/Add"><i class="fa fa-table "></i>Add Product <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/User"><i class="fa fa-edit "></i>Users  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/Order"><i class="fa fa-edit "></i>Orders  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>admin/Edit"><i class="fa fa-edit "></i>View / Edit Products  <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
                        <a href="<?=base_url();?>admin/Settings_admin"><i class="fa fa-edit "></i>Admin Settings  <span class="badge">Included</span></a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

            <div class="container-fluid" id="body">
    <h1><center><strong>ADMIN SETTINGS</strong></center></h1>
    
<br>
    <form name="settingForm">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" ng-model="user.email" required>
            <!-- <div ng-show="settingForm.email.$touched && settingForm.email.$error.required" style="color:red">This field is required</div> -->
        </div>

         <div class="form-group">
            <label for="password">Change Password :</label>
            <input type="password" class="form-control" id="password" name="password" ng-model="user.password" required>
            <!-- <div ng-show="settingForm.item_price.$touched && settingForm.item_price.$error.required" style="color:red">This field is required</div>
            <div ng-show="settingForm.item_price.$error.min">price should be more than 1000</div>
            <div ng-show="settingForm.item_price.$error.max">price should be less than 50000</div> -->
        </div>


         <div class="form-group">
            <label for="con_password">Confirm Password:</label>
            <input type="password" class="form-control" id="con_password" name="con_password" ng-model="user.con_password" required>
            <!-- <div ng-show="settingForm.item_quantity.$touched && settingForm.item_quantity.$error.required" style="color:red">This field is required</div>
            <div ng-show="settingForm.item_quantity.$error.min" style="color:red">quantity should be more than 0</div> -->
        </div>

        <br><br><br>
        <button ng-disabled="settingForm.$invalid" type="submit" class="btn btn-primary" ng-click="updatepassword();">Change</button>
    </form>

</div>
       </div>
                <!-- /. ROW  -->
               
               
                </div>
                <!-- /. ROW  -->
               
    

                                    <div id="collapseThree" class="panel-collapse collapse">                              
                                       <div class="panel-body">
                                           
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                                    <p class="copywrite"> 
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</i> by DRIFT a complete tyre service portal. For more details CONTACT US.</p>
                          
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>assets/admin/js/custom.js"></script>
    
   <script type="text/javascript" src="<?=base_url()?>assets/admin/js/loginCtrl.js"></script>

</body>
</html>
