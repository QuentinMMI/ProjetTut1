<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");
    
    if($_GET['type'] == 'photo'){
        
        $sql = "SELECT AccesPhoto FROM PHOTO WHERE IdPhoto =".$_GET['id'];
        $statement = $pdo->query($sql);
        
        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        unlink ("../../".$oeuvre['AccesPhoto']);
        
    //requet sql
       $sql = $pdo -> prepare ("DELETE FROM PHOTO WHERE IdPhoto = :Id ; UPDATE A_Publie SET IdPhoto = 0 WHERE IdPhoto= :Id");
        $sql->execute(array(":Id" => $_GET['id']));
    }else if($_GET['type']=='son'){
        $sql = "SELECT AccesSon FROM SON WHERE IdSon =".$_GET['id'];
        $statement = $pdo->query($sql);
        
        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        unlink ("../../".$oeuvre['AccesSon']);
        
       //requet sql
        $sql = $pdo -> prepare ("DELETE FROM SON WHERE IdSon = :Id ; UPDATE A_Publie SET IdSon = 0 WHERE IdSon= :Id");
        $sql->execute(array(":Id" => $_GET['id']));
    }else{
        $sql = "SELECT AccesVide FROM VIDEO WHERE IdVideo =".$_GET['id'];
        $statement = $pdo->query($sql);
        
        $oeuvre = $statement->fetch(PDO::FETCH_ASSOC); 
        unlink ("../../".$oeuvre['AccesVideo']);
        
        //requet sql
        $sql = $pdo -> prepare ("DELETE FROM VIDEO WHERE IdVideo = :Id ; UPDATE A_Publie SET IdVideo = 0 WHERE IdVideo= :Id");
        $sql->execute(array(":Id" => $_GET['id']));
    }
        $codeHTML='oeuvre supprimé';
    

$pdo=null;

echo($codeHTML);
?>