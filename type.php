<?php include("index.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Jeux <?php echo $_GET['console'] ?></title>
</head>
<body>
<?php $sql = 'SELECT * FROM games';
$res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo '<div id="topgame">
	<ul class="gamelist">
		<li class="colorpc"> <a href="type.php?console=PC"> PC </a> </li>
		<li class="colorps"> <a href="type.php?console=PS4"> PS4 </a> </li>
		<li class="colorone"> <a href="type.php?console=ONE"> ONE </a> </li>
		<li class="colorwii"> <a href="type.php?console=WiiU"> WiiU </a> </li>
		<li class="colords"> <a href="type.php?console=3DS"> 3DS </a> </li>
		<li class="colorvita"> <a href="type.php?console=VITA"> PSVITA </a> </li>
	</ul>
</div>';

$search = "SELECT * FROM games WHERE Console1='".$_GET['console']. "'OR Console2='".$_GET['console']."'OR Console3='".$_GET['console']. "'OR Console4='".$_GET['console']. "'OR Console5='".$_GET['console']. "'OR Console6='".$_GET['console']."' ;";
$resu = mysql_query($search) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
 while($data = mysql_fetch_assoc($resu)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    	
    echo '<li class="new"> <b>'.$data['name'].'</b> <br/>'.$data['price']."€".'<br/>';
    echo '<a href="jeux.php?id='.$data['id'].'"><img class="imgj" height="100" width="250" src="img/'.$data['nickname'].'.jpg"/> </li> </a>'; 
   // echo ' <i>date de naissance : '.$data['description'].'</i><br>';
    } 

// on ferme la connexion à mysql 
mysql_close(); 


?>

</body>
</html>