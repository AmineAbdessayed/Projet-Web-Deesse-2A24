<?php
  
  include_once 'C:/xampp/htdocs/temp/Model/produit.php';
    include_once '../Controller/produitC.php';
   

    $error = "";

    $produit = null;

    $produitC = new produitC();
  

	$listeproduit=$produitC->afficherproduit(); 


    if(isset($_POST['trier']))
    {
        $listeproduit=$produitC->trierproduit();
    session_start();
    }
    


    
?>






<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
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
                            <a href="http://localhost/temp/View/index.html"
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">gestion des evenements</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de commantaires </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de commandes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
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
                        
                    <!-- Column -->
                    <!-- Column -->
                    
                                    
                                <div class="card-block">
                                                    <div id="error">
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <form action=""     class="form-material" method="POST" >
                                                   
                                         

                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="nom_produit" name="nom_produit"  class="form-control"required="" onclick="return saisirNom()">
                                                                                                                               <label class="float-label">Nom</label>

 <span class="form-bar"></span>
 <p id="errorName" class="error"></p>
                                                            </div>
                                                          
                                                            <div class="form-group form-default">
                                                                <input type="number" id="prix_produit" name="prix_produit" class="form-control" required="">
                                                                                                                                <label class="float-label">Prix</label>

<span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number"  id="quantite_produit" name="quantite_produit"  class="form-control"required="">
                                                                                                                                <label class="float-label">Quantite</label>
                                                                                                                                
<span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">categorie :<select name="categorie" id="categorie">
  <?php 
  foreach ($listecategorie as $categorie){
  ?>
  <option value="<?php echo $categorie['id_categorie']; ?>"><?php echo $categorie['nom']; ?></option>
  <?php
  }
  ?>
</select>
</div>
<div class="button-container">
        <label class="label">  ajouter une image</label>
        <div class="field-body">
          <div class="button-container">
            <label class="upload control">
               upload 
              <input type="file" id="image_produit" name="image_produit" required="required">
            </label>
            
          </div>
        </div>
      </div><br>
<div class="form-group form-default">

                                                                <input type="text"  id="description_produit" name="description_produit"  class="form-control"required="">
                                                                                                                               <label class="float-label">DESCRIPTION</label>

 <span class="form-bar"></span>

                                                            </div>
                                                            <input type="submit" value="Ajouter">
                                                           
                        
                     
                                                        </form>





                                                        <td>
                                                                <form method="POST" action="Ajout_categorie.php">
                                                                    <input class="sidebar-link waves-effect waves-dark sidebar-link" type="submit" name="Cathegorie" value="Cathegorie">
                                                                    
                                                                </form>

                                                            </td>



                                                           
                                                    </div>

                                                   
 

                        
                                    
                                      
                                    
                                                    <?php
                                            $bdd= new PDO('mysql:host=localhost;dbname=oussamaa;charset=utf8','root','');
                                            $userParPage =2;
                                            $userTotalReq=$bdd->query('SELECT id_produit FROM produit');
                                            $userTotal=$userTotalReq->rowCount();
                                            $pagesTotales=ceil($userTotal/$userParPage);
                                            if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page']<= $pagesTotales){
                                            $_GET['page']=intval($_GET['page']);
                                            $pageCourante=$_GET['page'];
                                            }else{
                                                $pageCourante=1;
                                            }
                                            
                                            $depart=($pageCourante-1)*$userParPage;
                                            
                                            ?>
                                  
                                    <div class="table-responsive">
                                       
                                                  <table class="table table-hover">


                                                  <?php
