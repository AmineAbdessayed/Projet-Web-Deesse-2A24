<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/EventC.php";
 // create 
 $reclamation = null;

 // create an instance of the controller
 $reclamationC = new reclamationC();
 if (
     isset($_POST["id_rec"]) &&
     isset($_POST["nom"]) &&		
     isset($_POST["dateenvoi"]) &&
     isset($_POST["sujet"]) && 
     isset($_POST["contenu"])
 ) {
     if (
         !empty($_POST['nom']) &&
         !empty($_POST["dateenvoi"]) && 
         !empty($_POST["sujet"]) && 
         !empty($_POST["contenu"])
     ) {
       
         $reclamation = new reclamation(
            $_GET['deletevar'],
             $_POST['nom'],
             $_POST['dateenvoi'], 
             $_POST['date_fin'],
             $_POST['sujet'],
             $_POST['contenu']
         );
         $reclamationC->modifierreclamation($reclamation);
         header ("Location:afficherreclamation.php");
     }
     else
         $error = "Missing information";
 }



?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen wid_recth -->
    <meta name="viewport" content="wid_recth=device-wid_recth, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>déese</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
       <link rel="icon" type="image/png" sizes="32x32" href="C:/xampp/htdocs/projet/icon/icon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
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
    <div id_rec="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sid_recebartype="full"
        data-sid_recebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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
                        href="javascript:void_rec(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id_rec="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void_rec(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right sid_rece toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>


                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="C:/xampp/htdocs/projet/icon/222.png" alt="user-img" wid_recth="50"
                                    class="img-circle"><span class="text-white font-medium">yassine hamrouni</span></a>
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
        <!-- Left Sid_recebar - style you can find in sid_recebar.scss  -->
        <!-- ============================================================== -->
        <asid_rece class="left-sid_recebar" data-sid_recebarbg="skin6">
            <!-- Sid_recebar scroll-->
            <div class="scroll-sid_recebar">
                <!-- Sid_recebar navigation-->
                <nav class="sid_recebar-nav">
                    <ul id_rec="sid_recebarnav">
                        <!-- User Profile-->
                        <li class="sid_recebar-item pt-2">
                            <a class="sid_recebar-link waves-effect waves-dark sid_recebar-link" href="dashboard.html"
                                aria-expanded="false">
                               <i class="bi bi-house-fill"></i>
  <svg xmlns="http://www.w3.org/2000/svg" wid_recth="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
                                <span class="hid_rece-menu"> &nbsp &nbsp &nbsp &nbsp Home</span>
                            </a>
                        </li>
  <li class="sid_recebar-item">
                            <a class="sid_recebar-link waves-effect waves-dark sid_recebar-link" href="afficher_utilisateur.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hid_recden="true"></i>
                                <span class="hid_rece-menu">Gestion des reclamations</span>
                            </a>
                        </li>

                     
                       
                 

                </nav>
                <!-- End Sid_recebar navigation -->
            </div>
            <!-- End Sid_recebar scroll-->
        </asid_rece>
        <!-- ============================================================== -->
        <!-- End Left Sid_recebar - style you can find in sid_recebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sid_recebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gestion Admin</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="Dashboard.html" class="fw-normal">Home</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hid_recden-xs hid_recden-sm waves-effect waves-light text-white">front
                                </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
       
            <!-- =======================FORMULAIRE GESTION DES  INGREDIENTS======================================= -->
           <form name="f" action="" method="POST">
  <div class="container">
<br>
<br>
  
    <input type="hid_recden" name="id_rec" class="form-control" id_rec="" aria-describedby="emailHelp" value="0">
 
 
  <div class="">
    <label for="exampleInputPassword1" class="">nom:</label>
    <input type="text"  name="nom" class="form-control" id_rec="">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="">dateenvoi:</label>
    <input type="date"  name="dateenvoi" class="form-control" id_rec="">
  </div>
    
  <div class="">
    <label for="exampleInputPassword1" class="">sujet:</label>
    <input type="text"  name="sujet" class="form-control" id_rec="">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="">contenu:</label>
    <input type="text"  name="contenu" class="form-control" id_rec="">
  </div>
  
 
  <br>

<p><input type="submit"  value="Modifer" class="btn btn-info"  name="Modifer">&nbsp;
<button type="reset" class="btn btn-danger">Reset</button></p>




</form>

        <!-- ================================================================================================= -->


    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sid_recebar -->
    <script src="js/sid_recebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>