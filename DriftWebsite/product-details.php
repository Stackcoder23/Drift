<?php
    include('connection.php');
    session_start();
    $pid = $_GET['pid'];
//    echo $pid;
    $sql = "select * from product where proid = '$pid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $email = $_SESSION['login_user'];

    $sql2 = "SELECT * FROM customer where email = '$email'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $image = $row['pimage'];
    $image_src = "products/".$image;
    $userid = $row2['userid'];
    $amt = $row['price'];

    $sql3 = "SELECT * FROM cart where userid = '$userid' && proid = '$pid' && deleted = '0'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_assoc($result3);


    if (isset($_POST['addtocart'])) {
        $ins = "INSERT INTO cart (userid, proid, total_amount) 
              VALUES('$userid','$pid','$amt')";
              if($conn->query($ins)=== true){
                echo "added";
                header("Refresh:0");
            }
            else{
                echo "error";
            }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
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
       
        <div class="new">
         </div>
         
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
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
                
            <!--    <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>-->
                 <a class="search-nav" href="logout.php"><img class="loginpng" src="img/core-img/user.png"> 
                    LOGOUT</a>
    
            </div>
           
           
        </header>
        <!-- Header Area End -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['proname']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="img/product-img/pro-big-1.jpg">
                                            <img class="d-block w-100" src="<?php echo $image_src; ?>" alt="First slide">
                                        </a>
                                    </div>
                                <!--    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/pro-big-2.jpg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-2.jpg" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/pro-big-3.jpg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-3.jpg" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/pro-big-4.jpg">
                                            <img class="d-block w-100" src="img/product-img/pro-big-4.jpg" alt="Fourth slide">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?php echo $row['price']; ?></p>
                                <a href="product-details.html">
                                    <h6><?php echo $row['proname']; ?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                   
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div style="text-transform: uppercase;" class="short_overview my-5">
                               <?php echo $row['type']; ?>
                            </div>

                            <!-- Add to Cart Form -->
                            <!--<form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>-->
        <?php
               if($row3['userid'] == $userid && $row3['proid'] == $pid)  {           ?>
                            <button id="added" type="submit" name="addedtocart" value="5" class="btn amado-btn">Added to cart</button>
                        <?php } 
                              else { ?>
                            <form method="post">
                                <button id="add" type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
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
                            <a href="index.html"><img src="img/core-img/drift.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
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