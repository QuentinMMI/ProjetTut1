<?php
    session_start();
    require("../param.inc.php");
    $mail = $_POST["mail"];
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    $reqmail = $bdd->prepare("SELECT * FROM UTILISATEUR WHERE AdresseMail = ?");
    $reqmail->execute(array($mail));
    $mailexist = $reqmail->rowCount();
    if($mailexist==0){
        echo("true");
    }else{
        echo("false");
    }
?>