<?php
    require("param.inc.php") ;
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    if(isset($_POST['submit']))
    {
        if (!empty($_POST['prenomI']) AND !empty($_POST['nomI']) AND !empty($_POST['mailI']) AND !empty($_POST['mdpI']) AND !empty($_POST['mdpIc']) AND !empty($_POST['dateI']) AND !empty($_POST['CGU']))
        {   
            $prenom = htmlspecialchars($_POST['prenomI']);
            $nom = htmlspecialchars($_POST['nomI']);
            $adresse = htmlspecialchars($_POST['mailI']);
            $mdp = sha1($_POST['mdpI']);
            $mdpC = sha1($_POST['mdpIc']);
            $age = htmlspecialchars($_POST['dateI']);
            $CGU = htmlspecialchars($_POST['CGU']);
            $mailconfirm = strlen($adresse);
            if($mailconfirm <= 255){
                if(filter_var($adresse, FILTER_VALIDATE_EMAIL)){
                    $reqmail = $bdd->prepare("SELECT * FROM UTILISATEUR WHERE AdresseMail = ?");
                    $reqmail->execute(array($adresse));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0)
                    {
                        if($mdp == $mdpC)
                        {
                            $taillemdp= strlen($mdp);
                            if($taillemdp > 6){
                                if($CGU == 1)
                                {
                                    $date=substr($age,0,4);
                                    $resultatAge= 2017 - $date;
                                    if($resultatAge >= 15)
                                    {
                                        header('Location: ../index.php#gg');
                                        $insertmbr = $bdd->prepare("INSERT INTO UTILISATEUR(PrenomUser,NomUser,MotDePasse,AdresseMail,DateNaissance) VALUES(?,?,?,?,?)");
                                        $insertmbr->execute(array($prenom,$nom,$mdp,$adresse,$age));
                                    }else{
                                        header('Location: ../index.php#limiteDage');
                                    }
                                }else{
                                    header('Location: ../index.php#nonCGU');
                                }
                            }else{
                                header('Location: ../index.php#mdpTropCourt');
                            }
                        }else{
                            header('Location: ../index.php#mdpPasIdentique');
                        }
                    }else{
                        header('Location: ../index.php#mailExistant');
                    }
                }else{
                    header('Location: ../index.php#mailIncorrecte');
                }
            }else{
                header('Location: ../index.php#mailTroplong');
            }
        }else{
            header('Location: ../index.php#pasRempli');
        }
    }else{
          
    }
?>