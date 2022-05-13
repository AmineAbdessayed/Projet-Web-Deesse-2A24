<?php
include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/UserController.php";
	$User=new UserC();
if ($User->makeUser($_GET['deletevar']))
	header('Location:afficherUser.php');
	

?>