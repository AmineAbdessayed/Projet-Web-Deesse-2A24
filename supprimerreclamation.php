<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/reclamationC.php";
	$reclamation=new reclamationC();
if ($reclamation->supprimerreclamation($_GET['deletevar']))
	header('Location:afficherreclamation.php');

?>