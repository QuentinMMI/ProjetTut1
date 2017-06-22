 <?php
    session_start();
    require("param.inc.php") ;
    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
    if(isset($_POST['submitC'])) {
        if(!empty($_POST['mailC']) AND !empty($_POST['mdpC'])) {
            $mailconnect = htmlspecialchars($_POST['mailC']);
            $mdpconnect = sha1($_POST['mdpC']);
            $requser = $bdd->prepare("SELECT * FROM UTILISATEUR WHERE AdresseMail = ? AND MotDePasse = ? ");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1) {//test si c'est un user
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['IdUser'];
                $_SESSION['Prenom'] = $userinfo['PrenomUser'];
                $_SESSION['Nom'] = $userinfo['NomUser'];
                $_SESSION['Mail'] = $userinfo['AdresseMail'];
                $_SESSION['Date'] = $userinfo['DateNaissance'];
                $_SESSION['type'] = 'participant';
                echo("ok c'est bon !");
                header("Location: ../index.php#connecte");
            
            
            }else{ //test si c'est un jury
                $mailconnect = htmlspecialchars($_POST['mailC']);
                $mdpconnect = sha1($_POST['mdpC']);
                $requser = $bdd->prepare("SELECT * FROM JURY WHERE AdresseMail = ? AND MotDePasse = ? ");
                $requser->execute(array($mailconnect, $mdpconnect));
                $userexist = $requser->rowCount();
                if($userexist == 1) {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['IdJury'];
                    $_SESSION['Prenom'] = $userinfo['NomJury'];
                    $_SESSION['Nom'] = $userinfo['PrenomJury'];
                    $_SESSION['Mail'] = $userinfo['AdresseMail'];
                    $_SESSION['type'] = 'jury';
                    echo("ok c'est bon !");
                    header("Location: ../index.php#connecte");
                
                } else { //message d'erreur si c'est ni l'un ni l'autre
                 echo("ok c'est bon !");
                 header("Location: ../index.php#mauvaismotdepasse");
                }
            }
            
   } else {
      echo("ok c'est bon !");
      header("Location: ../index.php#pasrempli");
   }
}
?>