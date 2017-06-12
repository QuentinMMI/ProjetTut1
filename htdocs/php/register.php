<?php
    require("param.inc.php") ;
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

    if(isset($_POST['submit']))
    {
            $prenom = htmlspecialchars($_POST['prenomI']);
            $nom = htmlspecialchars($_POST['nomI']);
            $adresse = htmlspecialchars($_POST['mailI']);
            $mdp = sha1($_POST['mdpI']);
            $mdpC = sha1($_POST['mdpIc']);
            $age = htmlspecialchars($_POST['dateI']);
            $CGU = htmlspecialchars($_POST['CGU']);
        
        if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['adresse']) AND !empty($_POST['mdp']) AND !empty($_POST['mdpC']) AND !empty($_POST['date']) AND !empty($_POST['CGU']))
        {
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
                                        header('Location: accueil.php#gg');
                                        $insertmbr = $bdd->prepare("INSERT INTO UTILISATEUR(PrenomUser,NomUser,MotDePasse,AdresseMail,DateNaissance) VALUES(?,?,?,?,?)");
                                        $insertmbr->execute(array($prenom,$nom,$mdp,$adresse,$age));
                                    }else{
                                        header('Location: accueil.php#limiteDage');
                                    }
                                }else{
                                    header('Location: accueil.php#nonCGU');
                                }
                            }else{
                                header('Location: accueil.php#mdpTropCourt');
                            }
                        }else{
                            header('Location: accueil.php#mdpPasIdentique');
                        }
                    }else{
                        header('Location: accueil.php#mailExistant');
                    }
                }else{
                    header('Location: accueil.php#mailIncorrecte');
                }
            }else{
                header('Location: accueil.php#mailTroplong');
            }
        }else{
            header('Location: accueil.php#pasRempli');
        }
    }else{
          
    }
?>