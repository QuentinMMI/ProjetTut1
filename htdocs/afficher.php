<?php
    session_start();
    header   ("Content-type: text/html; charset=UTF-8");
    if(isset($_SESSION["id"])){
    require("php/param.inc.php");
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="java/planche.js"></script>
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
                  $sql="SELECT TitrePhoto, AccesPhoto, DescriptionPhoto FROM PHOTO WHERE IdPhoto=:id ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                
                  $sql="SELECT IdUser FROM A_Publie WHERE IdPhoto=:id";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);
                
                  $sql="SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id";
                  $statement = $pdo->prepare($sql);
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
            </div>
            <p class="vote">J'aime cette publication</p>
        </main>
        <?php 
            }else if($_GET["type"]=="son"){
        ?>
        <main id="mainSon">
            <?php
            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitreSon, AccesSon, DescriptionSon, AccesMiniature FROM SON WHERE IdSon=:id ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                
                  $sql="SELECT IdUser FROM A_Publie WHERE IdSon=:id";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);
                
                  $sql="SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id";
                  $statement = $pdo->prepare($sql);
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
            </div>
            <p id="vote">J'aime cette publication</p>
        </main>
        
        
        
        
        
        
        
        <?php 
            }else if($_GET["type"]=="video"){
        ?>
        <main id="mainVideo">
            <?php
            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitreVideo, AccesVideo, DescriptionVideo, AccesMiniature FROM VIDEO WHERE IdVideo=:id ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                
                $sql="SELECT IdUser FROM A_Publie WHERE IdVideo=:id";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne2 = $statement->fetch(PDO::FETCH_ASSOC);
                
                  $sql="SELECT NomUser, PrenomUser FROM UTILISATEUR WHERE IdUser=:id";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$ligne2["IdUser"]));
                  $ligne3 = $statement->fetch(PDO::FETCH_ASSOC);
                ?>
            <h1 class="h1A">Titre : <?php echo $ligne["TitreVideo"]; ?></h1>
            <div class=divPenchee>
            <video id="video" width="550" height="430"  controls='controls' preload='auto' src="<?php echo $ligne["AccesVideo"]?>">
                <source src="<?php echo $ligne["AccesVideo"] ?>" type="video/mp4">
            </video>    
            </div>
            <div class="divPenchee2">
                <p class="descA">Description : <?php echo $ligne["DescriptionVideo"] ?></p>
                <p class="descA">De : <?php echo $ligne3["NomUser"]." ".$ligne3["PrenomUser"] ?></p>
                <p id="voteVid">J'aime cette publication</p>
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