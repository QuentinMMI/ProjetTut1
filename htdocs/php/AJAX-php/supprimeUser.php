<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");

    if($_GET['id']==1){
        $codeHTML = 'Vous ne pouvez pas supprimer le compte administrateur.';
    }else{
    //requet sql => SUPPRESSION DE LA TABLE UTILISATEUR
        $sql = $pdo -> prepare ("DELETE FROM UTILISATEUR WHERE IdUser = :Id ;");
        $sql->execute(array(":Id" => $_GET['id']));
      
        
        $sql = "SELECT IdSon, IdVideo, IdPhoto FROM A_Publie WHERE IdUser =".$_GET['id'];
        $statement = $pdo->query($sql);
        
        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        
        //SUPPRESSION DES TABLE SON VIDEO ET PHOTO
        if($oeuvre['IdSon'] != 0){
            $sql = "SELECT AccesSon FROM SON WHERE IdSon =".$_GET['id'];
            $statement = $pdo->query($sql);

            $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
            unlink ("../../".$oeuvre['AccesSon']);
            
            //requet sql
            $sql = $pdo -> prepare ("DELETE FROM SON WHERE IdSon = :Id;");
            $sql->execute(array(":Id" => $oeuvre['IdSon']));
        }
        
        if ($oeuvre['IdVideo'] != 0){
            $sql = "SELECT AccesVideo FROM VIDEO WHERE IdVideo =".$_GET['id'];
            $statement = $pdo->query($sql);

            $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
            unlink ("../../".$oeuvre['AccesVideo']);
            
            //requet sql
            $sql = $pdo -> prepare ("DELETE FROM VIDEO WHERE IdVideo = :Id ;");
            $sql->execute(array(":Id" => $oeuvre['IdVideo']));
        }
        
        
        if ($oeuvre['IdPhoto'] != 0){
            $sql = "SELECT AccesPhoto FROM PHOTO WHERE IdPhoto =".$_GET['id'];
            $statement = $pdo->query($sql);

            $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
            unlink ("../../".$oeuvre['AccesPhoto']);
            
            //requet sql
            $sql = $pdo -> prepare ("DELETE FROM PHOTO WHERE IdPhoto = :Id ;");
            $sql->execute(array(":Id" => $oeuvre['IdPhoto']));
        }
        
        //requet sql => SUPPRESSION DE LA TABLE A_PUBLIE
        $sql = $pdo -> prepare ("DELETE FROM A_Publie WHERE IdUser = :Id ;");
        $sql->execute(array(":Id" => $_GET['id']));
        
        $codeHTML='profil supprimé';
    }

$pdo=null;

echo($codeHTML);
?>