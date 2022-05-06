<?php
    include_once '../Controller/produitC.php';

    $produitC = new produitC();
    $nom_produit=$_POST['nom_produit'];

    $listeproduit=$produitC->search($nom_produit);
    
?>

    <!doctype html>
    <html class="no-js" lang="en">

    <head>



    </head>

    <body>
       
                                <script>
                                    var dropdown = document.getElementsByClassName("dropdown_btn");
                                    var i;

                                    for (i = 0; i < dropdown.length; i++) {
                                        dropdown[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var dropdownContent = this.nextElementSibling;
                                            if (dropdownContent.style.display === "block") {
                                                dropdownContent.style.display = "none";
                                            } else {
                                                dropdownContent.style.display = "block";
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <?php
                            foreach($listeproduit as $produit){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="produit__item">
                                <?php echo '<a href="'."Product.php?id_produit=". $produit['id_produit'].'">'?><img src="assets/images/<?php echo $produit['image_produit']; ?>"class="produit__item__pic set-bg" height="360" width="270" alt="Image"></a>
                                
                                    <ul class="produit__hover">
                                        <li><a href="#"><span class="fa fa-heart"></span></a></li>
                                        <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
                                    </ul>
                            </div>
                                <div class="produit__item__text">
                                    <h6><a href="Product.php?ID_Pr=<?php echo $produit['id_produit']; ?>"><?php echo $produit['nom_produit']; ?></a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="produit__price"><?php echo $produit['prix_produit']; ?> DT</div>
                                </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                        
                    
                    </div>
                </div>
            </section>
            <!-- Blog Area End -->
        
        <!-- Scroll Up -->
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
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
        <script src="./assets/js/produit.js"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    </body>

    </html>