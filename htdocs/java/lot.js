(function () {
    document.addEventListener("DOMContentLoaded", commencer);

    var onglet; // permet de recupeer rapidement l'onglet selectionné
    function commencer(evt) {

        var SelectPrix = document.getElementsByClassName("lesPrix");
        for (var unPrix of SelectPrix) {
            //unPrix.addEventListener("click", reinitialiserMiseEnForme);
            unPrix.addEventListener("click", changerMiseEnForme);
        }
    }

    function reinitialiserMiseEnForme(evt) {
        document.getElementById("lesCaracDesPrix").innerHTML = "<div id='carac'><div id='caracHaut'><div><p id='dixNuit'> <span>10</span> Nuits dans un hotel cinq etoiles de Sofia, capitale historique de la Bulgarie</p><p class='textLotVoyage'>- Petit déjeuner et formule repas déjeuner/repas</p><p class='textLotVoyage'>- Un guide à disposition pour visiter la ville</p><p class='textLotVoyage'>- Une voiture personnel</p><p class='textLotVoyage'>- Un ensemble de réduction pour découvrir les musées et le patrimoine de la Bulgarie </p><p class='textLotVoyage'>- Une journée 'activité à sensation'! </p></div><div><img src='images/imgPlage.png' alt='plage de Bulgarie'></div></div><div><div><h3>Une Gopro Hero <span>5</span></h3><img src='images/imgGoproLot.png' id='goproLot' alt='image de Gorpro Hero 5'></div><div id='texteGopro'><p>- Qualité photo, haute résolution 12mpx</p><p>- Vidéo 4k</p><p> - GPS intégré</p><p> - Wifi/Bluetooth</p><p>- Résistante à l\'27 eau et aux choques</p><p</div></div>";
    }

    function changerMiseEnForme(evt) {
        if (onglet != null) {
            onglet.style.backgroundColor = '#FFD73A';
            onglet.style.color = 'white';
        }
        var lesCaracDesPrix = document.getElementById("lesCaracDesPrix");
        var idLesPrix = this.id;
        this.style.backgroundColor = 'White';
        this.style.color = 'black';
        onglet = this;
        if (idLesPrix == "1erPrix") {

            lesCaracDesPrix.classList.value = '';
            lesCaracDesPrix.classList.add('or');
            document.getElementById("lesCaracDesPrix").innerHTML = "<div id='carac'><div id='caracHaut'><div><p id='dixNuit'> <span>10</span> Nuits dans un hotel cinq etoiles de Sofia, capitale historique de la Bulgarie</p><p class='textLotVoyage'>- Petit déjeuner et formule repas déjeuner/repas</p><p class='textLotVoyage'>- Un guide à disposition pour visiter la ville</p><p class='textLotVoyage'>- Une voiture personnel</p><p class='textLotVoyage'>- Un ensemble de réduction pour découvrir les musées et le patrimoine de la Bulgarie </p><p class='textLotVoyage'>- Une journée \'activité à sensation\'! </p></div><div><img src='images/imgPlage.png' alt='image d'une plage de Bulgarie'></div></div><div><div #goPro5Prix3><h3>Une Gopro Hero <span>5</span></h3><img src='images/imgGoproLot.png' id='goproLot' alt='image de Gorpro Hero 5'></div><div id='texteGopro'><p>- Qualité photo, haute résolution 12mpx</p><p>- Vidéo 4k</p><p> - GPS intégré</p><p> - Wifi/Bluetooth</p><p>- Résistante à l'eau et aux choques</p><p>- Un stabilisateur GoPro KARMA Grip</p></div></div></div>";
        } else if (idLesPrix == "prix2") {
            lesCaracDesPrix.classList.value = '';
            lesCaracDesPrix.classList.add('argent');
            document.getElementById("lesCaracDesPrix").innerHTML = "<div id='carac'><div id='caracHaut'><div><div><h3>un appareil photo canon eos <span>80</span>d</h3><img src='images/imgCanonLot.png' alt='Un appareil photo canon, sa pochette, un objectif et une carte SD' class='titreCanon'></div><p>- HD et Full HD</p><p>- RAW et JPEG</p><p>- Carte SD, SDHC ou SDXC</p><p>- Fourni avec 2 objectifs, pochette de transport et carte SD.</p></div><div id='caracWonderbox'><h3>3 jours exceptionnel en europe</h3><div><img src='images/imgWonderbox.png' alt='image d\'une plage de Bulgarie'><div id='textWonderbox'><p>- 2 nuits avec petits déjeuners</p><p>- Pour 2 personnes</p><p>- 190 hôtels 4 à 5 dans les plus belles villes d\'Europe : Londres, Venise, Oslo, Dublin, Amsterdam…</p></div></div></div></div><div><div #goPro5Prix3><h3>Une Gopro Hero <span>5</span></h3><img src='images/imgGoproLot.png' id='goproLot' alt='image de Gorpro Hero 5'></div><div id='texteGopro'><p>- Qualité photo, haute résolution 12mpx</p><p>- Vidéo 4k</p><p> - GPS intégré</p><p> - Wifi/Bluetooth</p><p>- Résistante à l'eau et aux choques</p><p>- Un stabilisateur GoPro KARMA Grip</p></div></div></div>  ";
        } else if (idLesPrix == "prix3") {
            lesCaracDesPrix.classList.value = '';
            lesCaracDesPrix.classList.add('bronze');
            document.getElementById("lesCaracDesPrix").innerHTML = "<div id='carac'><div id='caracHaut'><div><h3>Une wonderbox : trois jours exeptionnel en europe !</h3><p>- 2 nuits avec petits déjeuners</p><p>- Pour 2 personnes</p><p>- 190 hôtels 4 à 5 dans les plus belles villes d\'Europe : Londres, Venise, Oslo, Dublin, Amsterdam…</p></div><img src='images/imgWonderboxVille.png' alt='Wonderbox et image de la bulgarie'></div></div><div id='goPro5Prix3'><div><h3>Une Gopro Hero <span>5</span></h3><img src='images/imgGoproLot.png' id='goproLot' alt='image de Gorpro Hero 5'></div><div id='texteGopro'><p>- Qualité photo, haute résolution 12mpx</p><p>- Vidéo 4k</p><p> - GPS intégré</p><p> - Wifi/Bluetooth</p><p>- Résistante à l\'27 eau et aux choques</p></div></div>";

        } else {

            lesCaracDesPrix.classList.value = '';
            lesCaracDesPrix.classList.add('or');
            document.getElementById("lesCaracDesPrix").innerHTML = "<div id='carac'><div id='caracHaut'><div><p id='dixNuit'> <span>10</span> Nuits dans un hotel cinq etoiles de Sofia, capitale historique de la Bulgarie</p><p class='textLotVoyage'>- Petit déjeuner et formule repas déjeuner/repas</p><p class='textLotVoyage'>- Un guide à disposition pour visiter la ville</p><p class='textLotVoyage'>- Une voiture personnel</p><p class='textLotVoyage'>- Un ensemble de réduction pour découvrir les musées et le patrimoine de la Bulgarie </p><p class='textLotVoyage'>- Une journée 'activité à sensation'! </p></div><div><img src='images/imgPlage.png' alt='plage de Bulgarie'></div></div><div><div><h3>Une Gopro Hero <span>5</span></h3><img src='images/imgGoproLot.png' id='goproLot' alt='image de Gorpro Hero 5'></div><div id='texteGopro'><p>- Qualité photo, haute résolution 12mpx</p><p>- Vidéo 4k</p><p> - GPS intégré</p><p> - Wifi/Bluetooth</p><p>- Résistante à l\'27 eau et aux choques</p><p</div></div>";
        }
    }
}());