$bdd= new PDO('mysql:host=localhost;dbname=oussamaa;charset=utf8','root','');
$produit=$bdd->query('SELECT id_produit,nom_produit,prix_produit,quantité_produit,categorie,image_produit,description_produit FROM produit ORDER BY prix_produit ASC');
if(isset($_GET['q']) AND !empty($_GET['q'])){
$q = htmlspecialchars($_GET['q']);
//var_dump('salut');
    $produit=$bdd->query('SELECT id_produit,nom_produit,prix_produit,quantité_produit,categorie,image_produit,description_produit FROM produit WHERE nom_produit LIKE "%'.$q.'%" ORDER BY prix_produit ASC');
if($produit->rowCount() == 0){
   // var_dump('boucle entrée');
    $produit=$bdd->query('SELECT id_produit FROM produit WHERE CONCAT(id_produit,nom_produit,prix_produit,quantité_produit,categorie,image_produit,description_produit) LIKE "%'.$q.'%" ORDER BY prix_produit ASC');
}

}
?>
<form align="center" method="GET">
<input type="search" name="q" placeholder="Recherche..." />
<input  type="submit" value="valider" />

</form>

<?php if($produit->rowCount() > 0) { ?>
    <form method="POST" action="gestion_des_produits.php">
                                                <input type="submit"  name="trier" id="trier"  class="btn  btn-info" value="trier" ></input>
                                                
                                            
                                                </form>
</form>
<table border ="1" align="center" class="table table-hover">

                                                
                                    
                                         <thead>
                                                <tr>
                                                    <td> ID</td>
                                                    <td>NOM</td>
                                                    <td>PRIX</td>
                                                    <td>QUANTITE</td>
                                                    <td>CATEGORIE</td>
                                                    <td>IMAGE</td>
                                                    <td>DESCRIPTION</td>
                                                    <td>Modifier</td>
                                                    <td>Supprimer</td>
                                                </tr>
                                         </thead>
                                         <?php while($a=$produit->fetch()){ ?>

                                         <tbody>
                                         <?php
                                         $listeproduit=$bdd->query('SELECT * FROM produit ORDER BY id_produit ASC LIMIT '.$depart.','.$userParPage);

                                                            foreach($listeproduit as $produit){
                                                           
                                                        ?>
                                                     <tr>
				<td><?php echo $a['id_produit']; ?></td>
				<td><?php echo $a['nom_produit']; ?></td>
				<td><?php echo $a['prix_produit']; ?></td>
				<td><?php echo $a['quantite_produit']; ?></td>
                <td><?php echo $a['prix_produit']; ?></td>
                <td><?php echo $a['categorie']; ?></td>
                <td><?php echo $a['image_produit']; ?></td>
                <td><?php echo $a['description_produit']; ?></td>
              
				<!-- <!-- <td>
					<!-- <form method="POST" action="update.php">
				<button class="btn-primary btn"> <a href="update.php" class="text-white"> Update </a> </button> 
				<input type="hidden" value=<?PHP echo $a['ref_lv']; ?> name="id_users">
					</form> -->
				<td> 
                <button class="btn btn-primary"><a href="Modifier_produit.php?ref_lv=<?php echo $a['ref_lv']; ?>">Edit</a>  </button>
                <button class="btn-danger btn"><a href="Supprimer_produit.php?ref_lv=<?php echo $a['ref_lv']; ?>">Delete</a>  </button>
                
				</td>
                                        
			</tr>
            <?php } ?>
    </table>
    <?php } ?>
                                                        </tbody>
                                                    <?php } ?>

                                                </table>
                                             
                                                </div>
                                                
                                                    
                                                
                                                
                                                
                                                           
                                                        
                                            </div>
                                            <div id="pagination">
                                                    <?php 
        for($i=1;$i<=$pagesTotales;$i++){
            if($i == $pageCourante){
            echo $i.' ';
            }else{
            echo '<a href="gestion_des_produits.php?page='.$i.'">'.$i.'</a> ';
        }
    }

        ?>
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

                                                
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                
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
            <footer class="footer text-center">  <a
                    href="https://www.wrappixel.com/"></a>
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


function ajout(event) {
    if ( saisirNom() == 0 || numBer()==0 | )
    
        event.preventDefault();
    }


  







</script>


    
                        
                        
</body>

</html>