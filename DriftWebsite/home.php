<?php
    include('connection.php');
    session_start();

/*    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($conn,"select email from customer where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql,MYSQL_ASSOC);
    $login_session = $row['email']; */

//    echo $_SESSION['login_user'];
    $sql = "select * from product where deleted = '0'";
    $result = mysqli_query($conn, $sql);
    $email = $_SESSION['login_user'];
/*    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);*/
//    echo "$count";
    $sql4 = "SELECT * FROM customer where email = '$email'";
    $result4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($result4);

    $user = $row4['userid'];

/*    $image = $row['pimage'];
    $image_src = "products/".$image;*/
    $sql5 = "select * from cart where userid='$user' AND deleted ='0'";
    $result5 = mysqli_query($conn, $sql5);
    $count = mysqli_num_rows($result5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        body{
            overflow-x: hidden;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DRIFT A complete tyre service portal</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/d.png">


    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
 <!--   <div class="search-wrapper section-padding-80">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div></div>
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="search-content">
                        <form action="#" method="get">
                    <input type="search" name="search" id="search" placeholder="Type your keyword..."> 
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Search Wrapper Area End -->

     <!-- Header -->
            <div class="new">
             </div>
        <!--    <img class="nn" src="img/Untitled-1.png" >-->
            <!--<div class="new">
             </div> 
             <div class="">
                <h1 class="li">SEARCH THE RIGHT TYRE..</h1>
                    Search by Brand: <select>
                            <option style="display: none;" disabled selected value hidden>-- select an ooption --</option>
                            <option>MRF</option>
                            <option>CEAT</option>
                        </select>
                        Search by Vehicle: <select>
                            <option style="display: none;" disabled selected value hidden>-- select an ooption --</option>
                            <option>Bike</option>
                            <option>Car</option>
                            <option>Truck</option>
                        </select>
             </div>
             <div class="new">
             </div>-->
        
         
    <!-- End header -->

    <!-- ##### Main Content Wrapper Start ##### -->
    

    <div class="main-content-wrapper clean d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                
                <!-- LOGO -->
                <a href=""><img src="img/core-img/drift.png" alt=""></a>

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
                <a href=""><img src="img/core-img/drift.png" alt=""></a> 
            
            </div>

            <!-- Drift Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="home.php">Home</a></li>
                <!--    <li><a href="shop.php">Shop</a></li> -->
                    <li><a href="modification.php">Modification</a></li>
                    <li><a href="membership_1.php">Membership</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="account.php">My account</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <!-- Button Group -->
            
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(<?php echo $count; ?>)</span></a>
            <!--    <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>-->
                 <a class="search-nav" href="logout.php"><img class="loginpng" src="img/core-img/user.png"> 
                    LOGOUT</a>
    
            </div>
           
           
        </header>
        <!-- Header Area End -->


 
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
           <!-- <div class="">
                <p class="">SEARCH THE RIGHT TYRE..</p>
                    <p>Search by Brand:</p> 
                    <select>
                            <option style="display: none;" disabled selected value hidden>-- select an ooption --</option>
                            <option>MRF</option>
                            <option>CEAT</option>
                        </select>
                        Search by Vehicle: <select>
                            <option style="display: none;" disabled selected value hidden>-- select an ooption --</option>
                            <option>Bike</option>
                            <option>Car</option>
                            <option>Truck</option>
                        </select>
             </div>-->
            <!--<input type="search" 
            style="border: 3px solid #fbb710; border-right: none; width: 75%; margin-left: 5%; border-radius: 5px 0 0 5px; outline: none; margin-right: 0" 
            name="search" id="search" placeholder="Search by brand or vehicle type...">
             <button class="" style="border: 1px solid #fbb710; height: 32px; width: 40px; border-radius: 0 5px 5px 0; margin-left: 0" 
             type="submit"><img src="img/core-img/search.png" alt=""></button>-->
            <div class="amado-pro-catagory clearfix">

                 <!-- Single Catagory -->
                 <?php  while ($row = $result->fetch_assoc()) {
                    $result2 = $row['proid'];

                    $image = $row['pimage'];
                    $image_src = "products/".$image;
                     # code...?>
                <div class="single-products-catagory clearfix">
<?php         echo      '<a href="product-details.php?pid='.$result2.'"> '                  ?>
                        <img width="50" src="<?php echo $image_src; ?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>₹<?php echo $row['price']; ?></p>
                            <h4><?php echo $row['proname']; ?></h4>
                        </div>
                    </a>
                </div>
                <?php } ?> 

                <!-- Single Catagory -->
                
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

   

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">


                            <!-- Image near copyright -->
                            <a href="index.html"><img src="img/core-img/drift.png" alt=""></a> 
                        
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"> 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</i> by DRIFT a complete tyre service portal. For more details CONTACT US.</p>
                    </div>
                </div>

                <!-- Single Widget Area -->
                
            </div>
        </div>
    </footer>
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