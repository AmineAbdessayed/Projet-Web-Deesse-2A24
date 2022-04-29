<?php
include_once "$_SERVER[DOCUMENT_ROOT]/registration/Controller/UserController.php";
	$User=new UserC();
if ($User->unbanUser($_GET['deletevar']))
	header('Location:afficherUser.php');
	

?>