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
            $codeHTML = $codeHTML."<div class='boucleAdmin'><p data-User='".$nom["IdUser"]."' class='user'style='cursor:pointer'>".mb_strtoupper($nom["NomUser"])." ".$nom["PrenomUser"]."</p><img src='images/imgPoubelle.png' alt='image poubelle' title='Supprimer ce profil' ></div>";
            
            $nom = $statement->fetch(PDO::FETCH_ASSOC);
        }
    
    
    }else if($_GET['type'] == 'son'){ //on va afficher les sons
        $codeHTML = "<h2>Les sons</h2>";
        
        //requet sql
        $sql = "SELECT IdSon, TitreSon , DatePublication, AccesSon FROM SON ORDER BY DatePublication";

        $statement = $pdo->query($sql);

        //traitement des données

        $son = $statement->fetch(PDO::FETCH_ASSOC);  
        
        //debut de la boucle
        while ($son != false){
            $codeHTML = $codeHTML."<div class='boucleAdmin oeuvre' style='cursor:pointer' data-type='son' data-IdOeuvre='".$son['IdSon']."'><img src='".$son['AccesSon']."'  ><p style='cursor:pointer' >Titre : ".$son['TitreSon']."</div>";
            
            $son = $statement->fetch(PDO::FETCH_ASSOC);
        }
   
    
    }else if($_GET['type'] == 'video'){ //on va afficher les vidéos
        $codeHTML = "<h2> Les videos</h2>";
        
            //requet sql
        $sql = "SELECT IdVideo, TitreVideo, DatePublication, AccesVideo FROM VIDEO ORDER BY DatePublication";

        $statement = $pdo->query($sql);

        //traitement des données

        $video = $statement->fetch(PDO::FETCH_ASSOC);  
        
        //debut de la boucle
             while ($video != false){
            $codeHTML = $codeHTML."<div class='boucleAdmin oeuvre' style='cursor:pointer' data-type='video'  data-IdOeuvre='".$video['IdVideo']."'><img src='".$video['AccesVideo']."' ><p style='cursor:pointer' >Titre : ".$video['TitreVideo']."</div>";
            
            $video = $statement->fetch(PDO::FETCH_ASSOC);
        }
    
    
    }else{ //on va afficher les affiches
         $codeHTML = "<h2> Les affiches</h2>";
       
            //requet sql
        $sql = "SELECT IdPhoto, TitrePhoto, DatePublication, AccesPhoto FROM PHOTO ORDER BY DatePublication";

        $statement = $pdo->query($sql);

        //traitement des données

        $photo = $statement->fetch(PDO::FETCH_ASSOC);  
        
        //debut de la boucle
             while ($photo != false){
            $codeHTML = $codeHTML."<div class='boucleAdmin oeuvre' style='cursor:pointer' data-type='photo'  data-IdOeuvre='".$photo['IdPhoto']."'><img src='".$photo['AccesPhoto']."' ><p style='cursor:pointer'>Titre : ".$photo['TitrePhoto']."</div>";
            
            $photo = $statement->fetch(PDO::FETCH_ASSOC);
        }
    }
    
   
    
    //fermeture de la BDD
    $pdo=null;

    echo($codeHTML);

?>