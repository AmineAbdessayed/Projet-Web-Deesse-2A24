
<?php
      include_once '../Model/produit.php';
      include_once '../Controller/produitC.php';
      include_once '../Model/categorie.php';
      include_once '../Controller/categorieC.php';
      $error = "";
  
      // create product
      $categorie = null;
  
      // create an instance of the controller
      $categorieC = new categorieC();
      $listecategorie=$categorieC->affichercategorie();
  
      $error = "";
  
      // create product
      $produit = null;
  
      // create an instance of the controller
      $produitC = new produitC();
    
  

	

    if (
        // isset($_POST["id_produit"]) &&
		isset($_POST["nom_produit"]) &&
        isset($_POST["prix_produit"]) && 
        isset($_POST["quantite_produit"])&&
        isset($_POST["categorie"])&&
        isset($_POST["image_produit"])&&
        isset($_POST["description_produit"]) 

    ) {
        if (
           
			// !empty($_POST["id_produit"]) &&
            !empty($_POST["nom_produit"]) &&
            !empty($_POST["prix_produit"]) && 
            !empty($_POST["quantite_produit"])&&
            !empty($_POST["categorie"])&&
            !empty($_POST["image_produit"])&&
            !empty($_POST["description_produit"])
        ) {
            $produit = new produit(
            $_POST["id_produit"],
            $_POST["nom_produit"],
            $_POST["prix_produit"],
            $_POST["quantite_produit"],
            $_POST["categorie"],
            $_POST["image_produit"],
            $_POST["description_produit"]
            );
            $produitC->modifierproduit($produit, $_POST["id_produit"]);
            header('Location:gestion_des_produits.php');
        }
        else
            $error = "Missing information";
    }


    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifier produit </title>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Déesse</title>
    <link rel="canonical" href="http://localhost/temp/View/deesse.php" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
   
<!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                       
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/ouss1.png" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Oussama</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Déesse</a>
                        </li>
                        <li class="sidebar-item pt-2">
                            
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion des utlisateurs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/View/afficherEvenement.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">gestion des evenements</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/View/backPanier.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de commandes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/View/gestion_des_produits.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de produits</span>
                            </a>
                        </li>
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                   
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <h5 class="m-b-10">Gestion de produits</h5>
                            <div class="white-box">
                                <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/mk2.jpeg">
                                            
                                           
                                        
                                    
                                </div>
                                    
                                
                            </div>
                        </div>      
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Modifier produit</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                    <div id="error">
                                                    <?php echo $error; ?>
                                                    </div>
                                                    <?php
                                                        if (isset($_POST['id_produit'])){
                                                            $produit = $produitC->recupererproduit($_POST['id_produit']);
				
		                                            ?>

                                                        <form action="" class="form-material" method="POST">
                                                            <div class="form-group form-default">
                                                                <input type="hidden" name="id_produit" id="id_produit"   value="<?php echo $produit['id_produit']; ?>"  class="form-control" required="" onclick="return saisirID()">
                                                                <span class="form-bar"></span>
                                                                <p id="errorID" class="error"></p>
                                                                
                                                            </div>
                                                          
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="nom_produit" name="nom_produit"  value="<?php echo $produit['nom_produit']; ?>" class="form-control" required="" onclick="return saisirNom()">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nom_produit</label>
                                                                <p id="errorName" class="erreur" ></p>
                                                            </div>

                                                            <div class="form-group form-default">
                                                                <input type="number"  id="prix_produit" name="prix_produit" class="form-control" value="<?php echo $produit['prix_produit']; ?>" required="" onclick="return saisirprix()">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Prix</label>
                                                                <p id="errorPRIX" class="erreur" ></p>
                                                            </div>

                                                            <div class="form-group form-default">
                                                            <label class="">quantite</label>
                                                                <input type="number"   id="quantite_produit" name="quantite_produit"  class="form-control" required value="<?php echo $produit['quantite_produit']; ?>" onclick="return saisirQuantite()">
                                                                <span class="form-bar"></span>
                                                                <p id="errorQuantity" class="erreur" ></p>
                                                
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="description_produit" name="description_produit"  value="<?php echo $produit['description_produit']; ?>" class="form-control" required="" >
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Description_produit</label>
                                                            
                                                            </div>
                                                            <div class="form-group form-default">categorie :<select name="categorie" id="categorie">
  <?php 
  foreach ($listecategorie as $categorie){
  ?>
  <option value="<?php echo $categorie['nom']; ?>"><?php echo $categorie['nom']; ?></option>
  <?php
  }
  ?>
</select>
</div>


<div class="form-group form-default">
                                                            <!-- <label class="float-label">Enter Image</label>
                                                            <br> -->
                                                                <input type="file"  id="image_produit" name="image_produit"  value="" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>



                                                            <input type="submit" value="Modifier"  onclick="ajout(produit)"  class="btn btn-warning waves-effect waves-light">
                                                            
                                                        </form>
                                                    
                                                        <?php
                                                         }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                        
                                                
                                                           
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- Main-body end -->
                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Warning Section Starts -->
                            <!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

    <script>
    
    function saisirNom() {
                var name = document.getElementById('nom_produit').value;
                var regex = /^[A-Za-z]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorName").textContent = "Name has to be composed of letters only!";
                    document.getElementById("errorName").style.color = "red";
                    return 0;
                } 
                else if (name[0] == name[0].toLowerCase()) {
                    document.getElementById("errorName").textContent = "Name has to start by a capital letter!";
                    document.getElementById("errorName").style.color = "red";
                    return 0;
                }
                 else {
                    document.getElementById("errorName").textContent = "Name Verified";
                    document.getElementById("errorName").style.color = "green";
                    return 1;
                }
    }
    
  
    function saisirQuantite(){
                var name = document.getElementById('quantite_produit').value;
                var regex = /^[0-9]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorQuantity").textContent = "Quantity has to be composed of numbers only!";
                    document.getElementById("errorQuantity").style.color = "red";
                    return 0;
                } 
  
                 else {
                    document.getElementById("errorQuantity").textContent = "Quantity Verified";
                    document.getElementById("errorQuantity").style.color = "green";
                    return 1;
                }
    }

    function saisirID(){
                var name = document.getElementById('id_produit').value;
                var regex = /^[0-9]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorID").textContent = "ID has to be composed of numbers only!";
                    document.getElementById("errorID").style.color = "red";
                    return 0;
                } 
  
                 else {
                    document.getElementById("errorID").textContent = "ID Verified";
                    document.getElementById("errorID").style.color = "green";
                    return 1;
                }
    }
    function saisirprix(){
                var name = document.getElementById('prix_produit').value;
                var regex = /^[0-9]+$/;


                if (!(regex.test(name))) {
                    document.getElementById("errorPRIX").textContent = "PRIX has to be composed of numbers only!";
                    document.getElementById("errorPRIX").style.color = "red";
                    return 0;
                } 
  
                 else {
                    document.getElementById("errorPRIX").textContent = "PRIX Verified";
                    document.getElementById("errorPRIX").style.color = "green";
                    return 1;
                }
    }















    function ajout(event) {
    if ( saisirNom() == 0  || numBer()==0 || saisirQuantite()==0 || saisirID()==0 || saisirprix()==0 )
    
        event.preventDefault();
    }


  







</script>






</body>

</html>