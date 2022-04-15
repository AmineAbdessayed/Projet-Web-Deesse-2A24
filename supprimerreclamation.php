<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/EventC.php";
	$reclamation=new reclamationC();
if ($reclamation->supprimerreclamation($_GET['deletevar']))
	header('Location:afficherEvenement.php');

?>