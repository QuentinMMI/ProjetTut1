<?php
session_start();
    header   ("Content-type: text/html; charset=UTF-8");
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
</head>=
    <body>
        <header>
              <?php require("php/header.php"); ?>
        </header>
        <?php 
            if($_GET["type"]=="photo"){
        ?>
        <main>
            <?php
            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitrePhoto, AccesPhoto, DescriptionPhoto, DatePublication FROM PHOTO WHERE IdUser=:id ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute(array(":id"=>$_GET["id"]));
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                ?>
            <p>nom : <?php echo $ligne["TitrePhoto"]; ?></p>
        </main>
        <?php 
            }else if($_GET["type"]=="son"){
        ?>
        <main>
            <p>c'est un son</p>
        </main>
        <?php 
            }else if($_GET["type"]=="video"){
        ?>
        <main>
            <p>C'est une vidéo</p>
        </main>
        <?php 
            }
        ?>
        <footer>
            <?php require("php/footer.php"); ?>
        </footer>
        <script src="java/jquery-3.2.1.js"></script>
        <script src="java/verif.js"></script>
    </body>
</html>