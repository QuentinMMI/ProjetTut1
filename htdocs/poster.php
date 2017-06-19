<?php
   session_start();
    header ("Content-type: text/html");
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
<main> 
<?php
        if($_GET['type']=="affiche"){    
?>
    <div id="affiche">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" enctype="multipart/form-data" action="poster.php?type=affiche#cBon" method="post">
            <label for="titreOeuvre">Titre</label>
            <input class="inputPost" type="text" name="titre" placeholder="Titre de l'oeuvre" required></input>
            <label for="droit">Libre de droit</label>
            <input id ="droit" name="droit" type="radio" value="1"></input>
            <input class="inputPost" type="file" name="affiche" id="icone"></input>
            <label class="inputPost" for="message">Description de votre travail</label>
            <textarea name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input class="inputPost" type="submit" value="Envoyer" style="cursor:pointer" name="validerAffiche"></input>
        </form>
    </div>
<?php     
                    require("php/param.inc.php");
                    //$_SERVEUR
                    //$_GET
                    //$_POST
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
                    echo $titre;
                    echo $chemin;
                    echo $description;
                    echo $droits;
                                     
        }else if($_GET['type']=="son"){
?>
    <div id="son">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" action="" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost" type="text" name="nomEnvoyeur" placeholder="Titre de l'oeuvre" required></input>
            <!--<label for="droit">Libre de droit</label>
            <input id ="droit" name="droit" type="radio" value="1"></input>-->
            <label for="inputPost">Désposez une miniature pour votre son</label>
            <input class="inputPost" type="file" name="icone" id="icone"></input>
            <label for="url">déposer le lien ici :</label>
            <input type="url" name="url" id="url"></
            <label class="inputPost" for="message">Description de votre travail</label>
            <textarea name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input class="inputPost" type="submit" value="Envoyer" style="cursor:pointer" ></input>
        </form>
    </div>
<?php 
        }else if($_GET["type"]=="video"){
?>
<div id="video">
        <h1>Poster votre <?php echo $_GET['type'];  ?></h1>
        <form class="formulairePoster" action="" method="post">
            <label for="inputPost">Titre</label>
            <input class="inputPost" type="text" name="titre" placeholder="Titre de l'oeuvre" required></input>
            <!--<label for="droit">Libre de droit</label>
            <input id ="droit" name="droit" type="radio" value="1"></input>-->
            <label for="inputPost">Désposez une miniature pour votre son</label>
            <input class="inputPost" type="file" name="affiche" id="affiche"></input>
            <label for="url">déposer le lien ici :</label>
            <input type="url" name="url" id="url"></
            <label class="inputPost" for="message">Description de votre travail</label>
            <textarea name="description" rows="10" cols="50" placeholder="Description" required></textarea>
            <input class="inputPost" type="submit" value="Envoyer" style="cursor:pointer">
        </form>
    </div>
<?php
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
?>
