<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");

    if ($_GET['type'] == 'photo'){
        
        //requet sql
        $sql = "SELECT PHOTO.TitrePhoto, PHOTO.DatePublication, PHOTO.AccesPhoto, PHOTO.IdPhoto, UTILISATEUR.NomUser, UTILISATEUR.PrenomUser FROM PHOTO INNER JOIN A_Publie ON PHOTO.IdPhoto = A_Publie.IdPhoto INNER JOIN UTILISATEUR ON UTILISATEUR.IdUser = A_Publie.IdUser WHERE PHOTO.IdPhoto=".$_GET['idOeuvre'].";";

        $statement = $pdo->query($sql);

        //traitement des données

        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        
        $codeHTML="<h2 id='precision' >".$oeuvre['TitrePhoto']."</h2>";
        $codeHTML=$codeHTML."<img src='".$oeuvre['AccesPhoto']."' alt='oeuvre'>";
        $codeHTML=$codeHTML."<p>Date de publication : ".$oeuvre['DatePublication']."</p>";
        $codeHTML=$codeHTML."<p>Publié par : ".mb_strtoupper($oeuvre['NomUser'])." ".($oeuvre['PrenomUser'])."</p>";
        $codeHTML=$codeHTML."<img src='images/imgPoubelle.png' alt='image poubelle' title='Supprimer cette oeuvre' id='poubelle' style='cursor:pointer' data-idOeuvre ='".$_GET['idOeuvre']."' data-type='photo' >";
            
        
    }else if ($_GET['type'] == 'son'){
        //requet sql
        $sql = "SELECT SON.TitreSon, SON.DescriptionSon, SON.AccesSon, SON.DatePublication, SON.AccesMiniature, UTILISATEUR.NomUser, UTILISATEUR.PrenomUser FROM SON INNER JOIN A_Publie ON SON.IdSon = A_Publie.IdSon INNER JOIN UTILISATEUR ON UTILISATEUR.IdUser = A_Publie.IdUser WHERE SON.IdSon=".$_GET['idOeuvre'].";";

        $statement = $pdo->query($sql);

        //traitement des données

        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        
        $codeHTML="<h2 id='precision' >".$oeuvre['TitreSon']."</h2>";
        $codeHTML=$codeHTML."<audio id='sonA' src='".$oeuvre['AccesSon']."' preload='auto'></audio>";
        $codeHTML=$codeHTML."<p>Date de publication : ".$oeuvre['DatePublication']."</p>";
        $codeHTML=$codeHTML."<p>Publié par : ".mb_strtoupper($oeuvre['NomUser'])." ".($oeuvre['PrenomUser'])."</p>";
        $codeHTML=$codeHTML."<p>Decription du trvail : ".$oeuvre['DescriptionSon']."</p>";
        $codeHTML=$codeHTML."<img src='images/imgPoubelle.png' alt='image poubelle' title='Supprimer cette oeuvre' id='poubelle' style='cursor:pointer' data-idOeuvre ='".$_GET['idOeuvre']."' data-type='son' >";
    }else{
        //requet sql
        $sql = "SELECT VIDEO.TitreVideo, VIDEO.DatePublication, VIDEO.AccesVideo, VIDEO.DescriptionVideo , VIDEO.AccesMiniature , UTILISATEUR.NomUser, UTILISATEUR.PrenomUser FROM VIDEO INNER JOIN A_Publie ON VIDEO.IdVideo = A_Publie.IdVideo INNER JOIN UTILISATEUR ON UTILISATEUR.IdUser = A_Publie.IdUser WHERE VIDEO.IdVideo=".$_GET['idOeuvre'].";";

        $statement = $pdo->query($sql);

        //traitement des données

        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        
        $codeHTML="<h2 id='precision' >".$oeuvre['TitreVideo']."</h2>";
        $codeHTML=$codeHTML."<video autoplay='0' controls='controls' preload='auto' loop='loop' src='".$oeuvre['AccesVideo']."' ><source src='".$oeuvre['AccesVideo']."' type='video/mp4'><source src='".$oeuvre['AccesVideo']."' type='video/wav'></video>";
        $codeHTML=$codeHTML."<p>Date de publication : ".$oeuvre['DatePublication']."</p>";
        $codeHTML=$codeHTML."<p>Publié par : ".mb_strtoupper($oeuvre['NomUser'])." ".($oeuvre['PrenomUser'])."</p>";
        $codeHTML=$codeHTML."<p>Decription du trvail : ".$oeuvre['DescriptionVideo']."</p>";
        $codeHTML=$codeHTML."<img src='images/imgPoubelle.png' alt='image poubelle' title='Supprimer cette oeuvre' id='poubelle' style='cursor:pointer' data-idOeuvre ='".$_GET['idOeuvre']."' data-type='video' >";
    }
    
    

    
            
    
   
    
    //fermeture de la BDD
    $pdo=null;

    echo($codeHTML);

?>