<?php
include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/ParticipsC.php";
	$Particips=new ParticipsC();
if ($Particips->supprimerP($_GET['deletevar']))
	header('Location:afficherP.php');

?>