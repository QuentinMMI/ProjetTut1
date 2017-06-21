<?php 
    session_start();
    require("../param.inc.php") ;
    $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    $pdo->query("SET NAMES utf8");
    $pdo->query("SET CHARACTER SET 'utf8'");

    if($_GET['id']==1){
        $codeHTML = 'Vous ne pouvez pas supprimer le compte administrateur.';
    }else{
    //requet sql
        $sql = $pdo -> prepare ("DELETE FROM UTILISATEUR WHERE IdUser = :Id ;");
        $sql->execute(array(":Id" => $_GET['id']));
        $codeHTML='profil supprimé';
    }

$pdo=null;

echo($codeHTML);
?>