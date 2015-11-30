<?php include("index.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Historique</title>
</head>
<body>
	<h3 style="text-decoration:underline"> Historique des achats </h3>
<?php
$account = "SELECT * FROM historique WHERE idc='".$_GET['id']."';";
$resul = mysql_query($account) or die('Erreur SQL !<br>'.$account.'<br>'.mysql_error()); 


while($row1 = mysql_fetch_row($resul)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    	
    echo '<li> <b>'.$row1[1].'</b> <br/>'.$row1[2]."&#8364".'<br/>';
    } 

?>
</body>
</html>