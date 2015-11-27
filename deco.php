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

					$location = 'index.php';
					if(isset($_SERVER['HTTP_REFERER'])){
						$location = filter_var($_SERVER['HTTP_REFERER'],FILTER_SANITIZE_STRING);
						}
						header('Location: '.$location);
					?>
</body>
</html>
