
<?php

include_once '../Model/commande.php';
include_once '../Controller/commandeC.php';
$commandeC = new commandeC();
$listeC = $commandeC->afficherCommande();

$commandeC = new commandeC();
if (
    isset($_POST["date_cmd"]) && 
    isset($_POST["adresse"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["idClient"]) 
) {
    if (
        !empty($_POST["date_cmd"]) && 
        !empty($_POST["adresse"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["idClient"]) 
    ) {
        $commande = new commande(
            $_POST['date_cmd'],
            $_POST['adresse'],
            $_POST['prix'],
            $_POST['idClient']
        );
        if( strlen($_POST['prix'])<0){
            echo "<script>alert('Verifiez votre prix');</script>";}
            else{
        $commandeC->ajouterCommande($commande);
        
        header('Location:backCommande.php');}
    }
    else
        $error = "Missing information";
}



?>



  
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

<head>
    
    <meta charset="utf-8">
    <title>com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   <div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>

         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                <li><div id="google_translate_element"></div>

                                <script type="text/javascript">
                                function googleTranslateElementInit() {
                                  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                                }
                                </script>
                                
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
                    </ul>


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

                    
                    <!-- ======
                    ======================================================== -->
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
                                <img src="" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Yasmine</span></a>
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
                            <a href="http://localhost/temp/View/index.html"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Déesse</a>
                        </li>
                        
                        <li class="sidebar-item pt-2">
                            
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/View/afficherEvenement.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">gestion des evenements</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/projet/afficherreclamation.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">gestion des reclamation</span>
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
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/temp/View/backPanier.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de panier</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="http://localhost/temp/view/login.php"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                login</a>
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

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <br><br>
               
        
        <center><h1>Liste des commandes</h1></center>
        <table border="1" bordercolor="orange"align="center" style="color:white;">
              <tr>
   
                <th>ID</th>
                <th>date_cmd</th>
            
                <th>adresse</th>
                <th>prix</th>
                <th>idClient</th>
              
               
              </tr>

              

              <?php
                          
    foreach($listeC as $commande){
        ?>


              <tr>
                <td><?php echo $commande['id']; ?></td>
                <td><?php echo $commande['date_cmd']; ?></td>
                 
                <td><?php echo $commande['adresse']; ?></td>
                <td><?php echo $commande['prix']; ?></td>
                <td><?php echo $commande['idClient']; ?></td>
               
                <td><a href="supprimerCommande.php?id=<?php echo $commande['id']; ?>" class="ico del">Delete</a> </td>
                <td> <a href="modifierCommande.php?id=<?php echo $commande['id']; ?>" class="ico edit">Edit</a>
               
              
              
              
              </td>
              </tr>
              <?php } ?>
              
              <div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>

         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              
              
              
              
            
           
            </table>
          <!-- Navbar & Hero End -->
          <form action="#" method="post">
            <!-- Form -->
            <div class="form">
         
              <p> 
                <label>date_cmd </label>
                <input type="date" class="field size1" name="date_cmd" id="date_cmd"/>
              </p>
              

              <p> 
                <label>adresse </label>
                <input type="texte" class="field size1" name="adresse" id="adresse" />
              </p>
              

              <p> 
                <label>prix </label>
                <input type="number" class="field size1" name="prix" id="prix" />
              </p>
              <p> 
                <label>idClient </label>
                <input type="number" class="field size1" name="idClient" id="idClient" />
              </p>
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" onclick="verif();"/>
            </div>
            <!-- End Form Buttons -->
          </form>

    
    <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="plugins/bower_components/gmaps/gmaps.min.js"></script>
    <script src="plugins/bower_components/gmaps/jquery.gmaps.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    }
    </body>
    
