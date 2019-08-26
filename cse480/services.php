<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SZ Courier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Shipment a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/contact.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

<?php

session_start();
 if(!isset($_SESSION['email'])){
        header('Location: index.php');

    }
    if(!isset($_SESSION['email'])){
        header('Location: index.php');

    }
?>

    <div class="mian-content inner-page">
        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
                                
                            </div>
                            <div class="col-lg-7 top-content-right">
                                <div class="row">
                                    <div class="col-md-6 callnumber text-left">
                                        <h6>Call Us : <span>01798183343</span></h6>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo text-left">
                            <h1>
                                <a class="navbar-brand" href="home.php">
                            SZ Courier</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                              
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.php">Local</a>
                                        <a class="dropdown-item" href="services.php" title="">International</a>

                                        
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="price.php">Pricing</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profile</a>
                                </li>

                            </ul>

                            <div class="log-in">
                                <a class="btn text-uppercase" href="logout.php" >
                                    Sign Out</a>
                            </div>
                        </div>

                    </nav>
                </header>
            </div>
        </div>

    </div>
    <!--//banner-->
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- /Contact-->








    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Order</h3>
                <div class="address row">

                   
                <div class="container">
                  <h2>Place Your Ordr Here</h2>
                  
                  <form action="servicesdb.php" method="post">
                     <div class="form-group">
                      <label for="fname">First Name:</label>
                      <input type="text" class="form-control"  placeholder="First Name" name="fname">
                    </div>
                     <div class="form-group">
                      <label for="lmane">Last Name:</label>
                      <input type="text" class="form-control"  placeholder="Last Nmae" name="lname">
                    </div>
                    
                    <div class="form-group">
                                <label class="mb-2">Type</label>
                                    <select class="form-control" name="type" id="sel1">
                                        <option>Local</option>
                                        <option>International</option>
                                    </select>
                    </div>
                     <div class="form-group">
                      <label for="pickup">Pickkup Location:</label>
                      <input type="text" class="form-control"  placeholder="" name="pickup">
                    </div>
                    <div class="form-group">
                      <label for="delivar">Delivar Location:</label>
                      <input type="text" class="form-control"  placeholder="" name="delivar">
                    </div>

                    <div class="form-group">
                      <label for="quantity">Product Quantity:</label>
                      <input type="number" class="form-control"  placeholder="" name="quantity">
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

        
                    
                </div>
               
            </div>
        </div>
    </section>
    <!-- //Contact -->
 

    <!--/newsletter-->
    <footer class="newsletter_right_w3agile bg-dark pymd-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4 text-white">Subscribe our Newsletter</h3>
                
                <div class="row footer-bottom-wthree mt-lg-5 mt-3">
                    <div class="col-lg-6 copyright">
                        <h2><a class="navbar-brand" href="index.html">
                            SZ Courier</a></h2>
                        <p class="copy-right mt-3">© 2019 Shipment. All Rights Reserved.
                        </p>
                    </div>
                    
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </footer>
    <!--//newsletter-->


    <!--model-forms-->
    <!--/Login-->
   
    <!--//Login-->
    <!--/Register-->
   
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
   
    <!-- //password-script -->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>