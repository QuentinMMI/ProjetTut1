<?php
    if(isset($_POST["Envoyer"])){
        
        $mail="defi.hawk@gmail.com";
        
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) //permet de verifier le format gmail hotmail ou live ...
            {
	           $passage_ligne = "\r\n";
            }
            else
            {
                $passage_ligne = "\n";
            }

        $message_txt = $_POST["message"];
        
        $boundary = "-----=".md5(rand()); // sépare les parties du mail
        
        $sujet=$_POST["objet"];
        
        $from = $_POST["mailEnvoyeur"];

        $de = $_POST["nomEnvoyeur"];    
    
        $header = "De : \".$de\"<".$from.">".$passage_ligne;
        $header.="Reply-to: \".$de\"<".$from.">".$passage_ligne;
        $header.="MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        
        mail($mail,$sujet,$message,$header);

        
    }
?>