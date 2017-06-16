<?php
    session_start();
    require("param.inc.php") ;
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['valider']))
    {
        $nom = $_POST["nomF"];
        $prenom = $_POST["prenomF"];
        $age = $_POST["ageF"];
        $mail = $_POST["adresseF"];
        $id=$_SESSION["id"];
        $req="UPDATE UTILISATEUR SET ";
        $tab=array();
            $req=$req."NomUser=:nom, ";
            $tab[':nom']=$nom;
            $req=$req."PrenomUser=:prenom, ";
            $tab[':prenom']=$prenom;
            $req=$req."DateNaissance=:age, ";
            $tab[':age']=$age;
            $req=$req."AdresseMail=:mail ";
            $tab[':mail']=$mail;
        $req=$req." WHERE IdUser=:id;";
        $tab[':id']=$id;
        try{
         $requetadmin=$bdd->prepare($req);
         $requetadmin->execute($tab); 
         $requser = $bdd->prepare("SELECT * FROM UTILISATEUR WHERE IdUser = ?");
            $requser->execute(array($id));
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['IdUser'];
                $_SESSION['Prenom'] = $userinfo['PrenomUser'];
                $_SESSION['Nom'] = $userinfo['NomUser'];
                $_SESSION['Mail'] = $userinfo['AdresseMail'];
                $_SESSION['Date'] = $userinfo['DateNaissance'];
        }
        catch(PDOException $e)
        {
            echo "erreur sql: ".$e->getMessage();
        }
        
    }
    header('Location: ../index.php');
      ?>