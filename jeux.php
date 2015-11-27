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

    echo '<b>'.$valeur['name'].'</b> <br/> <p> Prix : '.$valeur['price']."€".'</p>
     <p>Editeur : '.$valeur['editor1'].' </p><p>Description : '.$valeur['description'].' </p>
   <img class="imgb" height="300" width="220" src="img/'.$valeur['nickname'].'.jpg"/>'; 
    
   // echo ' <i>date de naissance : '.$data['description'].'</i><br>';
    

// on ferme la connexion à mysql 
mysql_close(); 


?>
</body>
</html>