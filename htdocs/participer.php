<?php
session_start();
    header("Content-type: text/html; charset=UTF-8");
    require("php/param.inc.php");
    if(isset($_SESSION["id"])){
        $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $insertmbr = $bdd->prepare("SELECT * FROM A_Publie WHERE IdUser=:id");
        $insertmbr->execute(array(":id"=>$_SESSION["id"]));
        $data = $insertmbr->fetch();
        if($data["IdPhoto"]!=0){
            $inserta = $bdd->prepare("SELECT AccesMiniature FROM PHOTO WHERE IdPhoto=:id");
            $inserta->execute(array(":id"=>$data["IdPhoto"]));
            $dataA = $inserta->fetch();
        }
        if($data["IdSon"]!=0){
            $inserts = $bdd->prepare("SELECT AccesMiniature FROM SON WHERE IdSon=:id");
            $inserts->execute(array(":id"=>$data["IdSon"]));
            $dataS = $inserts->fetch();
        }
        if($data["IdVideo"]!=0){
            $insertv = $bdd->prepare("SELECT AccesMiniature FROM VIDEO WHERE IdVideo=:id");
            $insertv->execute(array(":id"=>$data["IdVideo"]));
            $dataV = $insertv->fetch();
        }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DEFI HAWK</title>
        <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="java/planche.js"></script>
        <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
        <script src="java/modif.js"></script>
    </head>
    <body>
        <header>
            <?php require("php/header.php"); ?>
        </header>

        <main id="mainParticiper">
            <div>
                <h1 id="publications">Mes publications</h1>

                <p id="textPubli">Pour participer, choisi au moins une catégorie puis clique sur une des images ci-dessous. Tu peux participer une seule fois dans chaque catégorie</p>
                <div id="lesIcones">
                    <div class="divAffiche">
                        <a href="<?php if($data["IdPhoto"]==0){ ?>poster.php?type=affiche<?php }else{ ?>afficher.php?id=<?php echo $data["IdPhoto"]."&type=photo"; }; ?>">
                        <img class="depot" src="<?php if($data["IdPhoto"]==0){ ?>travaux/vignette/img1.png<?php }else{echo $dataA["AccesMiniature"];}; ?>" alt="image de l'affiche">
                    </a>
                        <img class="modifier" src="images/imgPoubelle.png" alt="image poubelle" data-type="photo" data-idoeuvre="<?php echo($data[" IdPhoto "]) ; ?>" title='supprimer ma production'>
                    </div>
                    <div class="divAffiche">
                        <a href="<?php if($data["IdSon"]==0){ ?>poster.php?type=son<?php }else{ ?>afficher.php?id=<?php echo $data["IdSon"]."&type=son"; }; ?>">
                        <img class="depot" src="<?php if($data["IdSon"]==0){ ?>travaux/vignette/son1.png<?php }else{echo $dataS["AccesMiniature"];}; ?>" alt="image de l'affiche">
                    </a>
                        <img class="modifier" src="images/imgPoubelle.png" alt="image poubelle" data-type="son" data-idoeuvre="<?php echo($data["IdSon"]) ; ?> " title='supprimer ma production'>
                    </div>
                    <div class="divAffiche">
                        <a href="<?php if($data["IdVideo"]==0){ ?>poster.php?type=video<?php }else{ ?>afficher.php?id=<?php echo $data["IdVideo"]."&type=video&"; }; ?>">
                        <img class="depot" src="<?php if($data["IdVideo"]==0){ ?>travaux/vignette/vid1.png<?php }else{echo $dataV["AccesMiniature"];}; ?>" alt="image de l'affiche">
                    </a>
                        <img class="modifier" src="images/imgPoubelle.png" alt="image poubelle" data-type="video" data-idoeuvre="<?php echo($data[" IdVideo "]) ; ?>" title='supprimer ma production'>
                    </div>
                </div>
            </div>
            <div id="popupConfirmation">
                <p>Voulez-vous vraiment supprimer ce profil?</p>
                <span id="oui" style="cursor:pointer">Oui </span>
                <span id="non" style="cursor:pointer"> Non</span>
            </div>

        </main>
        <footer>
            <?php require("php/footer.php"); ?>
        </footer>
        <script src="java/jquery-3.2.1.js"></script>
        <script src="java/verif.js"></script>
        <script src="java/participer.js"></script>
    </body>

    </html>
    <?php
    }else{
        echo"connexion";
        header("Location: index.php");
    }
    ?>
