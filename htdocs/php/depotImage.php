<?php
    session_start();
    require("param.inc.php");
if (isset($_FILES["affiche"])){
            if($_FILES["affiche"]["name"] != ".htaccess"){
                if($_FILES["affiche"]["type"] == "image/jpeg"|| $_FILES["affiche"]["type"] == "image/pjpeg"){
                    //$_SERVEUR
                    //$_GET
                    //$_POST
                    echo("Nom du fichier : ".$_FILES["affiche"]["name"]."<br />"); 
                    echo("Nom du fichier temporaire : ".$_FILES["affiche"]["tmp_name"]."<br />"); 
                    echo("Type du fichier : ".$_FILES["affiche"]["type"]."<br />");  
                    echo("Taille du fichier : ".$_FILES["affiche"]["size"]."  octets<br />"); 
                    
                    copy($_FILES["affiche"]["tmp_name"],"../travaux/".$_FILES["affiche"]["name"]);
                    require("php/convertirImage85x85.inc.php");
                    convertirImage85x85($_FILES["affiche"]["tmp_name"],"../travaux/vignette/vignette_".$_FILES["affiche"]["name"]);
                }
            }
}else{
    header("Location: poster.php");
}
?>