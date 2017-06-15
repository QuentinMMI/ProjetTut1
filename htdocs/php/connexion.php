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
            if($userexist == 1) {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['IdUser'];
                $_SESSION['Prenom'] = $userinfo['PrenomUser'];
                $_SESSION['Nom'] = $userinfo['NomUser'];
                $_SESSION['Mail'] = $userinfo['AdresseMail'];
                $_SESSION['Date'] = $userinfo['DateNaissance'];
                echo("ok c'est bon !");
                header("Location: ../index.php#connecte");
      } else {
         echo("ok c'est bon !");
         header("Location: ../index.php#mauvaismotdepasse");
      }
   } else {
      echo("ok c'est bon !");
      header("Location: ../index.php#pasrempli");
   }
}
?>