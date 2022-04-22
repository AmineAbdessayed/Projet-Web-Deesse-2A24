<?php
	include 'C:/xampp/htdocs/temp/Controller/produitC.php';
    $produit=null;
	$produitC=new produitC();
	$listeproduit=$produitC->afficherproduit(); 
?>
<!doctype html>
<html class="no-js" lang="zxx">
    

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gestion categorie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/styleadopt.css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                                <li><a href="product.html">Product</a></li>
                                                
                                                  <!--  <ul class="submenu">
                                                    
                                                        <li><a href="elements.html"></a></li>

                                                        
                                                    </ul>-->
                                                    
                                                </li>
                                                <li><a href="Commandes.html">Commandes</a></li>
                                                <li><a href="blog.html">Sponsors</a></li>
                                                <li><a href="events.html">events</a>
                                                    <ul class="submenu">
                                                        <li><a href="events.html#speakers">speakers</a></li>
                                                        <li><a href="events.html#schedule">schedule</a></li>
                                                        <li><a href="events.html#venue">venue</a></li>
                                                        <li><a href="events.html#hotels">hotels</a></li>
                                                        <li><a href="events.html#gallery">gallery</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="page de connexion.html" class="btn header-btn">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Header End -->
    </header>
    
    <main>
        
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Cosmetics are a true living treasure</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='search for a product' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                            </form>
                        </aside>
                    </div>
                </div>
                <div class="row">
                
                </div>
            </div>
            <section class="blog_area section-padding">
                <div class="container">
                    <div class="row">
                        <!-- right section -->
                        <?php
            foreach($listeproduit as $produit){
            ?> 
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                        <?php echo'<img src="assets/img/'.$produit['image_produit'].'"width="300;" height="400" alt="Image">'  ?>
                        </div>
                        <div class="discography__item__text">
                            <h1><?php echo $produit['nom_produit'] ?></h1>
                        </div>
                        <div class="discography__item__text">
                            <h4><?php echo $produit['description_produit'] ?></h4>
                        </div>
                        <div class="discography__item__text">
                            <h4><?php echo $produit['prix_produit'] ?> dt</h4>
                        </div>
                    </div>
                    
                    
                </div>
                <?php
}
?>






                    </div>
                </div>
            </section>
            
        </div>
        
        <!-- Blog Area End -->
    </main>
    <footer>
        <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter" target="_blank"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f" target="_blank"></i></a>
                                        <a href="#"><i class="fab fa-instagram" target="_blank"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>SiteMap</h4>
                                    <ul>
                                        <li><a href="#">home</a></li>
                                        <li><a href="#">Product</a></li>
                                        <li><a href="#">categorie</a></li>
                                        <li><a href="#">Commandes</a></li>
                                        <li><a href="#">events</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact us</h4>
                                    <ul>
                                        <li><a href="#">Déesse@gmail.com</a></li>
                                        <li><a href="#">Avenue Habib Bourgiba</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">(216) 27086763</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by Déesse
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/popup.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>