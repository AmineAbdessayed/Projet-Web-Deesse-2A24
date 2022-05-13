<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/UserController.php";
require('config3.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	$_SESSION['password'] = $password;
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		$usr=new UserC ();
		if($user['IsBanned'] == 1)
		{$message = "You Are Banned for  bad behaviors !.";}
		else
		{
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		if ($user['type'] == 'admin') {
			
			header('location: admin/home.php');	

		}else{
			
			header('location: index.php');
		}
	}
	}else{
		$message = "Wrong username or password !.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="admin/source/dashboard.html">Déesse.com</a></h1>
<h1 class="box-title">login</h1>
<input type="text" class="box-input" name="username" placeholder="username">
<input type="password" class="box-input" name="password" placeholder="password">
<input type="submit" value="login " name="submit" class="box-button">
<a href="forget-password.php" ><p>forgot your password?</p></a>
<p class="box-register">New Here ? <a href="register.php">Sign up </a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>