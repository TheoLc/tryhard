<?php
 session_start();
$connect = @mysql_connect("localhost","etna","");
mysql_select_db("jv", $connect);




/*error_reporting(E_ALL);

if (isset($_GET['deconnexion'])) {
    // Initialisation de la session
    session_start();
    // On détruit toutes les variables de session
    $_SESSION = array();
    // On détruit la session
    session_destroy();
}
*/
if (isset($_POST['submit'])) { // execution uniquement apres envoi du formulaire (test si la variable POST existe)
    $login = $_POST['login']; // mise en variable du nom d'utilisateur
    $pass = ($_POST['pass']); // mise en variable du mot de passe
    // Connexion au SGBD puis à la base de données

    if (!$connect) {
        die('Impossible de sélectionner la base de données : ' . mysql_error());
    }
    
    // Recherche dans la base de l'utilisateur
    $strSQL = "SELECT * FROM `clients` WHERE `login` = '" . $login . "' AND `passwd` = '" . $pass . "';";
    $resultat = mysql_query($strSQL);
    if (mysql_num_rows($resultat) != 0) {
       
     $_SESSION['login'] = $login;
     header("Location:boutique.php");
      /*session_start();
        $ligne_resultat = mysql_fetch_array($resultat);
        $_SESSION['nom'] = $ligne_resultat['nom'];
        $_SESSION['prenom'] = $ligne_resultat['prenom'];
        mysql_free_result($resultat);
        mysql_close($connect);
        header("Location:accueil.php");
         echo "string";*/

    } else {
        mysql_free_result($resultat);
        mysql_close($connect);
        header("Location:index.php?erreur=login"); // redirection si utilisateur non reconnu
    }
}




  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="styles.css">  
    </head>
    <body>
      <header>
       <div class="hd">
          <a href="accueil.php"> <img class="logo" src="logo.png"> </a>
          <ul class="menu">
            <li> <a href="accueil.php"> Accueil </a> </li>
            <li> <a href="boutique.php"> Boutique </a> </li>
            <?php if (isset($_SESSION['login']) != 0 ){
                           ?>
            <li> <a href="#">  Mon compte </a> </li>
            <li> <a href="deco.php">  Déconnection </a> </li>
             <li> <?php echo "Bienvenue ".$_SESSION['login']; ?> </li>
                        <?php } else {?>
            <li> <a href="connect.php"> Se connecter </a> </li>
            <li> <a href="register.php"> S'inscrire </a> </li>
           <?php }?>
           <div id="who">
            <a href="weare.php"> Qui sommes nous ? </a>
        </div>
          </ul>
          <div id="searchbar">
            <form method="post" action="index.php" class="formulaire">
            <input class="champ" type="text" name="Mot" placeholder="Recherche"/><br />
            <input class="bouton" type="submit" value="Rechercher" name="submit3"/>
                </form>
        </div>
</div>
</header>
<?php   if (isset($_POST['submit3'])) {
        if (($_POST['Mot'] == "")||($_POST['Mot'] == "%")) {
// Si aucun mot clé n'a été saisi,
// le script demande à l'utilisateur
// de bien vouloir préciser un mot clé

 echo "
 Veuillez entrer un mot clé s'il vous plaît!
 <p>";

}

else {
// On selectionne les enregistrements contenant le mot clé
// dans les keywords ou le titre
 $query = "SELECT * FROM games
 WHERE name = '".$_POST['Mot']."'
 OR nickname = '".$_POST['Mot']. "'OR sort1 = '".$_POST['Mot'].
 "'OR sort2 = '".$_POST['Mot']."';";

 $result = mysql_query($query) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

 $row = mysql_fetch_row($result);

 echo '<h3> Resultat pour : '.$_POST['Mot'].'</h3>';
// Si aucun enregistrement n'est retourné,
// on affiche un message adéquat
if ($row == "0") {
 echo "
 <b>Aucun résultat ne correspond à votre recherche</b> ";

}

// Sinon, on affiche le nombre d'enregistrements correspondant
// et les résultats eux-mêmes
else {
 $query = "SELECT * FROM games
 WHERE name = '".$_POST['Mot']."'
 OR nickname = '".$_POST['Mot']."'OR sort1 = '".$_POST['Mot'].
 "'OR sort2 = '".$_POST['Mot']."';";

 $result = mysql_query($query) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

 while($row = mysql_fetch_row($result))
 {
  echo " <p><b>$row[1]</b>\n<br><a href=jeux.php?id=$row[0]>Visualiser l'article</a>\n
  <p>\n
  ";

 }
}
}
// on ferme la base
mysql_close();
}
 ?>
    <footer>
      <script type="text/javascript" src=".js"></script>
    </footer>
    </body>
</html>