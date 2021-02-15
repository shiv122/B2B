<?php 
include 'dbcon.php';
session_start();
?>


<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umang B2B</title>
    <!-- favicon -->
    <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
    <!-- Vendor Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--Codingeek -->
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
<script >
    
 
setInterval(function(){ 
   $.ajax({
            //data :{action: "showroom"},
            url  :"inc/head.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#cott").html(data);
            }
        });
}, 1000);

        
     

</script>
  <script >
    
  debugger;
setInterval(function(){ 
   $.ajax({
            //data :{action: "showroom"},
            url  :"inc/head2.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#cottt").html(data);
            }
        });
}, 1000);
        
     

</script>

<script >
  function search(val1s){ 
   
  debugger;

   $.ajax({
            data :{nm1: val1s},
            url  :"inc/searching.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#srch").html(data);
               
            }
        });

        
   }  

</script>

</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" onkeyup="search(this.value);" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
            <a id="srch"> </a>
        </form>
        

    </div>
    <!-- search Popup end -->

    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close">X</button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                  <img src="assets/img/Umang-Black.png" alt="umang logo"> 

                
            </div>
            <div class="sidemenu-text">
                <p>We believe brand interaction is key in commu- nication. Real inno vations and a positive customer experience are the heart of successful commu- nication.</p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Lavaca Street, Suite 2000</li>
                    <li><i class="fa fa-envelope"></i>email@evha.com</li>
                    <li><i class="fa fa-phone"></i>(+880) 172570051</li>
                </ul>
            </div>
            <div class="sidebar-subscribe">
                <input type="text" placeholder="Email">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sidebar menu end-->

    <!-- navbar start -->
    <div class="stoon-navbar">
        <div class="header-top d-none d-sm-block">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-8">
                        <div class="contact">
                            <a href="tel:+496170961709"><i class="icon-call-header"></i> (+91) 123-456-7890</a>
                            <a href="#"><i class="icon-email-subscribe"></i> support@example.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="shipping text-center">
                            <p>FREE SHIPPING - <span>on all orders over $35*</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="social">
                            <ul class="nav-social justify-content-end">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav 44 class="navbar navbar-area navbar-expand-lg nav-style-01">
            <div class="container-fluid nav-container">
                <div class="row">
                    <div class="col-lg-3 col-4 order-1 align-self-center">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/Umang-Black.png" alt="umang logo" style="width: 30%;"> </a>

                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <div class="collapse navbar-collapse" id="shop-menu">
                            <ul class="navbar-nav menu-open">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="collection.php">Shop</a></li>
                                <li><a href="blog.php">blog</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-8 justify-content-end d-flex order-2 order-lg-3">
                        <div class="nav-right-part">
                            <ul>
                                <li>
                                    <a href="#" id="search"><i class="icon-search"></i></a>
                                </li>
                                <li id="" class="has-dropdown">

                                    <?php 
                                     if (isset($_SESSION['log_buyer'])) {
                                         # code...
                                    
                                    include 'wishlist.php'; } ?>
                                    <ul style="  width: 600px;
  height: 300px;
  overflow-x: hidden;
  overflow-y: auto;">
                                    <div  id="cottt">
                                       
                                    </div>
                                    </ul>
                                </li>
                                <li id="" class="has-dropdown">
                                    <?php
                                     if (isset($_SESSION['log_buyer'])) { include 'cart_icon.php'; } ?>
                                    <ul style="  width: 600px;
  height: 300px;
  overflow-x: hidden;
  overflow-y: auto;">
                                    <div  id="cott">
                                       
                                    </div>
                                    </ul>
                                </li>
                                <li>
                                    <?php if (isset($_SESSION['log_buyer'])) {
                                        # code...
                                     ?>
                                    <a href="customer-account.php"><i class="icon-user"></i></a>
                                    <ul class="user-dropdown">
                                        <li><a href="login.php">Sign In | Join</a></li>
                                        <li><a href="customer-account.php"><i class="icon-user"></i> My Account</a></li>
                                        <li><a href="customer-orders.php"><i class="fa fa-briefcase"></i> My Orders</a></li>
                                        <li><a href="return_st.php"><i class="fa fa-reply"></i> Returns Information</a></li>
                                        <li><a href="product_req.php"><i class="fa fa-commenting-o"></i>Request Product</a></li>
                                        <li><a href="return-order.php"><i class="fa fa-undo"></i>Return Product</a></li>
                                        <li><a href="requested.php"><i class="fa fa-hand-paper-o"></i>Requested Product</a></li>
                                    </ul>
                                   <?php  } 

                                      else
                                      {
                                        ?>

                                         <a href="login.php"><i class="icon-user"></i></a>
                                        <?php
                                      }



                                   ?>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="#" id="navigation-button"><i class="icon-bar-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="responsive-mobile-menu">
                            <div class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#shop-menu" aria-expanded="false" role="button">
                                <div class="icon-left"></div>
                                <div class="icon-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

   
    <!-- navbar end -->