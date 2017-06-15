<?php
session_start();
    header   ("Content-type: text/html; charset=UTF-8");
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="administration" content="administration des production et des utilisateurs du Défi Hawk.">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
</head>
<body>
<header>
      <?php require("php/header.php"); ?>
</header>

<main id="Admin" class="fondJaune">
    <nav id="navAdmin">
        <ul>
            <li>
                <span style="cursor:pointer">Supprimer un utilisateur</span>
            </li>

            <li>
                <span style="cursor:pointer">Modifier le profil d'un utilisateur</span>
                <ul class="sousMenu">
                    <li style="cursor:pointer">Modifier le nom</li>
                    <li style="cursor:pointer">Modifier le prenom</li>
                    <li style="cursor:pointer">Modifierl'age</li>
                    <li style="cursor:pointer">Modifier le mot de passe</li>
                    <li style="cursor:pointer">Modifier le photo de profil</li>
                </ul>
            </li>
            
            <li>
                <span style="cursor:pointer">Supprimer une production</span>
                <ul class="sousMenu">
                    <li style="cursor:pointer">Voir/supprimer une musique</li>
                    <li style="cursor:pointer">Voir/supprimer une video</li>
                    <li style="cursor:pointer">Voir/supprimer une affiche</li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <div>
        <h1>Bonjour administrateur</h1>
        <div id="renduBDD">
            <h2>Vos derniere modification</h2>
            <?php
            //connexion a la BDD
            require ("php/param.inc.php");
            $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

            $pdo->query("SET NAMES utf8");
            $pdo->query("SET CHARACTER SET 'utf8'");
            
            //requet sql
            $sql = "SELECT NomUser FROM UTILISATEUR";
            
            $statement = $pdo->query($sql);
            
            //traitement des données
            
            $nom = $statement->fetch(PDO::NUM);
            
            //debut de la boucle
            
            while($nom != false){
            ?>
            
            <p>nom : <?php echo ($nom)  ; ?></p>
            
            <?php
            //fin de la boucle
            $nom = $statement->fetch(PDO::NUM);
            }
            
            //fermeure BDD
            $pdo=null;
            ?>
        </div>
    </div>
    
</main>
    
<footer>
    <?php require("php/footer.php"); ?>
</footer>