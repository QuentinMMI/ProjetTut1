<?php
    session_start();
    require("../param.inc.php");
    $id=$_POST["Id"];
    $type=$_POST["Type"];
    $idUser=$_SESSION["id"];
    if($type=="photo"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdVideo,IdSon,IdPhoto FROM A_Vote WHERE IdUser=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
       
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$id,":son"=>$ligne["IdSon"],":video"=>$ligne["IdVideo"],":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitrePhoto FROM PHOTO WHERE IdVideo=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitrePhoto"];
    }
    if($type=="son"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdSon, IdPhoto, IdVideo FROM A_Vote WHERE IdUser=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
    
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$ligne["IdPhoto"],":son"=>$id,":video"=>$ligne["IdVideo"],":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitreSon FROM SON WHERE IdVideo=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitreSon"];
    }
    if($type=="video"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdVideo,IdSon,IdPhoto FROM A_Vote WHERE IdUser=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$ligne["IdPhoto"],":son"=>$ligne["IdSon"],":video"=>$id,":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitreVideo FROM VIDEO WHERE IdVideo=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitreVideo"];
    }
    ?>