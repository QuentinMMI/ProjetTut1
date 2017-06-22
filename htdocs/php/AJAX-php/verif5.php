<?php
    session_start();
    require("../param.inc.php");
    $mail = $_SESSION["Mail"];
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    $bdd->query("SET NAMES utf8");
    $bdd->query("SET CHARACTER SET 'utf8'");
    $reqmail = $bdd->prepare("SELECT * FROM UTILISATEUR WHERE AdresseMail = ?");
    $reqmail->execute(array($mail));
    $mailexist = $reqmail->rowCount();
    if($mailexist==0){
        echo("false");
    }else{
        $mdp=sha1($_POST["mdp"]);
        $reqmdp = $bdd->prepare("SELECT MotDePasse FROM UTILISATEUR WHERE AdresseMail = ?");
        $reqmdp->execute(array($mail));
        $data = $reqmdp->fetch();
        if($data['MotDePasse']!=$mdp){
          echo"false";
        }else{
            echo"true";
        }
    }
?>