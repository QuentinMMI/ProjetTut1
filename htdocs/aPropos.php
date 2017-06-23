<?php
   session_start();
    header   ("Content-type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DEFI HAWK</title>
        <meta name="description" content="Un site concours, tentez de gagner un voyage grace à une production audiovisuelle ! Defi Hawk">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <script src="<?php if(isset($_SESSION['id'])){ ?>java/modale2.js<?php }else{ ?>java/modale.js<?php } ?>"></script>
        <script type="text/javascript" src="java/photo.js"></script>
        <script src="java/verif.js"></script>
        <script src="java/modif.js"></script>
    </head>

    <body>
        <header>
            <?php require("php/header.php"); ?>
        </header>
        <main>
            <div id="planche1" class="planche planche1">
                <h1 class="hAffiche hPub">a Propos</h1>
                <div id="onglets" class="ongletsPub">
                </div>
                <h3 class="titreAPropos">Qui sommes nous ? Passe ta souris sur nos photos pour connaitre notre rôle.</h3>
                <div id="Lequipe">
                    <div id="divMascotte" class="imgWrap imgWrap1">
                        <img id="imgMascotte" class="photoEquipe" src="images/imgMascotteTabouret.png" alt="image de mascotte">
                        <p class="text-center">Bienvenue chez Defi Hawk. Cette page est consacrée à notre équipe qui, depuis déjà plusieurs éditions, se charge de vous fournir la meilleure expérience que vous gagniez ou non ! Vous souhaitez savoir qui vous parle sur les réseaux sociaux? Qui redesign le site? Vous êtes au bon endroit! </p>
                    </div>
                    <div id="divQuentin" class="imgWrap imgWrap2">
                        <img id="imgQuentin" class="photoEquipe" src="images/imgQuentin.png" alt="image de Quentin">
                        <h2 class="text-center">Quentin Lecharpentier</h2>
                        <p class="textepresentation">Je m’occupe plus du côté design et ambiance du site (même si tout le monde s’en occupe) je gère aussi l’aspect codage du site, donc si il y a un problème c’est de ma faute :)... au fait moi c’est Quentin et j’ai 19 ans. Je sais faire la cuisine aussi…</p>
                    </div>
                    <div id="divHugo" class="imgWrap imgWrap3">
                        <img id="imgHugo" class="photoEquipe" src="images/imgHugo.png" alt="image de Hugo">
                        <h2 class="text-center">Hugo Fesselier</h2>
                        <p class="textepresentation">Moi c’est Hugo et j’ai 18 ans. Je suis développeur back-end. C’est moi qui gère l’arrière du site avec la base de donnée et l'interaction entre les pages.</p>
                    </div>
                    <div id="divJoanne" class="imgWrap imgWrap4">
                        <img id="imgJoanne" class="photoEquipe" src="images/imgJoanne.png" alt="image de Joanne">
                        <h2 class="text-center">Joanne Guillou</h2>
                        <p class="textepresentation">Hello ! Je suis Joanne, la plus jeune de l’équipe ! Je suis chargée de la communication autour de l’évènement Défi Hawk, mais aussi du développement front end et du design !:)</p>
                    </div>
                    <div id="divFlorian" class="imgWrap imgWrap5">
                        <img id="imgFlorian" class="photoEquipe" src="images/imgFlorian.png" alt="image de Florian">
                        <h2 class="text-center">Florian Uguen</h2>
                        <p class="textepresentation">Salut toi, je m’appelle Florian et je dirige le projet Défi Hawk, enfin dans les faits, c’est plutôt parce qu’il fallait quelqu'un, à côté de l’aspect administratif je suis infographiste et je travaille en étroite collaboration avec Quentin et Joanne.</p>
                    </div>
                    <div id="divThomas" class="imgWrap imgWrap6">
                        <img id="imgThomas" class="photoEquipe" src="images/imgThomas.png" alt="image de Thomas">
                        <h2 class="text-center">Thomas Furiet</h2>
                        <p class="textepresentation">Bonjour, je me présente je m’appelle Thomas Furiet j’ai 19 ans et je suis scripte et chargé de communication sur le site. Je vais me charger de toute la rédaction possible et inimaginable, vérifier l’orthographe de mes collègues. Ensuite je vais faire vivre Défi Hawk via les réseaux sociaux.</p>
                    </div>
                </div>

            </div>
            <div id="planche2" class="planche planche2">
                <h1 id="FAQ">faq</h1>
                <fieldset>
                    <legend>Comment participer?</legend>
                    <p>Pour participer c'est très simple il suffit que vous créiez un compte en cliquant sur <a href="#Modal" class="popUp">Se connecter</a>.</p>
                    <p>Une fois que vous êtes inscrits, vous pouvez poster une réalisation par catégorie (image, son, vidéo) en cliquant sur le bouton <a href="participer.php">Participer</a> dans le menu en haut.</p>
                    <p>De cette manière, vous pourrez upload votre document. Il sera soumis à un vote de la part d'un jury qui laissera un panel de personnes choisir quelles réalisations méritent de gagner les prix !</p>
                </fieldset>
                <fieldset>
                    <legend>Quel age pour participer ?</legend>
                    <p>Une des conditions pour participer c'est d'avoir plus de 16 ans. Et oui, si vous avec moins de 16 ans, il faudra attendre quelques années avant de pouvoir participer.</p>
                    <p>Pour les participants mineurs il faudra fournir une autorisation parentale.</p>
                    <p>Vous pouvez en télécharger une <a href="Doc/AutorisationPaentale.pdf" target="_blank">ici</a>.</p>
                </fieldset>
                <fieldset>
                    <legend>Comment savoir si on a gagne ?</legend>
                    <p>Pour savoir si on a gagné, c'est très simple, un email sera envoyé au gagnant, le 14 novembre. Le 15 novembre il y'aura une annonce publique sur les réseaux sociaux et sur le site pour annoncer les gagnants</p>
                </fieldset>
                <fieldset>
                    <legend>Et qu'est-ce-qu'on gagne ?</legend>
                    <p>Je vous invite à consulter la page <a href="index.php">Accueil</a> et à sélectionner l'onglet Lots.</p>
                </fieldset>
            </div>


            <!-----------------------------------CONTACT-------------------------------->
            <div id="planche3" class="planche planche3">
                <h1 id="contact">Contact</h1>
                <div id="ContenuContact">
                    <p id="question">Une question ? N'hesite pas a nous contacter ...</p>
                    <form method="post" action="php/envoiMail.php" id="FormContact">
                        <label for="nomEnvoyeur">Nom et prénom</label>
                        <input type="text" id="nomEnvoyeur" name="nomEnvoyeur" placeholder="Nom et prénom" required>
                        <label for="objet">objet</label>
                        <input id="objet" name="objet" type="text" placeholder="Objet" required>
                        <label for="mailEnvoyeur">Adresse e-mail</label>
                        <input id="mailEnvoyeur" name="mailEnvoyeur" type="email" placeholder="E-mail" required>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="10" cols="50" placeholder="Message" required></textarea>

                        <input type="submit" value="Envoyer" style="cursor:pointer">

                    </form>
                </div>
            </div>

        </main>

        <!--------------------------------------------------- FOOTER -------------------------------------------------------------->

        <footer id="footer">
            <?php require("php/footer.php"); ?>
        </footer>
    <script src="java/jquery-3.2.1.js"></script>
    <script src="java/verif.js"></script>
    <script src="java/planche.js"></script>
</body>
</html>
