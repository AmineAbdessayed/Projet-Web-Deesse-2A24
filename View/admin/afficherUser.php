<?php
    include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/UserController.php";
	$user=new UserC();
	$listeUser=$user->afficherUser(); 
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
    <meta name="password"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Déesse</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="32x32" href="source/plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="source/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
   <style>

table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
table tbody {
    display: table;
    width: 100%;
}
   </style>
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
                    <a class="navbar-brand" href="source/dashboard.html">
                        <!-- Logo icon 
                        <b class="logo-icon">
                            
                            <img src="source/images/logo.jpg"   alt="homepage " width="130"  />
                        </b>
                    </a>-->

                   
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- =========== =================================================== -->
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
                            <a class="profile-pic" href="source/icon/walid.jpg">
                                <img src="source/icon/walid.jpg" alt="user-img" width="50"
                                    class="img-circle"><span class="text-white font-medium">Walid Marzouk</span></a>
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
                        <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="source/dashboard.html" aria-expanded="false">
                               <i class="bi bi-house-fill"></i>
							   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
                                <span class="hide-menu"> &nbsp &nbsp &nbsp &nbsp Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Back </span>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title align = center"> User List </h2>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="source/dashboard.html" class="fw-normal">Home</a></li>
                            </ol>
                            <a href="home.php" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Back
                                </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
            <!-- =======================FORMULAIRE GESTION DES  Utilisateurs======================================= -->
  <div class="container">
<button  type ="submit" class="btn btn-primary my-5"><a href="add_user.php"  class="text-light"> <b> + </b>Add user </a> </button>
 <!-- =======================PHP======================================= -->

       <p>
        <input id="myInput" type="text" placeholder="Search..">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        </p>

		<table style="table" class="users">
		 
			<tr>
				<th><b>ID </b></th>
				<th><b>UserName </th>	
                <th><b>Email </th>
				<th><b>Role </th>
                <th><b>Is Banned ?</th>
              
                
			</tr> 
          
			<tbody>
			<?php
				foreach($listeUser as $UserC){
			?>
			<tr>
				<td><?php echo $UserC['id']; ?> </td>
				<td><?php echo $UserC['username']; ?></td>
				<td><?php echo $UserC['email']; ?></td>
				<td> <?php echo $UserC['type']; ?></td>
                <td><?php if($UserC['IsBanned']==1) 
                echo '
               Banned';
                else
                echo '
                Not Banned'; ?></td>
              
			<td><?php
                echo  '
  <button class="btn btn-danger"><a href="supprimerUser.php? deletevar='.$UserC['id'].'" class="text-light">Delete</a></button>
  </td>';
                
                if($UserC['type']=='admin')
                echo'<td>			<button class="btn btn-info"><a href="makeUser.php? deletevar='.$UserC['id'].'" class="text-light">Make User </a></button>
                      </td>';
                else      
                echo'<td>			<button class="btn btn-info"><a href="makeAdmin.php? deletevar='.$UserC['id'].'" class="text-light">Make Admin </a></button>
                      </td>';
                if($UserC['IsBanned']==1)
                echo'<td>			<button class="btn btn-info"><a href="unbanUser.php? deletevar='.$UserC['id'].'" class="text-light">Unban </a></button>
                      </td>';
                else      
                echo'<td>			<button class="btn btn-info"><a href="banUser.php? deletevar='.$UserC['id'].'" class="text-light">Ban </a></button>
                    </td>';      
                      
                
			
				}
			?>
            </tr>
            </tbody>
			 
		</table>
    <!-- =========================END PHP===================================== -->
	
	
   
  <!-- <button type="button" class="btn btn-secondary">Impression PDF</button>
   <button type="button" class="btn btn-outline-info">Tri Asc</button>
   <button type="button" class="btn btn-outline-warning">Tri Desc</button> -->


  <!-- ===========================END FORMULAIRE================================================================================= -->
 
 

    <script src="source/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="source/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="source/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="source/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="source/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="source/js/custom.js"></script>
    <script>
   $("#myInput").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("tbody tr").filter(function () {
        if ($(this).text().toLowerCase().indexOf(value) > -1) {
            $(this).addClass("filteredNode");
        }
        else {
            $(this).removeClass("filteredNode");
        }
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});




    </script>
</body>

</html>