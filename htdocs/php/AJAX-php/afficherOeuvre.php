<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");

    if ($_GET['type'] == 'photo'){
        
        //requet sql
        $sql = "SELECT PHOTO.TitrePhoto, PHOTO.DatePublication, PHOTO.AccesPhoto, PHOTO.IdPhoto, UTILISATEUR.NomUser, UTILISATEUR.NomUser FROM PHOTO INNER JOIN A_Publie ON PHOTO.IdPhoto = A_Publie.IdPhoto INNER JOIN UTILISATEUR ON UTILISATEUR.IdUser = A_Publie.IdUser WHERE PHOTO.IdPhoto=".$_GET['idOeuvre'];

        $statement = $pdo->query($sql);

        //traitement des données

        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        
        $donnee = array('titre'=>$oeuvre['TitrePhoto'], 'datePubli'=>$oeuvre['TitrePhoto'], 'acces'=>$oeuvre['AccesPhoto'], 'nom'=>$oeuvre['NomUser'], 'prenom'=>$oeuvre['PrenomUser']);
        
    }else if ($_GET['type'] == 'son'){
        
    }else{
        
    }
    
        
    

    $codeHTML="<h2>".$donnee['titre']."</h2>";
    $codeHTML=$codeHTML."<img src='travaux/".$donnee['acces'].".png' alt='miniature de l'oeuvre'>";
    $codeHTML=$codeHTML."<p>Date de publication : ".$donnee['date']."</p>";
    $codeHTML=$codeHTML.."<p>Publié par : ".mb_strtoupper($profil['NomUser'])." ".($profil['PrenomUser'])."</p>"
            
    
   
    
    //fermeture de la BDD
    $pdo=null;

    echo($codeHTML);

?>