<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SZ Courier Service</title>
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
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/minimal-slider.css" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

    <?php 

    session_start();
    if(isset($_SESSION['email'])){
        header('Location: home.php');

    }

    if(isset($_SESSION['type'])){
    	if($_SESSION['type']== "Admin"){ 
             header('Location: admin.php');
		}

    }
 



    ?>

    <div class="mian-content">
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width: 300%;">
                <div class="slide">
                    <div class="slide-caption">
                        <p>The right choice</p>
                        <h3>Propel <span>yourself</span> into the future.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="index.php">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption">
                        <p>Ready to go</p>
                        <h3>Premium Worldwide <span>Logistics</span> Network </h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="index.php">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption">
                        <p>The right choice.</p>
                        <h3>Propel <span>yourself</span> into the future.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="index.php">
                            Contact</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->

        <div class="header-top-w3layouts">
            <div class="container">

                <header>
                    <div class="top-head-w3-agile text-left">
                        <div class="row top-content-info-wthree">
                            <div class="col-lg-5 top-content-left">
                                <h6></h6>
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
                                <a class="navbar-brand" href="index.php">
                        SZ Courier Service</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                              
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-right">
                                
                                <li class="nav-item">
                                    <div class="log-in">
                                <a class="btn text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                    Sign In</a>
                            </div>
                                </li>
                                
                            </ul>


                            
                           
                        </div>


                    </nav>
                </header>
            </div>
        </div>

    </div>
    <!-- end of main image slider container -->
    <!-- banner-text -->
    <!-- ab -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <div class="intro text-left">
                    <h3 class="main mb-md-5 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore.</h3>
                    <p>Adipisicing elit sedc eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-anchor mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Ocean Freight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">

                                <i class="fas fa-fighter-jet mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Air Freight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-truck mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Land Transport</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-docker mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Supply</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-clock mb-2"></i>

                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Fast & On Time</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-left">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-money-bill-alt mb-2"></i>
                                <h6 class="my-3">Consectetur elit</h6>
                                <h5 class="card-title">Weather Insuarance</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //ab -->
    <!-- banner-bottom-w3ls -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 about-img">
                </div>
                <div class="col-lg-6 about-right">
                    <h4>Who We Are</h4>
                    <h3>We give you complete control of your shipments.</h3>
                    <p class="my-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>

                    <ul class="author d-flex">
                        
                        <li><span>Shahbaz Sadik</span>SZ Courier</li>
                    </ul>
                    

                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-w3ls -->
    <!-- /services -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">We Offered Services</h3>
                <div class="row middle-grids">
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-archive mb-2"></i>
                                <h5 class="card-title my-3">Storage</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-signal mb-2"></i>
                                <h5 class="card-title my-3">Trucking Services</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-users mb-2"></i>
                                <h5 class="card-title my-3">Expert Staff</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!--gallery  -->
    <section class="gallery py-md-5 py-3">
        <div class="gallery-inner pb-md-5 pb-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Gallery</h3>
            <ul class="portfolio-categ filter pb-5 mb-lg-3 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">category 1</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">category 2</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">category 3</a>
                </li>


            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-3">
                    <span class="image-block img-hover">
                        <a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g1.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g2.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g3.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g4.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g5.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g6.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                       <a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g7.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/g8.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //gallery -->
    <!--/pricing -->
    
    <!-- //pricing -->
    <!-- /bottom-last -->
    <section class="bottom-last py-5 text-center">
        <div class="bottom-bg">
            <h3>Imagination… What we can easily see is only a small percentage of what is possible.</h3>

        </div>
    </section>
    <!-- //bottom-last -->
    <!--/Blog-Posts-->
    <section class="banner-bottom-w3ls bg-light py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-4">
                <h3 class="tittle text-center mb-md-5 mb-4">
                    Blog Posts</h3>
                <!--/services-grids-->
                <div class="row blog-sec">
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g7.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 18, 2019</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g1.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 20, 2019</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in blog-grid-info text-left">
                        <div class="card img">
                            <div class="card-body img">
                                <img src="images/g4.jpg" alt="" class="img-fluid">
                                <div class="blog-des">
                                    <span class="entry-date">June 25, 2019</span>
                                    <h5 class="card-title text-uppercase mt-2"><a href="single.html">Vivamus id tempor felis. Cras sagittis mi sit amet </a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Blog-Posts-->
    <!--/testimonials-->
    <section class="clients py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Some word from our Clients</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t1.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Mary Jane</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t3.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t2.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter guptill</h5>
                                    <p>Vestibulum <span>(Company)</span></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t3.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t2.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter guptill</h5>
                                    <p>Vestibulum <span>(Company)</span></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->

    <!--/newsletter-->
    <footer class="newsletter_right_w3agile bg-dark pymd-5 py-4">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                
                <div class="row footer-bottom-wthree mt-lg-5 mt-3">
                    <div class="col-lg-6 copyright">
                        <h2><a class="navbar-brand" href="index.html">
                            SZ Courier</a></h2>
                        <p class="copy-right mt-3">© 2019 SZ Courier. All Rights Reserved 
                            
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="logdb.php" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                             
                            <div class="form-check mb-2">
                                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="regdb.php" method="post">
                            <div class="form-group">
                                <label>Name</label>

                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="validationDefault02" name="email" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" name="pass" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Type</label>
                                    <select class="form-control" name="type" id="sel1">
                                        <option>Admin</option>
                                        <option>User</option>
                                         </select>
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

   <?php 
    

    if(isset($_SESSION['error'])){
        echo '<li>'.$_SESSION['error']. '</li>';
        unset($_SESSION['error']);
    }
    ?> 


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/minimal-slider.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
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
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
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
	<!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/pretty-script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>