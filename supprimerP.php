<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/ParticipsC.php";
	$Particips=new ParticipsC();
if ($Particips->supprimerP($_GET['deletevar']))
	header('Location:afficherP.php');

?>