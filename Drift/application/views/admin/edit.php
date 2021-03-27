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

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/app.js"></script>


</head>
<body ng-app="myApp" ng-controller="listingCtrl">
     
           
          
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
                 


                    <li class="active-link">
                        <a href="<?=base_url()?>admin/Home" ><i class="fa fa-desktop "></i>Home<span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="<?=base_url()?>admin/Add"><i class="fa fa-table "></i>Add Product <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/User"><i class="fa fa-edit "></i>Users  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Order"><i class="fa fa-edit "></i>Orders  <span class="badge">Included</span></a>
                    </li>
                    <li class="active-link">
                        <a href="<?=base_url()?>admin/Edit"><i class="fa fa-edit "></i>View / Edit Products  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Settings_admin"><i class="fa fa-edit "></i>Admin Settings  <span class="badge">Included</span></a>
                    </li>
                   
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

           <div class="container-fluid"  ng-init="loadList()">
    <center><strong><h1>View Edit Products</h1></strong></center> <br>
    <br>   
    <div id="body">
        <!-- <strong><h3><lable for="item name">Item name:</lable></h3></strong>
        <strong><input type="text" ng-model="search"></strong>
        <br><br> -->
        <h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>sr.no</th>
                    <th>Brand Name</th>
                    <th>Product Name</th>
                    <th>Size Code</th>
                    <th>Price</th>
                    <th>Grip</th>
                    <th>Type</th>


                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="i in list ">
                    <td>{{$index+1}}</td>
                   <!--  <td>{{i.brand}}</td> -->
                    <td>{{i.proname}}</td>
                    <td>{{i.sizecode}}</td>
                    <td>{{i.price}}</td>
                    <td>{{i.grip}}</td>
                    <td>{{i.type}}</td>
                  
                    <td>
                        <button class="btn btn-warning" ng-click="edit($index)">edit</button>
                        <button class="btn btn-danger" ng-click="deletee(i.proid,$index)">delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    <br>
    <br>
    <br>
                   <!--   <td>
                        <button class="btn btn-warning" ng-click="edit($index)">edit</button>
                        <button class="btn btn-danger" ng-click="deletee(i.id,$index)">delete</button>
                    </td> -->
   </div>
     <div class="modal fade" id="editmodal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
            <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">edit</h4>
                </div>
                
                <div class="modal-body">
                 
                    <form name="updateForm" method="post" novalidate  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" ng-model="product.proname" required>
                        <!-- <div ng-show="updateForm.item_name.$touched && updateForm.item_name.$error.required" style="color:red">This field is required</div> -->
                    </div>
                    <!-- <div class="form-group">
                        <label for="name">Brand Name:</label>
                        <input type="text" class="form-control" id="brand_name" name="brand_name" ng-model="product.brand" required>
                      <div ng-show="updateForm.item_name.$touched && updateForm.item_name.$error.required" style="color:red">This field is required</div> 
                    </div> -->

                    <div class="form-group">
                        <label for="sizecode">Size Code:</label>
                        <input type="text" class="form-control" id="item_sizecode" name="item_sizecode" ng-model="product.sizecode" required>

                        <!-- <select id="category" ng-model="item.cat_id" ng-init="loadcategory()" required>
                            <option value="">--select category--</option>
                            <option ng-repeat="items in chooseCategory" value="{{items.id}}">{{items.name}}<option> 
                        </select> -->
                       <div ng-show="updateForm.item_sizecode.$touched && updateForm.item_sizecode.$error.required" style="color:red">This field is required</div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="item_price" name="item_price" ng-model="product.price" ng-min="10" required>
                        <div ng-show="updateForm.item_price.$touched && updateForm.item_price.$error.required" style="color:red">This field is required</div>
                        <div ng-show="updateForm.item_price.$error.min">price should be more than 10</div>
                    </div>

                    <div class="form-group">
                        <label for="grip">Grip :</label>
                        <input type="text" class="form-control" id="item_grip" name="item_grip" ng-model="product.grip"  required>
                        <div ng-show="updateForm.item_grip.$touched && updateForm.item_grip.$error.required" style="color:red">This field is required</div>
                  
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                         <select id="item_type" ng-model="product.type" required>
                            <option value="{{product.type}}" >Tyre</option>
                            <option value="{{product.type}}">Accessory</option>
                        </select>
                      
                    </div>

                    <label for="img">upload image:</label>
                    <input type="file" file-model = "myFile" required>
                    <br><br><br>
                   
                    <button ng-disabled="updateForm.$invalid" class="btn btn-primary" ng-click="updateItem()">update</button>
                </form>      
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
          
        </div>
  </div>
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
    
 <script type="text/javascript" src="<?=base_url()?>assets/admin/js/ItemListCtrl.js"></script>
</body>
</html>
