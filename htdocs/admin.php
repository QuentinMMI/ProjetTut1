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
    <script src="java/admin.js" type="text/javascript"></script>
</head>
<body>
<header>
      <?php require("php/header.php"); ?>
</header>

<main id="Admin" class="fondJaune">
    <div id="choixAdmin">
        <div>
            <span style="cursor:pointer">Modifier le profil d'un utilisateur</span>
        </div>
        
        <div>
            <span style="cursor:pointer">Modifier/supprimer une production</span>
            <div id="sousMenu">
                <span>Modifier un son</span>
                <span>Modifier une video</span>
                <span>Modifier une affiche</span>
            </div>
        </div>
    </div>
    
    
    <div>
        <h1>Bonjour administrateur</h1>
        <div id="lesDonnees">
            <div class="renduBDD">
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
                    <p data-User= "<?php echo(($nom["IdUser"])) ; ?>" style="cursor:pointer"><?php echo mb_strtoupper(($nom["NomUser"]))." ". ($nom["PrenomUser"]) ; ?></p>
                    <img src="images/imgPoubelle.png" alt="image poubelle" title="Supprimer ce profil" >
                </div>

                <?php
                $nom = $statement->fetch(PDO::FETCH_ASSOC);
                //fin de la boucle

                }

                //fermeure BDD
                $pdo=null;
                ?>
            </div>

            <div class="renduBDD" id="profilUser">
                <h2>Profil</h2>
                <p>Selectionnez un utilisateur.</p>

            </div>
        </div>
    </div>
    
</main>
    
<footer>
    <?php require("php/footer.php"); ?>
</footer>
</body>
</html>
