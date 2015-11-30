<?php
include("index.php");
$sql = "SELECT * FROM games WHERE id='".$_GET['id']."';";
$res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
$valeur = mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $valeur['name']; ?></title>
</head>
<body>
<?php

    echo '<b>'.$valeur['name'].'</b> <br/> <p> Prix : '.$valeur['price']."&#8364".'</p>
     <p>Editeur : '.$valeur['editor1'].' </p><p>Description : '.$valeur['description'].' </p>
   <img class="imgb" height="300" width="220" src="img/'.$valeur['nickname'].'.jpg"/>'; 
   echo '<form method="post" action="addpanier.php?id='.$_GET['id'].'">
   <a  href="addpanier.php?id='.$_GET['id'].'"><input class="bouton17" type="submit" name="submit4" value="" /></a></form>'; 

// on ferme la connexion à mysql 
mysql_close(); 


?>
</body>
</html>