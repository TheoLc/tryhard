<?php
include("index.php");
if(isset($_POST['submit2']))
{
	$userfirstname=htmlentities(trim($_POST['nom']));
	$username=htmlentities(trim($_POST['prenom']));
	$useradress=htmlentities(trim($_POST['adresse']));
	$useremail=htmlentities(trim($_POST['email']));
	$userlogin=htmlentities(trim($_POST['login']));
	$userpasswd=htmlentities(trim($_POST['passwd']));
	$confpasswd=htmlentities(trim($_POST['confirm']));
	if($userfirstname && $username && $useradress && $useremail && $userlogin && $userpasswd && $confpasswd)
	{
		if($userpasswd==$confpasswd)
		{
				mysql_select_db('clients');
			$query = mysql_query("INSERT INTO clients (nom, prenom, login, passwd, adresse, email) VALUES('$userfirstname','$username','$userlogin','$userpasswd','$useradress','$useremail')");
			die("Insciption terminée <a href='connect.php'>Connectez vous</a>");
		}
	}
}
?>

<!DOCTYPE html>
<html>
<div id="formu">
	<form method="post" action="register.php">
		<p>Nom :</p>
		<input type="text" name="nom">
		<p>Prenom :</p>
		<input type="text" name="prenom">
		<p>Adresse :</p>
		<input type="text" name="adresse">
		<p>E-mail :</p>
		<input type="email" name="email">
		<p>Login :</p>
		<input type="text" name="login">
		<p>Password :</p>
		<input type="password" name="passwd">
		<p>Confirmez le password :</p>
		<input type="password" name="confirm"><br/>
		<input type="submit" value="S'inscrire" name="submit2">
	</form>
</div>
</html>