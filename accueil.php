<?php include("index.php"); ?>
<!DOCTYPE html>
<html>
<head>
		<title>Accueil</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Cascading Style Sheets -->
		<link href="diaporama.css" rel="stylesheet" type="text/css" />
		<link href="styles.css" rel="stylesheet" type="text/css" />
		<!-- Javascript -->
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/diaporama.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
<?php $sql = 'SELECT * FROM games';
$res = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	$row = mysql_fetch_row($res);
	echo '<ul class="diaporama">
			<li><a href="jeux.php?id='.$row[0].'"><img src="img/COD.jpg" alt="Image 1" /></a></li>
			<li><a href="jeux.php?id='.$row[0].'"><img src="img/FIFA.jpg" alt="Image 2" /></a></li>
			<li><img src="img/ACS.jpg" alt="Image 3" /></li>
			<li><img src="img/WOW.jpg" alt="Image 4" /></li>
			<li><img src="img/BF4.jpg" alt="Image 5" /></li>
			<li><img src="img/JC3.jpg" alt="Image 6" /></li>
			<li><img src="img/JW.jpg" alt="Image 7" /></li>
			<li><img src="img/mario.jpg" alt="Image 8" /></li>
			<li><img src="img/MK.jpg" alt="Image 9" /></li>
			<li><img src="img/NFS.jpg" alt="Image 10" /></li>
			<li><img src="img/Starcraft.jpg" alt="Image 11" /></li>
	</ul>';
	?>
</body>
</html>