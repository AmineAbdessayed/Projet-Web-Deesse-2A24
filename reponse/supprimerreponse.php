<?php
include_once "$_SERVER[DOCUMENT_ROOT]/reponse/Controller/reponseC.php";
	$reponse=new reponseC();
if ($reponse->supprimerreponse($_GET['deletevar']))
	header('Location:afficherreponse.php');

?>