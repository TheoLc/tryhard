<?php include("index.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<?php 
					session_start();
					session_destroy();
				
					$location = 'accueil.php';
					header('Location: '.$location);
					?>
</body>
</html>
