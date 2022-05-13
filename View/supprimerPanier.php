<?php
 include_once '../Controller/panierC.php';
 $co = new panierC();
 if(isset($_GET['id'])){
     $co->supprimerPanier($_GET['id']);
 
    header('Location:backPanier.php');
    }

 ?>