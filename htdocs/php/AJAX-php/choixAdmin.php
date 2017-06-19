<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");


    
    if ($_GET['type'] == 'user'){//on va afficher les utilisateurs
        $codeHTML = "<h2>Les utilisateurs</h2>";
        
        //requet sql
        $sql = "SELECT NomUser, PrenomUser, IdUser FROM UTILISATEUR ORDER BY NomUser";

        $statement = $pdo->query($sql);

        //traitement des données

        $nom = $statement->fetch(PDO::FETCH_ASSOC);  
        
        //debut de la boucle

        while ($nom != false){
            $codeHTML = $codeHTML."<div class='boucleAdmin'><p data-User='".$nom["IdUser"]."' style='cursor:pointer'>".mb_strtoupper($nom["NomUser"])." ".$nom["PrenomUser"]."</p><img src='images/imgPoubelle.png' alt='image poubelle' title='Supprimer ce profil' ></div>";
            
            $nom = $statement->fetch(PDO::FETCH_ASSOC);
        }
    
    
    }else if($_GET['type'] == 'son'){ //on va afficher les sons
        $codeHTML = "<h2>Les sons</h2>";
   
    
    }else if($_GET['type'] == 'video'){ //on va afficher les vidéos
        $codeHTML = "<h2> Les videos</h2>";
    
    
    }else{ //on va afficher les affiches
         $codeHTML = "<h2> Les affiches</h2>";
    }
    
        
        
        
        
        
        
        
        
        
        
    //$verif = $bdd -> prepare("SELECT NomUser, PrenomUser, DateNaissance, AdresseMail FROM UTILISATEUR WHERE IdUser = :User");
    //$verif->execute(array(":User" => $_GET['idUser']));
    
    //$liste= $verif->fetch(PDO::FETCH_ASSOC);
    
    //fermeture de la BDD
    $pdo=null;

    echo($codeHTML);

?>