<?php
session_start();
    header   ("Content-type: text/html; charset=UTF-8");
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
</head>

<body>
<header>
      <?php require("php/header.php"); ?>
</header>
    <main>
        <div id="planche1" class="planche planche1">
            <h1 class="hAffiche hPub">affiCHES</h1>
            <div id="modalVoteImg">
                <!--IL FAUT DU PHP ET DU JS BORDEL DE COUILLE-->

                <img src="" alt="">
                <div>
                    <h2></h2>
                    <p></p>
                    <img src="./images/imgpoceblo.png" alt="">
                    <img src="./images/imgpoceblogri.png" alt="">
                    <img src="./images/imgpocerouj.png" alt="">
                    <img src="./images/imgpoceroujgri.png" alt="">
                </div>
            </div>
            <div id="onglets" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="contenu1">

            </div>
        </div>
        <div id="planche2" class="planche planche2">
            <h1 class="hSon hPub">Sons</h1>
            <div id="modalVoteSon">
                <!--IL FAUT DU PHP ET DU JS BORDEL DE COUILLE-->
                <img src="" alt="">
                <div>
                    <h2></h2>
                    <p></p>
                    <img src="./images/imgpoceblo.png" alt="">
                    <img src="./images/imgpoceblogri.png" alt="">
                    <img src="./images/imgpocerouj.png" alt="">
                    <img src="./images/imgpoceroujgri.png" alt="">
                </div>
            </div>
            <div id="onglets2" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="cont2">

            </div>
        </div>
        <div id="planche3" class="planche planche3">
            <h1 class="hVideo hPub">viDEos</h1>
            <!--IL FAUT DU PHP ET DU JS BORDEL DE COUILLE-->
            <img src="" alt="">
            <div>
                <h2></h2>
                <p></p>
                <img src="./images/imgpoceblo.png" alt="">
                <img src="./images/imgpoceblogri.png" alt="">
                <img src="./images/imgpocerouj.png" alt="">
                <img src="./images/imgpoceroujgri.png" alt="">
            </div>
            <div id="onglets3" class="ongletsPub">
                <button type="button" data-numero="0"></button>
                <button type="button" data-numero="1"></button>
                <button type="button" data-numero="2"></button>
                <button type="button" data-numero="3"></button>
                <button type="button" data-numero="4"></button>
                <button type="button" data-numero="5"></button>
                <button type="button" data-numero="6"></button>
                <button type="button" data-numero="7"></button>
                <button type="button" data-numero="8"></button>
                <button type="button" data-numero="9"></button>
            </div>
            <div class="contenuP" id="contenu3">

            </div>
        </div>


    </main>

    <footer>
    <?php require("php/footer.php"); ?>
</footer>
</body>
</html>