<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");
    
    if($_GET['type'] == 'photo'){
    //requet sql
        $sql = $pdo -> prepare ("DELETE FROM PHOTO WHERE IdPhoto = :Id ; UPDATE A_Publie SET IdPhoto = 0 WHERE IdPhoto= :Id");
        $sql->execute(array(":Id" => $_GET['id']));
    }else if($_GET['type']=='son'){
       
    }else{
        
    }
        $codeHTML='oeuvre supprimé';
    

$pdo=null;

echo($codeHTML);
?>