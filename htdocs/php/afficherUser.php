<?php 
    session_start();
    require("param.inc.php") ;
    $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    

    $verif = $bdd -> prepare("SELECT NomUser, PrenomUser, DateNaissance, AdresseMail FROM UTILISATEUR WHERE IdUser = :User");
    $verif->execute(array(":User" => $_GET['idUser']));
    
    $profil= $verif->fetch(PDO::FETCH_ASSOC);
    
    $codeHTML = "<h2>".mb_strtoupper($profil['NomUser'])." ".($profil['PrenomUser'])."</h2>" ;
    $codeHTML = $codeHTML."<p>Nom : ".$profil['NomUser']."</p>";
    $codeHTML = $codeHTML."<p>Prénom : ".$profil['PrenomUser']."</p>";
	$codeHTML = $codeHTML."<p>Date de naissance : ".$profil['DateNaissance']."</p>";
	$codeHTML = $codeHTML."<p>Adresse mail : ".$profil['AdresseMail']."</p>";
    echo($codeHTML);

?>