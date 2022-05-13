<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
<?php
 include_once '../Controller/commandeC.php';
 
 $co = new commandeC();
 if(isset($_GET['id'])){
   $commandeC = new commandeC();
   $listeC = $commandeC->afficherCommandeDetail($_GET['id']);
 
 foreach($listeC as $commande){
 ?>
 <body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->

<div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>

         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                <label>date_cmd </label>
                <input type="date" class="field size1" name="date_cmd" value=<?php echo $commande['date_cmd'];?> />
              </p>
             
              <p> 
                <label>adresse </label>
                <input type="texte" class="field size1" name="adresse" value=<?php echo $commande['adresse'];?> />
              </p>
              
              <p> 
                <label>prix </label>
                <input type="float" class="field size1" name="prix" value=<?php echo $commande['prix'];?> />
              </p>
              <p> 
                <label>idClient </label>
                <input type="number" class="field size1" name="idClient" value=<?php echo $commande['idClient'];}?> />
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
 $commande = null;

 // create an instance of the controller

 $commandeC = new commandeC();
 if (
     isset($_POST["date_cmd"]) && 
     isset($_POST["adresse"]) &&
     isset($_POST["prix"])&&
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
        $commandeC->modifierCommande($_GET['id'],$commande);
         
         header('Location:backCommande.php');
     }
     else
         $error = "Missing information";
 }

 
}

?>