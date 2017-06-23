<?php
   session_start();
    header ("Content-type: text/html");
if(isset($_SESSION["id"])){
    if(isset($_GET["type"])){
?>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEFI HAWK</title>
    <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
    <script type="text/javascript" src="java/photo.js"></script>
    <script type="text/javascript" src="java/planche.js"></script>
    <script src="java/modif.js"></script>
</head>
<body>
<header>
      <?php require("php/header.php"); ?>
</header>
<main id="mainPoster"> 
<?php
        if($_GET['type']=="affiche"){    
?>
    <div id="affiche">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" enctype="multipart/form-data" action="poster.php?type=affiche#cBon" method="post">
            <label for="titreOeuvre">Titre</label>
            <input class="inputPost titreP" type="text" name="titre" placeholder="Titre de l'oeuvre" required>
            <label for="droit">Libre de droit</label>
            <input class="inputPost"  id ="droit" name="droit" type="radio" value="1">
            <label for="affiche">Déposer votre travail :</label>
            <input class="inputPost file" type="file" name="affiche" id="icone" accept=".png,.jpg" required>
            <label for="message">Description de votre travail</label>
            <textarea class="inputPost messageP" name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="validerAffiche">
        </form>
    </div>
<?php     

          if(isset($_FILES["affiche"]) && $_FILES["affiche"]["name"]!=".htaccess"){

                    require("php/param.inc.php");

                    echo("Nom du fichier : ".$_FILES["affiche"]["name"]."<br />"); 

                    echo("Nom du fichier temporaire : ".$_FILES["affiche"]["tmp_name"]."<br />"); 

                    echo("Type du fichier : ".$_FILES["affiche"]["type"]."<br />");  

                    echo("Taille du fichier : ".$_FILES["affiche"]["size"]."  octets<br />"); 

                    copy($_FILES["affiche"]["tmp_name"],"travaux/".$_FILES["affiche"]["name"]);

                    $mini="travaux/vignette/img1.png";
                    $titre=htmlspecialchars($_POST["titre"]);
                    $chemin=htmlspecialchars("travaux/".$_FILES["affiche"]["name"]);
                    $description=htmlspecialchars($_POST["description"]);
                    if(isset($_POST['droit'])){
                        $droits=$_POST["droit"];
                    }else{
                        $droits=0;
                    }

                    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
                    $bdd->query("SET NAMES utf8");
		            $bdd->query("SET CHARACTER SET 'utf8'");
                    $insertmbr = $bdd->prepare("INSERT INTO PHOTO(IdPhoto,TitrePhoto,DatePublication,AccordsDroits,AccesPhoto,DescriptionPhoto,AccesMiniature) VALUES(null,:titre,NOW(),:accords,:acces,:desc,:accesMini)");
                    $insertmbr->execute(array(":titre"=>$titre,":accords"=>$description,":acces"=>$chemin,":desc"=>$description,":accesMini"=>$mini));

                    $insertA = $bdd->prepare("SELECT LAST_INSERT_ID() FROM PHOTO");
                    $insertA->execute();
                    $dataA = $insertA->fetch();
                    $dernierId = $dataA["LAST_INSERT_ID()"];

                    $id=$_SESSION['id'];
                    $insertid = $bdd->prepare("SELECT * FROM A_Publie WHERE IdUser=:id");
                    $insertid->execute(array(":id"=>$id));
                    $data = $insertid->fetch();

                    $requette2 = "UPDATE A_Publie SET IdUser=:id, IdPhoto=:idPhoto, IdSon=:idSon, IdVideo=:idVideo WHERE IdUser=:id2 ";
                    $inserta = $bdd->prepare($requette2);
                    $inserta->execute(array(":id"=>$id,":idPhoto"=>$dernierId,":idSon"=>$data["IdSon"],":idVideo"=>$data["IdVideo"],":id2"=>$id));
          }
        }else if($_GET['type']=="son"){
?>
    <div id="son">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" enctype="multipart/form-data" action="poster.php?type=son#cBon" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost titreP" type="text" name="titreSon" placeholder="Titre de l'oeuvre" required>
            <label for="droit">Libre de droit</label>
            <input class="inputPost" id ="droitSon" name="droitSon" type="radio" value="1">
            <label for="url">Déposez le Son ici :</label>
            <input class="inputPost file" type="file" name="Son" id="Son" accept=".mp3" required>
            <label for="message">Description de votre travail</label>
            <textarea class="inputPost messageP" name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="submitSon" >
        </form>
    </div>
<?php 

    if(isset($_POST["submitSon"]) && $_FILES["Son"]["name"]!=".htaccess"){

        require("php/param.inc.php");
        $titreSon=htmlspecialchars($_POST["titreSon"]);
        $droitSon=$_POST["droitSon"];
        if($_FILES["Son"]["name"]){
            copy($_FILES["Son"]["tmp_name"],"travaux/son/".$_FILES["Son"]["name"]);
            $Son=htmlspecialchars("travaux/son/".$_FILES["Son"]["name"]);
        }

        $description=htmlspecialchars($_POST["description"]);

        echo "Le titre est : ".$titreSon;

        echo "L'url est : ".$Son;

        echo "La description est : ".$description;

        $chemin="travaux/vignette/son1.png";

        $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $insertmbr = $bdd->prepare("INSERT INTO SON(IdSon,TitreSon,DatePublication,AccordsDroits,AccesSon,DescriptionSon,AccesMiniature) VALUES(null,:titre,NOW(),:accords,:acces,:desc,:accesMini)");
        $insertmbr->execute(array(":titre"=>$titreSon,":accords"=>$droitSon,":acces"=>$Son,":desc"=>$description,":accesMini"=>$chemin));

        $insertA = $bdd->prepare("SELECT LAST_INSERT_ID() FROM SON");
        $insertA->execute();
        $dataA = $insertA->fetch();
        $dernierId = $dataA["LAST_INSERT_ID()"];

        $id=$_SESSION['id'];
        $insertid = $bdd->prepare("SELECT * FROM A_Publie WHERE IdUser=:id");
        $insertid->execute(array(":id"=>$id));
        $data = $insertid->fetch();

        $requette2 = "UPDATE A_Publie SET IdUser=:id, IdPhoto=:idPhoto, IdSon=:idSon, IdVideo=:idVideo WHERE IdUser=:id2 ";
        $inserta = $bdd->prepare($requette2);
        $inserta->execute(array(":id"=>$id,":idPhoto"=>$data["IdPhoto"],":idSon"=>$dernierId,":idVideo"=>$data["IdVideo"],":id2"=>$id));
    }
        }else if($_GET["type"]=="video"){
?>
<div id="video">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" enctype="multipart/form-data" action="poster.php?type=video#cBon" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost titreP" type="text" name="titreVid" placeholder="Titre de l'oeuvre" required>
            <label for="droitVid">Libre de droit</label>
            <input class="inputPost" id ="droitVid" name="droitVid" type="radio" value=1>
            <label for="video">Déposez le Vidéo ici :</label>
            <input class="inputPost file" type="file" name="video" id="Video" accept=".mp4,.wav" required>
            <label for="message">Description de votre travail</label>
            <textarea class="inputPost messageP" name="descriptionVid" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="submitVid">
        </form>
    </div>
<?php
        if(isset($_POST["submitVid"]) && $_FILES["video"]["name"]!=".htaccess"){

        require("php/param.inc.php");
        $titreVid=htmlspecialchars($_POST["titreVid"]);
        $droitVid=0;
        if(isset($_POST["droitVid"])){
            $droitVid=$_POST["droitVid"];
        }
        if($_FILES["video"]["name"]){
            copy($_FILES["video"]["tmp_name"],"travaux/video/".$_FILES["video"]["name"]);
            $Vid=htmlspecialchars("travaux/video/".$_FILES["video"]["name"]);
        }

        $description=htmlspecialchars($_POST["descriptionVid"]);

        echo "Le titre est : ".$titreVid;

        echo "Le chemin est : ".$Vid;

        echo "La description est : ".$description;

        $chemin="travaux/vignette/vid1.png";

        $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        
        $bdd->query("SET NAMES utf8");
        $bdd->query("SET CHARACTER SET 'utf8'");
        $insertmbr = $bdd->prepare("INSERT INTO VIDEO(IdVideo,TitreVideo,DatePublication,AccordsDroits,AccesVideo,DescriptionVideo,AccesMiniature) VALUES(null,:titre,NOW(),:accords,:acces,:desc,:accesMini)");
        $insertmbr->execute(array(":titre"=>$titreVid,":accords"=>$droitVid,":acces"=>$Vid,":desc"=>$description,":accesMini"=>$chemin));

        $insertA = $bdd->prepare("SELECT LAST_INSERT_ID() FROM VIDEO");
        $insertA->execute();
        $dataA = $insertA->fetch();
        $dernierId = $dataA["LAST_INSERT_ID()"];

        $id=$_SESSION['id'];
        $insertid = $bdd->prepare("SELECT * FROM A_Publie WHERE IdUser=:id");
        $insertid->execute(array(":id"=>$id));
        $data = $insertid->fetch();

        $requette2 = "UPDATE A_Publie SET IdUser=:id, IdPhoto=:idPhoto, IdSon=:idSon, IdVideo=:idVideo WHERE IdUser=:id2 ";
        $inserta = $bdd->prepare($requette2);
        $inserta->execute(array(":id"=>$id,":idPhoto"=>$data["IdPhoto"],":idSon"=>$data["IdSon"],":idVideo"=>$dernierId,":id2"=>$id));
    }                              
    };
?>
</main>
   <footer id="footer">
        <?php require("php/footer.php"); ?>
    </footer>
    <script src="java/jquery-3.2.1.js"></script>
    <script src="java/verif.js"></script>
</body>
</html>
<?php
           }else{
               header("Location: participer.php");
           }
    }else{
      header("Location: index.php");
    }
?>

