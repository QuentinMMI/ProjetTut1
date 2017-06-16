<?php 
    session_start();
    require("param.inc.php") ;
    $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    

    $verif = $bdd -> prepare("SELECT NomUser, PrenomUser, DateNaissance, AdresseMail FROM UTILISATEUR WHERE IdUser = :User");
    $verif->execute(array(":User" => $_GET['idOeuvre']));
    
    $profil= $verif->fetch(PDO::FETCH_ASSOC);

    
	
    echo($signalement->nbSignalementOeuvre);

?>