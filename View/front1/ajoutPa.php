<?php
include_once '../../Model/panier.php';
include_once '../../Controller/panierC.php';
include_once '../../Controller/clientC.php';



$panierC = new panierC();
      $panier= new panier(
            1,
            $_GET['ref'],
            $_GET['quantity']
        );
        $panierC->ajouterPanier($panier);
        header('Location:panier.php');

?>