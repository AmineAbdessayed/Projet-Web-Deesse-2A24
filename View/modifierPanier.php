<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
<?php
 include_once '../Controller/panierC.php';
 
 $co = new panierC();
 if(isset($_GET['id'])){
   $panierC = new panierC();
   $listeC = $panierC->afficherPanierDetail($_GET['id']);
 
 foreach($listeC as $panier){
 ?>
 <body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->


  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
  </div>
   <form action="#" method="post">
   <!-- Box -->
   <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>idClient </label>
                <input type="number" class="field size1" name="idClient" value=<?php echo $panier['idClient'];?> />
              </p>
             
              <p> 
                <label>refProduit </label>
                <input type="number" class="field size1" name="refProduit" value=<?php echo $panier['refProduit'];?> />
              </p>
              
              <p> 
                <label>quantite </label>
                <input type="number" class="field size1" name="quantite" value=<?php echo $panier['quantite'];}?> />
              </p>

             

             
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" />
            </div>
            <!-- End Form Buttons -->
          </form>
 </div>
 </div>
 <?php

 // create event
 $panier = null;

 // create an instance of the controller

 $panierC = new panierC();
 if (
     isset($_POST["idClient"]) && 
     isset($_POST["refProduit"]) &&
     isset($_POST["quantite"])
 ) {
     if (
         !empty($_POST["idClient"]) && 
         !empty($_POST["refProduit"]) &&
         !empty($_POST["quantite"]) 
     ) {
         $panier = new panier(
             $_POST['idClient'],
             $_POST['refProduit'],
             $_POST['quantite']
         );
        $panierC->modifierPanier($_GET['id'],$panier);
         
         header('Location:backPanier.php');
     }
     else
         $error = "Missing information";
 }

 
}

?>