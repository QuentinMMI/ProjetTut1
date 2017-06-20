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
    <script src="java/verif.js"></script>
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
            <input class="inputPost" type="text" name="titre" placeholder="Titre de l'oeuvre" required>
            <label for="droit">Libre de droit</label>
            <input class="inputPost" id ="droit" name="droit" type="radio" value="1">
            <label for="inputPost">Déposez votre affiche</label>
            <input class="inputPost" class="inputPost" type="file" name="affiche" id="icone">
            <label for="message">Description de votre travail</label>
            <textarea class="inputPost" id="messageP" name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="validerAffiche">
        </form>
    </div>
<?php     
          if(isset($_FILES["affiche"])){
                    require("php/param.inc.php");
                    echo("Nom du fichier : ".$_FILES["affiche"]["name"]."<br />"); 
                    echo("Nom du fichier temporaire : ".$_FILES["affiche"]["tmp_name"]."<br />"); 
                    echo("Type du fichier : ".$_FILES["affiche"]["type"]."<br />");  
                    echo("Taille du fichier : ".$_FILES["affiche"]["size"]."  octets<br />"); 
                    
                    copy($_FILES["affiche"]["tmp_name"],"travaux/".$_FILES["affiche"]["name"]);
                    //require("php/convertirImage85x85.inc.php");
                    //convertirImage85x85($_FILES["affiche"]["tmp_name"],"travaux/vignette/vignette_".$_FILES["affiche"]["name"]);
                    $titre=$_POST["titre"];
                    $chemin="travaux/".$_FILES["affiche"]["name"];
                    $description=$_POST["description"];
                    $droits=$_POST["droit"];
                    $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
                    $insertmbr = $bdd->prepare("INSERT INTO PHOTO(IdPhoto,TitrePhoto,DatePublication,AccordsDroits,AccesPhoto,DescriptionPhoto) VALUES(null,:titre,NOW(),:accords,:acces,:desc)");
                    $insertmbr->execute(array(":titre"=>$titre,":accords"=>$description,":acces"=>$chemin,":desc"=>$description));
          }
        }else if($_GET['type']=="son"){
?>
    <div id="son">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" enctype="multipart/form-data" action="poster.php?type=son#cBon" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost" type="text" name="titreSon" placeholder="Titre de l'oeuvre" required>
            <label for="droit">Libre de droit</label>
            <input class="inputPost" id ="droitSon" name="droitSon" type="radio" value="1">
            <label for="inputPost">Désposez une miniature pour votre son</label>
            <input class="inputPost" type="file" name="miniSon" id="miniSon">
            <label for="url">déposer le lien ici :</label>
            <input class="inputPost" type="url" name="urlSon" id="urlSon">
            <label for="message">Description de votre travail</label>
            <textarea id="messageP" class="inputPost" name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="submitSon" >
        </form>
    </div>
<?php 
    if(isset($_POST["submitSon"])){
        require("php/param.inc.php");
        $titreSon=$_POST["titreSon"];
        $droitSon=$_POST["droitSon"];
        $urlSon=$_POST["urlSon"];
        $description=$_POST["description"];
        echo "Le titre est : ".$titreSon;
        echo "L'url est : ".$urlSon;
        echo "La description est : ".$description;
        $chemin=null;
        if(isset($_FILES['miniSon'])){
            copy($_FILES["miniSon"]["tmp_name"],"travaux/vignette/".$_FILES["miniSon"]["name"]);
            $chemin="travaux/vignette/".$_FILES["miniSon"]["name"];
        }
        $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
        $insertmbr = $bdd->prepare("INSERT INTO SON(IdSon,TitreSon,DatePublication,AccordsDroits,AccesSon,DescriptionSon,AccesMiniature) VALUES(null,:titre,NOW(),:accords,:acces,:desc,:accesMini)");
        $insertmbr->execute(array(":titre"=>$titreSon,":accords"=>$droitSon,":acces"=>$urlSon,":desc"=>$description,":accesMini"=>$chemin));
    }
        }else if($_GET["type"]=="video"){
?>
<div id="video">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" action="poster.php?type=video#cBon" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost" type="text" name="titreVid" placeholder="Titre de l'oeuvre" required>
            <label for="droitVid">Libre de droit</label>
            <input class="inputPost" id ="droitVid" name="droitVid" type="radio" value="1">
            <label for="inputPost">Désposez une miniature pour votre son</label>
            <input class="inputPost" type="file" name="miniVid" id="miniVid">
            <label for="url">Déposez le lien ici :</label>
            <input class="inputPost" type="url" name="urlVid" id="urlVid">
            <label for="message">Description de votre travail</label>
            <textarea id="messageP" class="inputPost" name="descriptionVid" rows="10" cols="50" placeholder="Description" required></textarea>
            <input type="submit" value="Envoyer" style="cursor:pointer" name="submitVid">
        </form>
    </div>
<?php
        if(isset($_POST["submitVid"])){
            require("php/param.inc.php");
            $titreVid=$_POST["titreVid"];
            $droitVid=$_POST["droitVid"];
            $urlVid=$_POST["urlVid"];
            $descriptionVid=$_POST["descriptionVid"];
            echo "Le titre est : ".$titreVid;
            echo "L'url est : ".$urlVid;
            echo "La description est : ".$descriptionVid;
            $chemin=null;
            if(isset($_FILES['miniVid'])){
                copy($_FILES["miniVid"]["tmp_name"],"travaux/vignette/".$_FILES["miniVid"]["name"]);
                $chemin="travaux/vignette/".$_FILES["miniVid"]["name"];
                }
            $bdd =new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS) ;
            $insertmbr = $bdd->prepare("INSERT INTO VIDEO (IdVideo,TitreVideo,DatePublication,AccesVideo,AccordsDroits,DescriptionVideo,AccesMiniature) VALUES(null,:titre,NOW(),:acces,:accords,:desc,:accesMini)");
            $insertmbr->execute(array(":titre"=>$titreVid,":accords"=>$droitVid,":acces"=>$urlVid,":desc"=>$descriptionVid,":accesMini"=>$chemin));
        }                              
    };
?>
</main>
    
   <footer id="footer">
        <?php require("php/footer.php"); ?>
    </footer>

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