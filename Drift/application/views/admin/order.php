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
<body ng-app="myApp" ng-controller="OrderCtrl">
     
           
          
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
                 


                    <li >
                        <a href="<?php echo base_url();?>admin/Home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url();?>admin/Add"><i class="fa fa-table "></i>Add Product <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/User"><i class="fa fa-edit "></i>Users  <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
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

<div class="container"  ng-init="loadOrderHistory()" style="padding:20px;">
      <h3><strong><center> ORDERS</center></strong></h3>
      <br>
      <div class="modal fade" id="ordermodal" role="dialog">
       <div class="modal-dialog">
        
          <div class="modal-content" >

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">order detials</h4>
            </div>
              
            <div class="modal-body">
              <form name="order_historyForm" method="POST" enctype="multipart/form-data">
                Order Details Of: <strong> {{fullname}} </strong>

                <table class="table table-bordered">
                  <thead >
                    <th>sr.no</th>
                    <th>Product name</th>
                    <th>Product Type</th>
                    <th>Grip</th>
                    <th>Product Price</th>
                    
                   
                  </thead>
                  <tbody  ng-repeat="i in datalist"> 
                    <td>{{$index+1}}</td>
                    <td>{{i.proname}}</td>
                    <td >{{i.type}}</td> 
                     <td >{{i.grip}}</td> 
                    <td>{{i.price|currency}}</td>
<!--                     <td><button class="btn btn-info pull-right" ng-click="more(i.oid)">More</button></td>
 -->
                  </tbody> 
                </table> 
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>  

          </div>
        </div>  
      </div>
  
   
    <table class="table table-striped">
    <thead>
      <tr>
                   <th>sr.no</th>
                    <th>User Name</th>
                    <th>Total Product</th>
                    <th>Total Amount</th>
                    <th></th>
                    
      </tr>
    </thead>
     <tbody ng-repeat="i in list">
      <tr>
         <td>{{$index+1}}</td>
                    <td>{{i.fullname}}</td>
                    <td >{{i.total}}</td> 
                    <td>{{i.total_amount|currency}}</td>
                    <td><button class="btn btn-info pull-right" ng-click="more(i.userid)">More</button></td>
      </tr>
    </tbody> 
  </table> 
 
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
    
 <script type="text/javascript" src="<?=base_url()?>assets/admin/js/order_history.js"></script>
</body>
</html>
