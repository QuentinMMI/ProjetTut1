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
        $statement=$bdd->prepare("SELECT IdVideo,IdSon,IdPhoto FROM A_Note WHERE IdJury=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);
    
            if($ligne["IdPhoto"]!=0){
                $statement=$bdd->prepare("SELECT NoteJury FROM PHOTO WHERE IdPhoto=:id");
                $statement->execute(array(":id"=>$ligne["IdPhoto"]));
                $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
                if($ligneBis["NoteJury"]>0){
                    $ligneBis["NoteJury"]=$ligneBis["NoteJury"]-1;
                    $statement=$bdd->prepare("UPDATE PHOTO SET NoteJury=:note WHERE IdPhoto=:id");
                    $statement->execute(array(":note"=>$ligneBis["NoteJury"],":id"=>$ligne["IdPhoto"]));
                }
            }

            $statement=$bdd->prepare("UPDATE A_Note SET IdPhoto=:photo WHERE IdJury=:id ;");
            $statement->execute(array(":photo"=>$id,":id"=>$idUser));

            $statement=$bdd->prepare("SELECT TitrePhoto FROM PHOTO WHERE IdPhoto=:id");
            $statement->execute(array(":id"=>$id));
            $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
            echo $ligne2["TitrePhoto"];

            $statement=$bdd->prepare("SELECT NoteJury FROM PHOTO WHERE IdPhoto=:id");
            $statement->execute(array(":id"=>$id));
            $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
            $ligne3["NoteJury"]=$ligne3["NoteJury"]+1;
            $statement=$bdd->prepare("UPDATE PHOTO SET NoteJury=:note WHERE IdPhoto=:id");
            $statement->execute(array(":note"=>$ligne3["NoteJury"],":id"=>$id));
    
    }
    if($type=="son"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdSon, IdPhoto, IdVideo FROM A_Note WHERE IdJury=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);

            if($ligne["IdSon"]!=0){
                $statement=$bdd->prepare("SELECT NoteJury FROM SON WHERE IdSon=:id");
                $statement->execute(array(":id"=>$ligne["IdSon"]));
                $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
                if($ligneBis["NoteJury"]>0){
                    $ligneBis["NoteJury"]=$ligneBis["NoteJury"]-1;
                    $statement=$bdd->prepare("UPDATE SON SET NoteJury=:note WHERE IdSon=:id");
                    $statement->execute(array(":note"=>$ligneBis["NoteJury"],":id"=>$ligne["IdSon"]));
                }
            }

            $statement=$bdd->prepare("UPDATE A_Note SET IdSon=:son WHERE IdJury=:id2 ;");
            $statement->execute(array(":son"=>$id,":id2"=>$idUser));

            $statement=$bdd->prepare("SELECT TitreSon FROM SON WHERE IdSon=:id");
            $statement->execute(array(":id"=>$id));
            $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
            echo $ligne2["TitreSon"];

            $statement=$bdd->prepare("SELECT NoteJury FROM SON WHERE IdSon=:id");
            $statement->execute(array(":id"=>$id));
            $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
            $ligne3["NoteJury"]=$ligne3["NoteJury"]+1;
            $statement=$bdd->prepare("UPDATE SON SET NoteJury=:note WHERE IdSon=:id");
            $statement->execute(array(":note"=>$ligne3["NoteJury"],":id"=>$id));
    }
    if($type=="video"){
        $bdd=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $statement=$bdd->prepare("SELECT IdVideo,IdSon,IdPhoto FROM A_Note WHERE IdJury=:id");
        $statement->execute(array(":id"=>$idUser));
        $ligne=$statement->fetch(PDO::FETCH_ASSOC);

            if($ligne["IdVideo"]!=0){
                $statement=$bdd->prepare("SELECT NoteJury FROM VIDEO WHERE IdVideo=:id");
                $statement->execute(array(":id"=>$ligne["IdVideo"]));
                $ligneBis=$statement->fetch(PDO::FETCH_ASSOC);
                if($ligneBis["NoteJury"]>0){
                    $ligneBis["NoteJury"]=$ligneBis["NoteJury"]-1;
                    $statement=$bdd->prepare("UPDATE SON SET NoteJury=:note WHERE IdVideo=:id");
                    $statement->execute(array(":note"=>$ligneBis["NoteJury"],":id"=>$ligne["IdVideo"]));
                }
            }

            $statement=$bdd->prepare("UPDATE A_Note SET IdVideo=:video WHERE IdJury=:id2 ;");
            $statement->execute(array(":video"=>$id,":id2"=>$idUser));

            $statement=$bdd->prepare("SELECT TitreVideo FROM VIDEO WHERE IdVideo=:id");
            $statement->execute(array(":id"=>$id));
            $ligne2=$statement->fetch(PDO::FETCH_ASSOC);
            echo $ligne2["TitreVideo"];

            $statement=$bdd->prepare("SELECT NoteJury FROM VIDEO WHERE IdVideo=:id");
            $statement->execute(array(":id"=>$id));
            $ligne3=$statement->fetch(PDO::FETCH_ASSOC);
            $ligne3["NoteJury"]=$ligne3["NoteJury"]+1;
            $statement=$bdd->prepare("UPDATE VIDEO SET NoteJury=:note WHERE IdVideo=:id");
            $statement->execute(array(":note"=>$ligne3["NoteJury"],":id"=>$id));
            
    }
    ?>