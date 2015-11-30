<?php
include("index.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Compte</title>
</head>
<body>
<?php
$account = "SELECT * FROM clients WHERE id='".$_GET['id']."';";
$resul = mysql_query($account) or die('Erreur SQL !<br>'.$account.'<br>'.mysql_error()); 
$row1 = mysql_fetch_row($resul);

echo '<p> <b>Nom </b>: '.$row1[1].'</p>';
echo '<p> <b>Prenom </b>: '.$row1[2].'</p>';
echo '<p> <b>Adresse</b> : '.$row1[5].'</p>';

echo '<a href="historique.php?id='.$row1[0].'"> Historique des achats </a>'

?>
</body>
</html>