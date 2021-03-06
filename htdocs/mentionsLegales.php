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
        <script src="java/modif.js"></script>
    </head>

    <body>
        <header>
            <?php require("php/header.php"); ?>
        </header>
        <main>
            <div class="tableMention">
                <ul class="menu" id="patateOfruit">
                    <li class="title">
                        <a href="#art0">Informations legales</a>
                        <ul class="sousMenu">
                            <li><a href="#art1">1. Presentation du site</a></li>
                            <li><a href="#art2">2. Conditions generales d’utilisation du site et des services proposes.</a></li>
                            <li><a href="#art3">3. Description des services fournis.</a></li>
                            <li><a href="#art4">4. Limitations contractuelles sur les donnees techniques</a></li>
                            <li><a href="#art5">5. Propriete intellectuelle et contrefaçons</a></li>
                            <li><a href="#art6">6. Limitations de responsabilite</a></li>
                            <li><a href="#art7">7. Gestion des donnees personnelles</a></li>
                            <li><a href="#art8">8. Liens hypertextes et cookies</a></li>
                            <li><a href="#art9">9. Droit applicable et attribution de juridiction</a></li>
                            <li><a href="#art10">10. Les principales lois concernées</a></li>
                            <li><a href="#art11">11. Lexique</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu" id="patateOsel">
                    <li class="title">
                        <a href="#artDeux0">Regles du concours</a>
                        <ul class="sousMenu">
                            <li><a href="#artDeux1">1.Conditions de participation</a></li>
                            <li><a href="#artDeux2">2. Validite d’une production</a></li>
                            <li><a href="#artDeux3">3. Conditions de validite d’une production consideree comme gagnante</a></li>
                            <li><a href="#artDeux4">4.Déroulement du concours</a></li>
                            <li><a href="#artDeux5">5. Jury</a></li>
                            <li><a href="#artDeux6">6. Procedure de remise de prix</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="blanc" id="mentionsLegales">
                <div class="infoLegal">
                    <h2 id="art0">Informations legales</h2>
                    <h3 id="art1">1. Presentation du site.</h3>
                    <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                    <p><strong>Propriétaire</strong> : Defi Hawk – Sarl – 52 Rue des Docteurs Calmette et Guérin, 53000 Laval
                        <br />
                        <strong>Créateur</strong> : <a href="https://www.defi.hawk">Defi Hawk</a>
                        <br />
                        <strong>Responsable publication</strong> : Defi Hawk – defi.hawk@gmail.com
                        <br /> Le responsable publication est une personne physique ou une personne morale.
                        <br />
                        <strong>Webmaster</strong> : Defi Hawk – https://www.defi hawk
                        <br />
                        <strong>Hébergeur</strong> : Laval – Laval
                        <br /> Crédits : les mentions légales ont été générées et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/generateur-de-mentions-legales/">Générateur de mentions légales</a></p>
                </div>

                <h3 id="art2">2. Conditions generales d’utilisation du site et des services proposes</h3>
                <p>L’utilisation du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> sont donc invités à les consulter de manière régulière.</p>
                <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Defi Hawk, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                <p>Le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> est mis à jour régulièrement par Defi Hawk. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                <h3 id="art3">3. Description des services fournis</h3>
                <p>Le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
                <p>Defi Hawk s’efforce de fournir sur le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                <p>Tous les informations indiquées sur le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                <h3 id="art4">4. Limitations contractuelles sur les donnees techniques</h3>
                <p>Le site utilise la technologie JavaScript.</p>
                <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
                <h3 id="art5">5. Propriete intellectuelle et contrefacons</h3>
                <p>Defi Hawk est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
                <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Defi Hawk.</p>
                <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                <h3 id="art6">6. Limitations de responsabilite</h3>
                <p>Defi Hawk ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://www.defi.hawk.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                <p>Defi Hawk ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a>.</p>
                <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Defi Hawk se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Defi Hawk se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                <h3 id="art7">7. Gestion des donnees personnelles</h3>
                <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                <p>A l'occasion de l'utilisation du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
                <p> En tout état de cause Defi Hawk ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> l’obligation ou non de fournir ces informations.</p>
                <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                <p>Aucune information personnelle de l'utilisateur du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Defi Hawk et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a>.</p>
                <p>Le site susnommé est déclaré à la CNIL sous le numéro 000000000000000000.</p>
                <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
                <h3 id="art8">8. Liens hypertextes et cookies</h3>
                <p>Le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Defi Hawk. Cependant, Defi Hawk n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                <p>La navigation sur le site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
                <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
                <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
                <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée. Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour désactiver les cookies.</p>
                <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
                <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences. Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

                <h3 id="art9">9. Droit applicable et attribution de juridiction</h3>
                <p>Tout litige en relation avec l’utilisation du site <a href="http://https://www.defi.hawk.com/" title="Defi Hawk - https://www.defi.hawk.com">https://www.defi.hawk.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
                <h3 id="art10">10. Les principales lois concernees</h3>
                <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
                <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
                <h3 id="art11">11. Lexique</h3>
                <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
                <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>


                <h2 id="artDeux0">Regles du concours</h2>

                <h3 id="artDeux1">1.Conditions de participation</h3>
                <p>Vous devez avoir 15 ans au minimum pour pouvoir concourir.</p>
                <p>Si vous êtes mineur, il vous est expréssement demandé de faire signer une autorisation écrite à votre responsable légal. Dans le cas où vous seriez amené à remporter un prix, cette autorisation de participation vous sera demandée pour valider votre victoire et la remise des prix correspondants.</p>
                <p><a href="Doc/AutorisationPaentale.pdf" target="_blank">Ci-joint</a>, le formulaire d’autorisation à remettre à votre responsable légal.</p>

                <h3>1.1 Conditions de participation</h3>
                <p>Vous attestez de la véracité des informations personnelles et confidentielles que vous mettez à disposition de la société DéfiHawk.</p>
                <p>Vous devez disposer d’une adresse e-mail valide dont vous affirmez être l’auteur et le dépositaire des informations légales correspondantes.</p>
                <p>En cas de victoire, ces informations personnelles (dont votre adresse e-mail) nous permettont de vous contacter pour effectuer la procédure de remise des prix. La société DefiHawk se fait la plus grande obligation de respecter l’article 7 de la rubrique “informations légales” des conditions générales d’utilisation.</p>

                <h3 id="artDeux2">2. Validite d’une production</h3>
                <p>Sont valides toutes les productions qui respectent les articles 2.1,2.2,2.3,2.4,2.5,2.6:</p>

                <h3>2.1 Contenu</h3>
                <p>La production ne présente aucun symbole, texte, image, son injurieux, antisémites, racistes, xénophobes, choquant, à caractère pornographique, faisant l’apologie de la violence, du crime, délit défini par la loi française, de comportement atteignant aux bonnes moeurs.</p>
                <p>Toute production présentant l’un de ces critères se verra dans un premier temps modérée, si besoin est, sauvegardée et/ou transmise aux autorités et pourra donner lieu à des poursuites en justice par notre société DefiHawk.</p>
                <p>La production n’aborde pas un autre sujet que celui demandé, à savoir pour l’édition 2017 du concours DéfiHawk, la promotion de la Bulgarie auprès du grand public.</p>

                <h3>2.2 Liberte de droit et d’exploitation a but commercial</h3>
                <p>L’auteur de la production garantit le libre droit pour une exploitation commerciale et une campagne de sensibilisation visant à mettre en avant sa production et ses contenus auprès du grand public. C'est pourquoi si un contenu ne l’est pas, il doit faire l’objet d’une autorisation de son auteur originel, libérant tous les droits de sa production et les cédant à la société Defi Hawk, vous devrez fournir l'accord écrit du détenteur des droits en cas de victoire, ceci vaut aussi dans le cadre d’une autorisation au droit à l’image.</p>

                <h3>2.3 Regles et formats de validite d’une production video</h3>
                <p>La production ne dure pas plus de 3 minutes maximum.</p>
                <p>La production est remise sous la forme d’un lien Youtube.com valide par le participant. Il devra la répertorier sur Youtube.com en “non répertorié”. Ce dernier atteste être l’auteur du compte et de la véracité de ses informations.</p>
                <p>La production est en bonne qualité (HD minimum).</p>
                <p>La production dispose ou non d’une bande son.</p>

                <h3>2.4 Regles et formats de validite d’une production son/musique</h3>
                <p>La production ne dure pas plus de 3 minutes maximum.</p>
                <p>La production est remise sous la forme d’un partage Soundcloud.com valide par le participant. Il devra la répertorier en privé. Ce dernier atteste être l’auteur du compte et de la véracité de ses informations.</p>
                <p>La production est en bonne qualité (HD minimum).</p>

                <h3>2.5 Regles et formats de validite dans le cadre de la production d’une affiche</h3>
                <p>La production est en format minimum de 2500 x 3000 pixel.</p>
                <p>La production a un poids maximum de 750Ko.</p>
                <p>La production est de bonne qualité.</p>

                <h3>2.6 Validation des CGU</h3>
                <p>Le participant a validé la totalité des conditions générales d’utilisation proposées au cours de sa procédure d’inscription et de la procédure de publication de sa production.</p>

                <h3 id="artDeux3">3. Conditions de validite d’une production consideree comme gagnante</h3>
                <p>Est considérée comme gagnante:</p>
                <p>Une production qui respecte les précédents articles.</p>
                <p>Une production qui arrive 1ere, 2ème ou 3ème et appartenant à l’une des catégories suivantes, vidéo, musique/son, affiche, à l’issue du concours le 15 novembre 2017 à 18 heures, heure de Paris, France.</p>

                <h3 id="artDeux4">4.Deroulement du concours</h3>
                <p>Le concours se déroule en trois étapes.</p>
                <p>Du 15/08/2017 au 31/08/2017, la première étape consiste à faire voter la communauté par internet sur la page Défi Hawk Facebook et Twitter afin d’élire selon une liste définie par avance par notre mandataire, un unique pays sur lequel le sujet du concours portera.</p>
                <p>Le 01/09/2017, sera annoncé sur les réseaux sociaux le pays gagnant, celui pout lequel vous devrez concourir.</p>
                <p>Du 2/09/2017 au 30/10/2017, la seconde étape dans un premier temps consiste à laisser un délai au participant pour s’inscrire et poster sa production comme indiqué dans l’article 2.</p>
                <p>À partir du 01/11/2017 12h00, le jury et les participants peuvent voter. Seules les personnes inscrites peuvent s'exprimer. Le vote dure trois semaines. Le 01/12/2017 à 12h00 à lieu l’annonce des productions gagnantes.</p>

                <h3 id="artDeux5">5. Jury</h3> 
                <p>Le jury intervient de manière impartiale et objective, respecte les conditions générales d’utilisation et collectivement, vote pour une production dans chaque catégorie. Cette production sera considérée comme gagnante du premier prix. Les deux autres prix seront les prix du public. Les deux personnes avec le plus de voix dans chaque catégorie remportent les deuxièmes et troisièmes lots. En cas d'égalité parfaite, le jury désignera la production qu'il préfère. </p>

                <h3 id="artDeux6">6. Procedure de remise de prix</h3>
                <p>Dans le cas où votre production remporte un prix, un email vous sera envoyé par DefiHawk@gmail.com pour spécifier des conditions de remise du prix.</p>
                <p>Dans le cas d’une non-réponse après un délai de 72h (trois jours) de la part du gagnant, la société DefiHawk prend l’obligation de vous envoyer à nouveau un mail dans un délai de 48h (deux jours).</p>
                <p>Celui-ci peut se voir suivi d’un nouveau mail 15 jours après le second dans le cas d’une nouvelle non-réponse.</p>
                <p>Dans le cas d’une non-réponse, trois semaines après le dernier email envoyé par notre société, la société DefiHawk considère que vous renoncez à votre prix auquel cas elle stoppera la procédure de remise de prix.</p>

                <h3>Retour au site : <a href="index.php">ici</a></h3>

            </div>
        </main>


        <footer>
            <?php require("php/footer.php"); ?>
        </footer>
        <script src="java/jquery-3.2.1.js"></script>
        <script src="java/verif.js"></script>
    </body>

    </html>
