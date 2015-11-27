<?php 
include('index.php');
?>

<!DOCTYPE html>
<html>
<div id="connect">
	<div id="formco">
		<form method="post" action="connect.php">
			<p>Login :</p>
			<input type="text" name="login">
			<p>Password :</p>
			<input type="password" name="pass">
			<input type="submit" value="Se connecter" name="submit">
	</div>
	<div id="opt">
		<br />
		<a href="#"> Mot de passe oublié ? </a>
		<a href="register.php"> S'inscrire </a>
	</div>
</div>
		</form>
</html>