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
$i = 0;
$prix = 0;
$liv = 15;
if (isset($_SESSION['login']) != 0 )
{
    $account = "SELECT id FROM clients WHERE login='".$_SESSION['login']."';";
    $resul = mysql_query($account) or die('Erreur SQL !<br>'.$account.'<br>'.mysql_error()); 
    $row1 = mysql_fetch_row($resul);
    if(isset($_POST['submit4']))
    {
        if (isset($_GET['id']))
        {
            $product = "SELECT * FROM games WHERE id='".$_GET['id']."';";
            $res = mysql_query($product) or die('Erreur SQL !<br>'.$product.'<br>'.mysql_error()); 
            $row = mysql_fetch_row($res);

            mysql_select_db('articles');    
	        $query = mysql_query("INSERT INTO articles (name, price, nickname, idc) VALUES ('".$row[1]."', '".$row[8]."', '".$row[2]."', '".$row1[0]."')");
        }
    }
    if(isset($_POST['submit5']))
    {
        if (isset($_GET['id']))
        {
            mysql_select_db('articles');
	       $query = mysql_query("DELETE FROM articles WHERE id='".$_GET['id']."' AND idc='".$row1[0]."';");
        }
    }	
}
else
{
	header("Location:connect.php");
}

$sql = "SELECT * FROM articles WHERE idc='".$row1[0]."';";
$resu = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($resu)) 
    { 
    	 echo '<p class="flo"> <b>'.$data['name'].'</b> <br/>'.$data['price']."&#8364".'<br/>
    	 <form method="post" action="addpanier.php?id='.$data['id'].'">
    	 <a href="addpanier.php?id='.$data['id'].'"><input class="bouton18" type="submit" name="submit5" value="" /></a></form>
    	 <img class="imgb" height="250" width="250" src="img/'.$data['nickname'].'.jpg"/><br/></p>';
   	
    	$prix += $data['price'];
    	$i++;
    }
    if ($i == 0)
    {
    	echo "Vous n'avez pas ajouté d'articles.";
    }
    else{
    	if ($i == 1)
    	    	echo "<p>$i article</p>";
    	    else
    	    	echo "<p>$i articles</p>";
            if ($prix <= 200) 
                  	echo "<p>Prix = $prix&#8364</p>";
            else
            {
                echo '<p>Prix = '.$prix.'&#8364 + '.$liv.'&#8364 de livraison.</p>';
                $prix = $prix + $liv;
            }
        echo     '<form method="post" action="buy.php">
        <input type="hidden" name="prix" value="'.$prix.'"/>
         <a href="buy.php"><input type="submit" name="submit6" value="Acheter" /></a></form>';
    }
?>
</body>
</html>