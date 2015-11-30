<?php
include("index.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Achat</title>
</head>
<body>
	<?php
$account = "SELECT * FROM clients WHERE login='".$_SESSION['login']."';";
$resul = mysql_query($account) or die('Erreur SQL !<br>'.$account.'<br>'.mysql_error()); 
$row1 = mysql_fetch_row($resul);
echo "<p>Merci de votre achat de ".$_POST['prix']."&#8364.</p>";
echo "Vos articles vous seront livrés entre 2 et 3 jours à l'adresse : ".$row1[5].".";

$acc = "SELECT * FROM articles WHERE idc='".$row1[0]."';";
$result = mysql_query($acc) or die('Erreur SQL !<br>'.$acc.'<br>'.mysql_error()); 
while($row5 = mysql_fetch_row($result))
{
	mysql_select_db('historique');
	$query = mysql_query("INSERT INTO historique (name, price, idc) VALUES('".$row5[1]."','".$row5[2]."','".$row5[4]."')");		
}


mysql_select_db('articles');
	$query = mysql_query("DELETE FROM articles WHERE idc='".$row1[0]."';");

?>
</body>
</html>