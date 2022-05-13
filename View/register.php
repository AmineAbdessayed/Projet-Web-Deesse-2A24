<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config3.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	
	$query = "INSERT into `users` (username, email, type, password)
				VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";
	$res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>Registration successful !</h3>
             <p>Click Here to <a href='login.php'>login</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a href="https://waytolearnx.com/">Déesse.com</a></h1>
    <h1 class="box-title">Sign up</h1>
	<input type="text" class="box-input" name="username" placeholder="username..." required />
    <input type="text" class="box-input" name="email" placeholder="email..." required />
    <input type="password" class="box-input" name="password" placeholder="password..." required />
    <input type="submit" name="submit" value="Register" class="box-button" />
    <p class="box-register">Already have an account ? <a href="login.php">Log in</a></p>
</form>
<?php } ?>
</body>
</html>