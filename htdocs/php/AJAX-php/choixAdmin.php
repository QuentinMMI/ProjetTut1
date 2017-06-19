<?php 
    session_start();
    require("../param.inc.php") ;
    $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    
    if ($_GET['type'] == 'user'){//on va afficher les utilisateurs
        $codeHTML = "<h2>Les utilisateurs</h2>";
    
    
    }else if($_GET['type'] == 'son'){ //on va afficher les sons
        $codeHTML = "<h2>Les sons</h2>";
   
    
    }else if($_GET['type'] == 'video'){ //on va afficher les vidéos
        $codeHTML = "<h2> Les vidéos</h2>";
    
    
    }else{ //on va afficher les affiches
         $codeHTML = "<h2> Les affiches</h2>";
    }
    
        
        
        
        
        
        
        
        
        
        
    //$verif = $bdd -> prepare("SELECT NomUser, PrenomUser, DateNaissance, AdresseMail FROM UTILISATEUR WHERE IdUser = :User");
    //$verif->execute(array(":User" => $_GET['idUser']));
    
    //$liste= $verif->fetch(PDO::FETCH_ASSOC);
    
    
    echo($codeHTML);

?>