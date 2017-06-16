<?php 
    session_start();
    require("param.inc.php") ;
    $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    

    $verif = $bdd -> prepare("SELECT NomUser, PrenomUser, DateNaissance, AdresseMail FROM UTILISATEUR WHERE IdUser = :User");
    $verif->execute(array(":User" => $_GET['idUser']));
    
    $profil= $verif->fetch(PDO::FETCH_ASSOC);
    
    $codeHTML = "<h2>".UPPER($profil['NomUser']." ".$profil['PrenomUser'];
	
    echo($codeHTML);

?>