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

<main id="Admin" class="fondRouge">
    <div id="choixAdmin">
        <div>
            <span style="cursor:pointer" class="typeAafficher" data-type="user">Modifier le profil d'un utilisateur</span>
        </div>
        
        <div>
            <span style="cursor:pointer">Modifier/supprimer une production</span>
            <div id="sousMenu">
                <span style="cursor:pointer" class="typeAafficher" data-type="son">Modifier un son</span>
                <span style="cursor:pointer" class="typeAafficher" data-type="video">Modifier une video</span>
                <span style="cursor:pointer" class="typeAafficher" data-type="affiche">Modifier une affiche</span>
            </div>
        </div>
    </div>
    
    
    <div>
        <h1>Bonjour administrateur</h1>
        <div id="lesDonnees">
            <div class="renduBDD" id="divChoixAdmin">
                <h2>Les utilisateurs</h2>
                <?php
                //connexion a la BDD
                require ("php/param.inc.php");
                $pdo=new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;

                $pdo->query("SET NAMES utf8");
                $pdo->query("SET CHARACTER SET 'utf8'");

                //requet sql
                $sql = "SELECT NomUser, PrenomUser, IdUser FROM UTILISATEUR ORDER BY NomUser";

                $statement = $pdo->query($sql);

                //traitement des données

                $nom = $statement->fetch(PDO::FETCH_ASSOC);  

                //debut de la boucle

                while ($nom != false){
                ?>
                <div class="boucleAdmin">
                    <p data-User= "<?php echo(($nom["IdUser"])) ; ?>" class="user" style="cursor:pointer"><?php echo(mb_strtoupper($nom["NomUser"]))." ". ($nom["PrenomUser"]) ; ?></p>
                    <img src="images/imgPoubelle.png" alt="image poubelle" title="Supprimer ce profil" class="poubelle" style="cursor:pointer" >
                </div>

                <?php
                $nom = $statement->fetch(PDO::FETCH_ASSOC);
                //fin de la boucle

                }

                //fermeure BDD
                $pdo=null;
                ?>
            </div>

            <div class="renduBDD" id="zonePecision">
                <h2>Profil</h2>
                <p>Selectionnez un utilisateur.</p>

            </div>
        </div>
        <div id="popupConfirmation">
            <p>Voulez-vous vraiment supprimer ce profil?</p>
            <span id="oui" style="cursor:pointer">Oui </span>
            <span id="non" style="cursor:pointer"> Non</span>
        </div>
    </div>
    
</main>
    
<footer>
    <?php require("php/footer.php"); ?>
</footer>
    <script src="java/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="java/admin.js" type="text/javascript"></script>
</body>
</html>
