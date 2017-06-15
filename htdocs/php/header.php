<a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/index.php"){?>ongletSelect<?php } ?>" href="index.php">ACCUEIL</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/reglement.php"){?>ongletSelect<?php } ?>"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/publication.php"){?>ongletSelect<?php } ?>" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/aPropos.php"){?>ongletSelect<?php } ?>" href="aPropos.php">A PROPOS</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/participer.php"){?>ongletSelect<?php } ?>" id="participer" href="participer.php">PARTICIPER</a>
            <?php
              if(isset($_SESSION['id']))
              {
              ?>
            <a class="policeNav" id="connect1" style="cursor:pointer">Mon Compte</a>
            </nav>
            <div id="Modal2" class="modal2">
                <div id="sortir">
                </div>
                <div class="modal-content2">
                    <h1>Bienvenue !</h1>
                    <div id="principI">
                        <p><?php echo($_SESSION['Nom']." ".$_SESSION['Prenom']) ?></p>
                        <img id="photoIdentite" src="images/imgPhotoVierge.png" alt="photo de profil">
                    </div>
                    <div id="contentI">
                        <h2>Nom</h2>
                        <div>
                            <p><?php echo($_SESSION['Nom']) ?></p>
                        </div>
                        <h2>Prenom</h2>
                        <div>
                            <p><?php echo($_SESSION['Prenom']) ?></p>
                        </div>
                        <h2>Age</h2>
                        <div>
                            <p><?php echo($_SESSION['Date']) ?></p>
                        </div>
                        <h2>Adresse</h2>
                        <div>
                            <p><?php echo($_SESSION['Mail']) ?></p>
                        </div>
                        <h2>Mot de passe</h2>
                        <div>
                            <p>xXxXxXxXx</p>
                        </div>
                    </div>
                    <div id="boutonsI">
                        <a id="deconnecter" href="php/deconnexion.php">Déconnexion</a>
                        <a id="modifier" href="">Modifier</a>
                    </div>
                </div>
            </div>
            <?php
              }else
              {
              ?>
            <a class="policeNav" id="btnCo" style="cursor:pointer">Se connecter</a>
            </nav>
            <div id="Modal" class="modal">
            <div class="modal-content">
                <div id="divClose">
                <a id="close" style="cursor:pointer">fermer</a>
                </div>
                <div id="connexion">
                    <h1>ConnExiON</h1>
                    <form action="php/connexion.php" method="post">
                        <label for="mailC">Mail</label>
                        <input type="text" id="mailC" name="mailC" required="required">
                        <label for="mdpC">Mot De Passe</label>
                        <input type="password" id="mdpC" name="mdpC" required="required">
                        <input type="submit" value="OK !" id="submitC" name="submitC" style="cursor:pointer"/>
                    </form>
                </div>
                <div id="inscrip">
                    <form action="php/register.php" method="post">
                        <label for="prenomI">Prénom</label>
                        <input type="text" id="prenomI" name="prenomI" required="required" size="30" pattern="[a-zA-Z '-]{2,}" title="Cette zone ne doit contenir  que les caractères alphabétiques,l'espace, l'apostrophe ou le tiret.">
                        <label for="nomI">Nom</label>
                        <input type="text" id="nomI" name="nomI" required="required" size="30" pattern="[a-zA-Z '-]{2,}" title="Cette zone ne doit contenir  que les caractères alphabétiques,l'espace, l'apostrophe ou le tiret.">
                        <label for="mailI">Mail</label>
                        <input type="email" id="mailI" name="mailI" required="required">
                        <label for="mdpI">Mot De Passe</label>
                        <input type="password" id="mdpI" name="mdpI" required="required" minlength="5">
                        <label for="mdpIc">Confirmer</label>
                        <input type="password" id="mdpIc" name="mdpIc" required="required" minlength="5">
                        <label for="dateI">Date de naissance</label>
                        <input type="date" id="dateI" name="dateI" required="required" value="">
                        <input type="checkbox" id="CGU" name="CGU" value="1">
                        <label for="CGU">Accepter les <a href="mentionsLegales.php">CGU</a></label>
                        <input type="submit" value="Valider" id="submit" name="submit" style="cursor:pointer"/>
                    </form>
                    <h1>S'InsCrirE</h1>
                </div>
            </div>
        </div>
            <?php
              }
              ?>
        