<?php
    session_start();
    require("param.inc.php") ;
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    if(isset($_POST['valider']))
    {
        $nom = addslashes($_POST["nomF"]);
        $prenom = addslashes($_POST["prenomF"]);
        $age = addslashes($_POST["ageF"]);
        $mail = addslashes($_POST["adresseF"]);
        $id=addslashes($_SESSION["id"]);
        $req="UPDATE UTILISATEUR SET ";
        $tab[]="";
        if($_POST['nomF']!=$_SESSION['Nom']){
            $req=$req."Nom = :nom, ";
            $tab[':nom']=$nom;
        };
        if($_POST['prenomF']!=$_SESSION['Prenom']){
            $req=$req."Prenom = :prenom, ";
            $tab[':prenom']=$prenom;
        };
        if($_POST['ageF']!=$_SESSION['Date']){
            $req=$req."Date = :date, ";
            $tab[':date']=$age;
        };
        if($_POST['adresseF']!=$_SESSION['Mail']){
            $req=$req."Mail = :mail, ";
            $tab[':mail']=$mail;
        };
        $taille=strlen($req)-2;
        $verif=substr($req,$taille,1);
        if($verif==","){
            $req=substr($req,0,$taille);
        };
        $req=$req." WHERE IdUser = :id;";
        $tab[':id']=$id;
        $requetadmin=$bdd->prepare($req);
        $requetadmin->execute($tab);
    }else{
        header('Location: index.php');
    }
      ?>