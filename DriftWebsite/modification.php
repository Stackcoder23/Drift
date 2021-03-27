<?php
    include('connection.php');
    session_start();
?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- slideshow -->
    
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
    .mySlides {display:none;}
    </style>


    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DRIFT A complete tyre service portal</title>

    <!-- Favicon  -->
   <link rel="icon" href="img/core-img/d.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .plans{
            position: absolute;
            left: 0%;
            top: 250px !important;
        }

        section.pricing {
    /*  background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF);*/
      margin-top: 10%;
    }

    .pricing .card {
      border: none;
      border-radius: 1rem;
      transition: all 0.2s;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .pricing hr {
      margin: 1.5rem 0;
    }

    .pricing .card-title {
      margin: 0.5rem 0;
      font-size: 0.9rem;
      letter-spacing: .1rem;
      font-weight: bold;
    }

    .pricing .card-price {
      font-size: 3rem;
      margin: 0;
    }

    .pricing .card-price .period {
      font-size: 0.8rem;
    }

    .pricing ul li {
      margin-bottom: 1rem;
    }

    .pricing .text-muted {
      opacity: 0.7;
    }

    .pricing .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      opacity: 0.7;
      transition: all 0.2s;
    }

    /* Hover Effects on Card */

    @media (min-width: 992px) {
      .pricing .card:hover {
        margin-top: -.25rem;
        margin-bottom: .25rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
      }
      .pricing .card:hover .btn {
        opacity: 1;
      }
    }    
    </style>
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
 

    <!--    <div class="row justify-content-center ">
            <div class="num2">
          <div class="col-md-7">
            <form action="modification.php" method="post" data-aos="fade">
                <h1>Take Appointment<span><h5><center>for modification details.</center></h5></span></h1>
              
                  <input class="inputss1" type="text" class="form-control" placeholder="Fullname">              
                  <input class="inputss1" type="text" class="form-control" placeholder="Vehicle Type">
                  <input class="inputss1" type="email" class="form-control" placeholder="Email">
                  <textarea  class=" form-control" id="" cols="30" rows="10"
                    placeholder="Write your message here."></textarea>

                  <input name="send" class="buy-b" type="submit" class="buy-btn1" value="Send Message">
                </div>
              </div>
          </div> 
    
            </form> -->
            <!-- Slidshow -->
                <section class="pricing py-5">
  <div class="container">
    <div class="row">
            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Paint single</h5>
            <h6 class="card-price text-center">₹3000<span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Change the<br> color of the car</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>one single<br> color</li>
            </ul>
            <a href="mod/single.php" class="btn btn-block btn-primary text-uppercase">Send</a>
          <!--<a href="membership_1.php?silver=true" class="btn btn-block btn-primary text-uppercase">Join Now</a>-->
            </div>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Paint Multicolor</h5>
            <h6 class="card-price text-center">₹6000<span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Change the<br> color of the car</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Multicolor</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Design of<br> your choice</li>
            </ul>
            <a href="mod/multi.php" class="btn btn-block btn-primary text-uppercase">Send</a>
          <!--<a href="membership_1.php?silver=true" class="btn btn-block btn-primary text-uppercase">Join Now</a>-->
            </div>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Paint Bike</h5>
            <h6 class="card-price text-center">₹4000<span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Modify the<br> looks of your bike</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>your own<br> design</li>
            </ul>
            <a href="mod/bike.php" class="btn btn-block btn-primary text-uppercase">Send</a>
          <!--<a href="membership_1.php?silver=true" class="btn btn-block btn-primary text-uppercase">Join Now</a>-->
            </div>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
            <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Car tuning</h5>
            <h6 class="card-price text-center">₹30000<span class="period"></span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>tuning the car<br> for better performance </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>complete makeover<br> with hardware changes</li>
            </ul>
            <a href="mod/tuning.php" class="btn btn-block btn-primary text-uppercase">Send</a>
          <!--<a href="membership_1.php?silver=true" class="btn btn-block btn-primary text-uppercase">Join Now</a>-->
            </div>
            </div>
            </div>

        </div>
    </div>
</section>

            <div class="num23">
            <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="img/slideshowimages/mach.jpg" style="width:100%"> 
            <img class="mySlides" src="img/slideshowimages/vespa.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/mac.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/headlight.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/sc.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/j.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/paint2.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/swift2.jpg" style="width:100%">
            <img class="mySlides" src="img/slideshowimages/pro.jpg" style="width:100%">
             <img class="mySlides" src="img/slideshowimages/p.jpg" style="width:100%">
              <img class="mySlides" src="img/slideshowimages/rx.jpg" style="width:100%">
             <img class="mySlides" src="img/slideshowimages/re.jpg" style="width:100%">
            </div>
        </div>
    </div>

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

<!-- Slideshow -->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>

     </body>
 </html>