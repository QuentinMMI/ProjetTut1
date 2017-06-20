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
    <script src="java/verif.js"></script>
    <script src="java/modif.js"></script>
    <script src="java/vignettes.js"></script>
</head>

<body>
<header>
      <?php require("php/header.php"); ?>
</header>
    <main>
        <div id="planche1" class="planche planche1">
            <h1 class="hAffiche hPub">affiCHES</h1>
            <div id="onglets" class="ongletsPub">
                <button type="button" data-numero="0"></button>
            </div>
            <div class="contenuP" id="contenu1">
                <?php
                    
                  $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitrePhoto, AccesMiniature, IdPhoto, DatePublication FROM PHOTO ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute();
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
		          while($ligne != false){
                ?>
                <div>
                    <a href="afficher.php?id=<?php echo $ligne['IdPhoto'] ?>&type=photo"><img src="<?php echo $ligne['AccesMiniature'] ?>" alt="<?php echo $ligne['TitrePhoto'] ?>"></a>
                    <p class="titre"><?php echo $ligne['TitrePhoto'] ?></p>
                </div>
                <?php
                      	$ligne = $statement->fetch(PDO::FETCH_ASSOC);
		              }
                    $pdo=null;
                ?>
            </div>
        </div>
        <div id="planche2" class="planche planche2">
            <h1 class="hSon hPub">Sons</h1>
            <div id="onglets2" class="ongletsPub">
                <button type="button" data-numero="0"></button>
            </div>
            <div class="contenuP" id="cont2">
                <?php
                    
                  $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitreSon, AccesMiniature, IdSon, DatePublication FROM SON ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute();
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
		          while($ligne != false){
                ?>
                <div>
                    <a href="afficher.php?id=<?php echo $ligne['IdSon'] ?>&type=son"><img src="<?php echo $ligne['AccesMiniature'] ?>" alt="<?php echo $ligne['TitreSon'] ?>"></a>
                    <p class="titre"><?php echo $ligne['TitreSon'] ?></p>
                </div>
                <?php
                      	$ligne = $statement->fetch(PDO::FETCH_ASSOC);
		              }
                    $pdo=null;
                ?>    
            </div>
        </div>
        <div id="planche3" class="planche planche3">
            <h1 class="hVideo hPub">Video</h1>
            <div id="onglets3" class="ongletsPub">
                <button type="button" data-numero="0"></button>
            </div>
            <div class="contenuP" id="contenu3">
                    <?php
                    
                  $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
		          $pdo->query("SET NAMES utf8");
		          $pdo->query("SET CHARACTER SET 'utf8'");
                  $sql="SELECT TitreVideo, AccesMiniature, IdVideo, DatePublication FROM VIDEO ";
                  $statement = $pdo->prepare($sql);
		          $statement->execute();
                  $ligne = $statement->fetch(PDO::FETCH_ASSOC);
		          while($ligne != false){
                ?>
                <div>
                    <a href="afficher.php?id=<?php echo $ligne['IdVideo'] ?>&type=video"><img src="<?php echo $ligne['AccesMiniatue'] ?>" alt="<?php echo $ligne['TitreVideo'] ?>"></a>
                    <p class="titre"><?php echo $ligne['TitreVideo'] ?></p>
                </div>
                <?php
                      	$ligne = $statement->fetch(PDO::FETCH_ASSOC);
		              }
                    $pdo=null;
                ?>
            </div>
        </div>
    </main>

    <footer>
    <?php require("php/footer.php"); ?>
</footer>
</body>
</html>