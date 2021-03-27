<?php
    include('connection.php');
    session_start();
    $email = $_SESSION['login_user'];
    $sql2 = "SELECT * FROM customer where email = '$email'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $user = $row2['userid'];

    $sql = "select * from cart where userid='$user' AND deleted='0'";
    $result = mysqli_query($conn, $sql);
    $total=0;
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            $total = $total + $row['total_amount'];
        }}

    if (isset($_POST['confirm'])) {
        $sql3 = "select * from cart where userid='$user' AND deleted='0'";
        $result3 = mysqli_query($conn, $sql);
        if($result3->num_rows > 0){
        while ($row3 = $result3->fetch_assoc()) {
        $pro = $row3['proid'];
        $amt = $row3['total_amount'];
        $query = "INSERT INTO orders (userid, proid, total_amount) 
              VALUES('$user','$pro','$amt')";
        if($conn->query($query)=== true){
        $sql4 = "UPDATE cart SET deleted='1' WHERE userid='$user' AND deleted='0'";
        $conn->query($sql4);
        header('location: confirm.html');
        }
        else{
        echo "error:" .$conn->error;
        }
        }
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
    <!--<div class="search-wrapper section-padding-100">
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

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>CHECKOUT</h2>
                            </div>

                            <!--<form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="first_name" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="last_name" value="" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <select class="w-100" id="country">
                                        <option value="usa">Maharashtra</option>
                                        <option value="uk">Goa</option>
                                        <option value="ger">Karnatak</option>
                                        <option value="fra">Gujrat</option>
                                        <option value="ind">Kerala</option>
                                        <option value="aus">Delhi</option>
                                        <option value="bra">Tamil nadu</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="street_address" placeholder="Address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="Town" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="number" class="form-control" id="phone_number" min="0" placeholder="Phone No" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment about your order"></textarea>
                                    </div>-->

                                   <!-- <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Ship to a different address</label>
                                        </div>
                                    </div>-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>₹<?php echo $total ?></span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>₹<?php echo $total ?></span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                            </div>
                            <form action="checkout.php" method="post">
                            <div class="cart-btn mt-100">
                                <button type="submit" name="confirm" class="btn amado-btn w-100">Confirm Order</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        
                    </div>
                </div>
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