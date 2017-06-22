<a href="index.php"><img id="logoAile" alt="Aile avec le logo dedans" src="images/imgLogoOmbre.png"></a>        
        <nav>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/index.php"){?>ongletSelect<?php } ?>" href="index.php">ACCUEIL</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/reglement.php"){?>ongletSelect<?php } ?>"  href="reglement.php">REGLEMENT</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/publication.php"){?>ongletSelect<?php } ?>" href="publication.php">PUBLICATIONS</a>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/aPropos.php"){?>ongletSelect<?php } ?>" href="aPropos.php">A PROPOS</a>
            <?php if(!empty($_SESSION["type"])=='participant' || !isset($_SESSION["id"])){ //le jury ne peu pas publier?>
            <a class="policeNav <?php if($_SERVER["SCRIPT_NAME"]=="/participer.php"){?>ongletSelect<?php } ?>" id="participer" href="participer.php">PARTICIPER</a>
            <?php 
                                                                             } //fin publier 
            
              if(isset($_SESSION['id']))
              {
                  if($_SESSION['id'] == 1){
              ?>
            <a class="policeNav" href="admin.php" id="connect1" style="cursor:pointer">Administration</a>
            <?php
                  }else{
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
                    <form id="contentI" action="php/modifs.php" method="post">
                        <label for="nomF">Nom</label>
                        <p><?php echo($_SESSION['Nom']) ?></p>
                        <input type="hidden" id="nomF" name="nomF" value="<?php echo($_SESSION['Nom']) ?>" required="required"/>
                        <label for="prenomF">Prenom</label>
                        <p><?php echo($_SESSION['Prenom']) ?></p>
                        <input type="hidden" id="prenomF" name="prenomF" value="<?php echo($_SESSION['Prenom']) ?>" required="required"/>
                        <?php 
                if($_SESSION['type']=='participant'){//Date de naissance seulement disponnible pour les particiapnts
                    ?>
                        <label for="ageF">Age</label>
                        <p><?php echo($_SESSION['Date']) ?></p>
                        <input type="hidden" id="ageF" name="ageF" value="<?php echo($_SESSION['Date']) ?>" required="required"/>
                        <?php } //fin de l'age ?>
                        <label for="adresseF">Adresse</label>
                        <p><?php echo($_SESSION['Mail']) ?></p>
                        <input type="hidden" id="adresseF" name="adresseF" value="<?php echo($_SESSION['Mail']) ?>" required="required"/>
                        <label for="mdpF">Mot de passe</label>
                        <p>••••••••</p>
                        <input type="hidden" id="mdpF" name="mdpF" value="" required="required"/>
                        <div id="boutonsI">
                            <a id="deconnecter" class="inter1" href="php/deconnexion.php">Déconnexion</a>
                            <span style="cursor:pointer" class="inter1" id="modifier">Modifier</span>
                            <span style="cursor:pointer" class="inter2 inter1" id="annuler">Annuler</span>
                            <input type="submit" value="valider" id="valider" name="valider" style="cursor:pointer" class="inter2 inter1" />
                        </div>
                    </form>
                </div>
            </div>
            <?php
                  }
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
                        <input type="date" id="dateI" name="dateI" required="required" value="" placeholder="aaaa/mm/jj">
                        <input type="checkbox" id="CGU" name="CGU" value="1" required="required">
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
        