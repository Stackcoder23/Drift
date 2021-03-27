<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
<body ng-app="myApp" ng-controller="addItemCtrl">           
          
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
                        <a href="<?php echo base_url();?>admin/Home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
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
            <div class="container-fluid"  id="body">
                <h1><center><strong>ADD ITEMS</strong></center></h1>
                <br>
                <form name="addItemForm" method="post" novalidate ng-submit="additems()" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" ng-model="item.name" required>
                        <!-- <div ng-show="addItemForm.item_name.$touched && addItemForm.item_name.$error.required" style="color:red">This field is required</div> -->
                    </div>

                    <div class="form-group">
                        <label for="sizecode">Size Code:</label>
                        <input type="text" class="form-control" id="item_sizecode" name="item_sizecode" ng-model="item.sizecode" required>

                        <!-- <select id="category" ng-model="item.cat_id" ng-init="loadcategory()" required>
                            <option value="">--select category--</option>
                            <option ng-repeat="items in chooseCategory" value="{{items.id}}">{{items.name}}<option> 
                        </select> -->
                       <div ng-show="addItemForm.item_sizecode.$touched && addItemForm.item_sizecode.$error.required" style="color:red">This field is required</div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="item_price" name="item_price" ng-model="item.price" ng-min="10" required>
                        <div ng-show="addItemForm.item_price.$touched && addItemForm.item_price.$error.required" style="color:red">This field is required</div>
                        <div ng-show="addItemForm.item_price.$error.min">price should be more than 10</div>
                        <!-- <div ng-show="addItemForm.item_price.$error.max">price should be less than 50000</div> -->
                    </div>

                    <div class="form-group">
                        <label for="grip">Grip :</label>
                        <input type="text" class="form-control" id="item_grip" name="item_grip" ng-model="item.grip"  required>
                        <div ng-show="addItemForm.item_grip.$touched && addItemForm.item_grip.$error.required" style="color:red">This field is required</div>
                       <!--  <div ng-show="addItemForm.item_quantity.$error.min" style="color:red">quantity should be more than 0</div> -->
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                         <select id="item_type" ng-model="item.type" required>
                            <option value="">--select Type--</option>
                            <option value="Tyre">Tyre</option>
                            <option value="Accessory">Accessory</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="item_type" name="item_type" ng-model="item.type" ng-min="1" required> -->
                        <!-- <div ng-show="addItemForm.item_type.$touched && addItemForm.item_type.$error.required" style="color:red">This field is required</div>
                        <div ng-show="addItemForm.item_type.$error.min" style="color:red">quantity should be more than 0</div> -->
                    </div>

                    <label for="img">upload image:</label>
                    <input type="file" file-model = "myFile" required>
                    <br><br><br>
                    <button ng-disabled="addItemForm.$invalid" type="submit" class="btn btn-primary">Add items</button>
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
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
    
   <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/addItemCtrl.js"></script>

</body>
</html>
