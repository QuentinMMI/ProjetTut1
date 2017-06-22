<?php
    if(isset($_POST['objet'])){
     
        //Mail de destination
        $mail="defi.hawk@gmail.com";
        
        
        
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) //permet de verifier le format gmail hotmail ou live ...
            {
	           $passage_ligne = "\r\n";
            }
            else
            {
                $passage_ligne = "\n";
            }

        
        //Declaration des messager format txt
        $message_txt = "Message envoyé part : ".$_POST['nomEnvoyeur'].$passage_ligne."Adresse de réponse : ".$_POST['mailEnvoyeur'].$passage_ligne.$passage_ligne.$_POST['message'];
        
        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        
        //définition du sujet
        $sujet = "'".$_POST['objet']."'";
        
        //création de l'entête
            //Declaration de l'expéditeur
        $header = "From: \" ".$_POST['nomEnvoyeur']." \"<".$_POST['mailEnvoyeur'].">".$passage_ligne;
            //Declaration de l'addresse retour
        $header=$header. "Reply-to: \"".$_POST['nomEnvoyeur']." \"<".$_POST['mailEnvoyeur'].">".$passage_ligne;
            //déclaration de la version MIME
        $header.= "Reply-to: \"RETOUR\" <ADRESSE_RETOUR>".$passage_ligne; 
            //déclaration du content-type
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        
        
        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
         //ajout du message au format txt
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        
        //ferùeture des boundari
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        
        //ENVOIE DU MAIL
        mail($mail,$sujet,$message,$header);
        echo("mail evoyé");
        
    }else{

        header('Location: ../aPropos.php') ;
    }
?>