<?php

    include_once '../Controller/produitC.php';
	$produitC = new produitC();
    $produitC->supprimerproduit($_GET["id_produit"]);
	header('Location:gestion_des_produits.php');
?>





