<?php

    session_start();

    header   ("Content-type: text/html; charset=UTF-8");

    if(isset($_SESSION["id"])){

    require("php/param.inc.php");

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

    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>

    <script src="java/modif.js"></script>

    <script src="lecteur/audio.min.js"></script>

</head>=

    <body>

        <header>

              <?php require("php/header.php"); ?>

        </header>

        <?php 

            if($_GET["type"]=="photo"){

        ?>

        <main id="mainPub">

            <?php

            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);

		          $pdo->query("SET NAMES utf8");

		          $pdo->query("SET CHARACTER SET 'utf8'");

                  $statement = $pdo->prepare("SELECT TitrePhoto, AccesPhoto, DescriptionPhoto FROM PHOTO WHERE IdPhoto=:id ");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);

                

                  $statement = $pdo->prepare("SELECT IdUser FROM A_Publie WHERE IdPhoto=:id");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);

                

                  $statement = $pdo->prepare("SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id");

		          $statement->execute(array(":id"=>$ligne2["IdUser"]));

                  $ligne3 = $statement->fetch(PDO::FETCH_ASSOC);

                ?>

            <h1 class="h1A">Titre : <?php echo $ligne["TitrePhoto"]; ?></h1>

            <div class="divPenchee">

                <img src="<?php echo $ligne["AccesPhoto"] ?>" alt="<?php echo $ligne['TitrePhoto'] ?>" class="imageA">

            </div>

            <div class="divPenchee2">

                <p class="descA">Description : <?php echo $ligne['DescriptionPhoto'] ?></p>

                <p class="descA">De : <?php echo $ligne3["NomUser"]." ".$ligne3["PrenomUser"] ?></p>

                <?php

                    $vote = $pdo->prepare("SELECT NotePart FROM PHOTO WHERE IdPhoto = ?");

                    $vote->execute(array($_GET['id']));

                    $nbVote = $vote->fetch();

                ?>

                <p class="descA">Nombre de votes reçus : <?php echo($nbVote["NotePart"]) ; ?></p>

            </div>

            <?php

                if($_SESSION["type"]=="participant"){

                ?>

                <p id="vote" class="vote" style="cursor:pointer">J'aime cette publication</p>

                    <script src="java/voter.js"></script>

                <?php

                }else{

                ?>

                <p id="vote" class="vote juryvote" style="cursor:pointer">J'aime cette publication</p>

                <script src="java/voterJury.js"></script>

                <?php

                }

                ?>

        </main>

        <?php 

            }else if($_GET["type"]=="son"){

        ?>

        <main id="mainSon">

            <?php

            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);

		          $pdo->query("SET NAMES utf8");

		          $pdo->query("SET CHARACTER SET 'utf8'");

                  $statement = $pdo->prepare("SELECT TitreSon, AccesSon, DescriptionSon, AccesMiniature FROM SON WHERE IdSon=:id ");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);



                  $statement = $pdo->prepare("SELECT IdUser FROM A_Publie WHERE IdSon=:id");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);

    

                  $statement = $pdo->prepare("SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id");

		          $statement->execute(array(":id"=>$ligne2["IdUser"]));

                  $ligne3 = $statement->fetch(PDO::FETCH_ASSOC);

                ?>

            <h1>Titre : <?php echo $ligne["TitreSon"]; ?></h1>

            <div class="divPenchee">

                <audio src="<?php echo $ligne["AccesSon"] ?>" preload="auto" id="audio"/>

            </div>

            <div id="divPenchee2">

                <p class="descAudio">Description : <?php echo $ligne["DescriptionSon"] ?></p>

                <p class="descAudio">De : <?php echo $ligne3["NomUser"]." ".$ligne3["PrenomUser"] ?></p>

                <?php

                    $vote = $pdo->prepare("SELECT NotePart FROM SON WHERE IdSon = ?");

                    $vote->execute(array($_GET['id']));

                    $nbVote = $vote->fetch();

                ?>

                <p class="descAudio">Nombre de votes reçus : <?php echo($nbVote["NotePart"]) ; ?></p>

            </div>

            <?php

                if($_SESSION["type"]=="participant"){

                ?>

                <p id="vote" class="voteSon" style="cursor:pointer">J'aime cette publication</p>

                    <script src="java/voter.js"></script>

                <?php

                }else{

                ?>

                <p id="vote" class="voteSon juryvote" style="cursor:pointer">J'aime cette publication</p>

                <script src="java/voterJury.js"></script>

                <?php

                }

                ?>

        </main>

        <?php 

            }else if($_GET["type"]=="video"){

        ?>

        <main id="mainVideo">

            <?php

            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);

		          $pdo->query("SET NAMES utf8");

		          $pdo->query("SET CHARACTER SET 'utf8'");

                  $statement = $pdo->prepare("SELECT TitreVideo, AccesVideo, DescriptionVideo, AccesMiniature FROM VIDEO WHERE IdVideo=:id ");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);

    

                  $statement = $pdo->prepare("SELECT IdUser FROM A_Publie WHERE IdVideo=:id");

		          $statement->execute(array(":id"=>$_GET["id"]));

                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);

        

                  $statement = $pdo->prepare("SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id");

		          $statement->execute(array(":id"=>$ligne2["IdUser"]));

                  $ligne3 = $statement->fetch(PDO::FETCH_ASSOC);

                ?>

            <h1 class="h1A">Titre : <?php echo $ligne["TitreVideo"]; ?></h1>

            <div class=divPenchee>

            <video id="videoP" autoplay='0' controls='controls' preload='auto' loop='loop' src="<?php echo $ligne["AccesVideo"]?>">

                <source src="<?php echo $ligne["AccesVideo"] ?>" type="video/mp4">

            </video>    

            </div>

            <div class="divPenchee2">

                <p class="descA">Description : <?php echo $ligne["DescriptionVideo"] ?></p>

                <p class="descA">De : <?php echo $ligne3["NomUser"]." ".$ligne3["PrenomUser"] ?></p>

                <?php

                    $vote = $pdo->prepare("SELECT NotePart FROM VIDEO WHERE IdVideo = ?");

                    $vote->execute(array($_GET['id']));

                    $nbVote = $vote->fetch();

                ?>

                <p class="descA">Nombre de votes reçus : <?php echo($nbVote["NotePart"]) ; ?></p>

                <?php

                if($_SESSION["type"]=="participant"){

                ?>

                <p id="vote" class="voteVid" style="cursor:pointer">J'aime cette publication</p>

                    <script src="java/voter.js"></script>

                <?php

                }else{

                ?>

                <p id="vote" class="voteVid juryvote" style="cursor:pointer">J'aime cette publication</p>

                <script src="java/voterJury.js"></script>

                <?php

                }

                ?>

            </div>

        </main>

        <?php 

            }

        ?>

        <footer>

            <?php require("php/footer.php"); ?>

        </footer>

        <script src="java/jquery-3.2.1.js"></script>

        <script src="java/verif.js"></script>

        <script src="java/planche.js"></script>

        <script>

          audiojs.events.ready(function() {

            var as = audiojs.createAll();

          });

        </script>

    </body>

</html>

<?php

}else{

        header("Location: publication.php");



        echo"connexion";



           }



?>