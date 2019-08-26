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
                                        <h6>Call Us : <span>1234567890</span></h6>
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
                                <li class="nav-item dropdown">
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
                                 <li class="nav-item active">
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
        <li class="breadcrumb-item active">Profile</li>
    </ol>
    <!-- //breadcrumb -->
    <!-- /Contact-->

<?php 

//session_start();

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];

}else {
    header('Location : index.php');
}


    require 'db.php';

    $sql = "SELECT * FROM user WHERE `email` = '$email'";
    $act = $db->query($sql);

    foreach ($act as $key) {
        
    }

?>







    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4"><?php echo $key['name']; ?></h3>
                <h4 class="tittle text-center mb-md-5 mb-4"><?php echo $key['email']; ?></h4>
                <h5 class="tittle text-center mb-md-5 mb-4"><?php echo $key['type']; ?></h5>
                <h5 class="tittle text-center mb-md-5 mb-4"></h5>
                <h5 class="tittle text-center mb-md-5 mb-4">Time Line</h5>

                <div class="address row">

                 <?php  

                 require 'db.php';
                 if(isset($_SESSION['email'])){
                        //header('Location: home.php');
                        $email= $_SESSION['email'];
                    }
                    
                    $sql = "SELECT * FROM shipment WHERE email = '$email'";

                    if($result = mysqli_query($db, $sql)){
                        if(mysqli_num_rows($result) > 0){ ?>
                            <table  class="table table-hover" >
                                <tr>
                                    <th>First Name</th>
                                    <th>Lat Name</th>
                                    <<th>Issue Date</th>
                                    <th>Type</th>
                                    <th>Pickup Location</th>
                                    <th>Delivar Location</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Delevary Time</th>

                                </tr>
                           <?php while($row = mysqli_fetch_array($result)){ ?>
                                <tr>
                                    <td><?php echo $row['fname']?> </td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['type'] ?></td>
                                    <td><?php echo $row['pickup'] ?></td>
                                    <td><?php echo $row['delivar'] ?></td>
                                    <td><?php echo $row['quantity'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><?php echo $row['ddate'] ?></td>
                                    
                                </tr>
                         <?php   }
                            echo "</table>";
                            // Free result set. mysqli_free_result() function frees the memory associated with the result.
                            mysqli_free_result($result);
                        } else{
                           echo " <h5>You Have No Shipment.</h5>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

?>

       
                    
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
                            Shipment</a></h2>
                        <p class="copy-right mt-3">© 2018 SZ Courier. All Rights Reserved.
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