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
       
        if($ligne["IdPhoto"]!=0){
            $statement=$bdd->prepare("SELECT NotePart FROM PHOTO WHERE IdPhoto=:id");
            $statement->execute(array(":id"=>$ligne["IdPhoto"]));
            $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
            if($ligneBis["NotePart"]>0){
                $ligneBis["NotePart"]=$ligneBis["NotePart"]-1;
                $statement=$bdd->prepare("UPDATE PHOTO SET NotePart=:note WHERE IdPhoto=:id");
                $statement->execute(array(":note"=>$ligneBis["NotePart"],":id"=>$ligne["IdPhoto"]));
            }
        }
        
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$id,":son"=>$ligne["IdSon"],":video"=>$ligne["IdVideo"],":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitrePhoto FROM PHOTO WHERE IdPhoto=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitrePhoto"];
        
        $statement=$bdd->prepare("SELECT NotePart FROM PHOTO WHERE IdPhoto=:id");
        $statement->execute(array(":id"=>$id));
        $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
        $ligne3["NotePart"]=$ligne3["NotePart"]+1;
        $statement=$bdd->prepare("UPDATE PHOTO SET NotePart=:note WHERE IdPhoto=:id");
        $statement->execute(array(":note"=>$ligne3["NotePart"],":id"=>$id));
    }
    if($type=="son"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdSon, IdPhoto, IdVideo FROM A_Vote WHERE IdUser=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
    
        if($ligne["IdSon"]!=0){
            $statement=$bdd->prepare("SELECT NotePart FROM SON WHERE IdSon=:id");
            $statement->execute(array(":id"=>$ligne["IdSon"]));
            $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
            if($ligneBis["NotePart"]>0){
                $ligneBis["NotePart"]=$ligneBis["NotePart"]-1;
                $statement=$bdd->prepare("UPDATE SON SET NotePart=:note WHERE IdSon=:id");
                $statement->execute(array(":note"=>$ligneBis["NotePart"],":id"=>$ligne["IdSon"]));
            }
        }
        
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$ligne["IdPhoto"],":son"=>$id,":video"=>$ligne["IdVideo"],":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitreSon FROM SON WHERE IdSon=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitreSon"];
        
        $statement=$bdd->prepare("SELECT NotePart FROM SON WHERE IdSon=:id");
        $statement->execute(array(":id"=>$id));
        $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
        $ligne3["NotePart"]=$ligne3["NotePart"]+1;
        $statement=$bdd->prepare("UPDATE SON SET NotePart=:note WHERE IdSon=:id");
        $statement->execute(array(":note"=>$ligne3["NotePart"],":id"=>$id));
    }
    if($type=="video"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdVideo,IdSon,IdPhoto FROM A_Vote WHERE IdUser=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
        
        if($ligne["IdVideo"]!=0){
            $statement=$bdd->prepare("SELECT NotePart FROM VIDEO WHERE IdVideo=:id");
            $statement->execute(array(":id"=>$ligne["IdVideo"]));
            $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
            if($ligneBis["NotePart"]>0){
                $ligneBis["NotePart"]=$ligneBis["NotePart"]-1;
                $statement=$bdd->prepare("UPDATE SON SET NotePart=:note WHERE IdVideo=:id");
                $statement->execute(array(":note"=>$ligneBis["NotePart"],":id"=>$ligne["IdVideo"]));
            }
        }
        
        $statement=$bdd->prepare("UPDATE A_Vote SET IdUser=:id, IdPhoto=:photo, IdSon=:son, IdVideo=:video WHERE IdUser=:id2 ;");
        $statement->execute(array(":id"=>$idUser,":photo"=>$ligne["IdPhoto"],":son"=>$ligne["IdSon"],":video"=>$id,":id2"=>$idUser));
        
        $statement=$bdd->prepare("SELECT TitreVideo FROM VIDEO WHERE IdVideo=:id");
        $statement->execute(array(":id"=>$id));
        $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
        echo $ligne2["TitreVideo"];
        
        $statement=$bdd->prepare("SELECT NotePart FROM VIDEO WHERE IdVideo=:id");
        $statement->execute(array(":id"=>$id));
        $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
        $ligne3["NotePart"]=$ligne3["NotePart"]+1;
        $statement=$bdd->prepare("UPDATE VIDEO SET NotePart=:note WHERE IdVideo=:id");
        $statement->execute(array(":note"=>$ligne3["NotePart"],":id"=>$id));
    }
    ?>