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
            <form action="" class="formulaire">
            <input class="champ" type="text" value="Recherche"/><br />
            <input class="bouton" type="button" value="Rechercher" />
                </form>
        </div>
</div>
</header>
    <footer>
      <script type="text/javascript" src=".js"></script>
    </footer>
    </body>
</html>