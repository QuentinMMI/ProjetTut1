<?php
/* CONFIG */

$destinataire = 'defi.hawk@gmail.com';
 
 
// Messages de confirmation
$message_envoye = "Merci pour votre message, il sera examiné au plus vite !";
$message_non_envoye = "Désolé, une erreur est survenu. Veuillez réessayer l'envoie du mail.";
 
// Messages d'erreur
$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.html\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
 
/* FIN CONFIG */
 
// Teste si le formulaire a été envoyé
if (!isset($_POST['nomEnvoyeur']))
{
	header('Location: aPropos.php');
}
else
{
    
    
	/*
	 * Sert à nettoyer et enregistrer un texte
	 */
	function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}
 
		$text = nl2br($text);
		return $text;
	};
 
 
	/*
	 * Sert à vérifier la syntaxe d'un email
	 */
	function IsEmail($email)
	{
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}
 
	$nom     = (isset($_POST['nomEnvoyeur']))     ? Rec($_POST['nomEnvoyeur'])     : '';
	$email   = (isset($_POST['mailEnvoyeur']))   ? Rec($_POST['mailEnvoyeur'])   : '';
	$objet   = "mail d'utilisateur " ;
	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
 

	$email = (IsEmail($email)) ? $email : ''; 
 
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
	
		
		
		$cible = $destinataire;
		
 
		// Traitement caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);
 
		$num_emails = 0;
		$tmp = explode(';', $cible);
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, $objet, $message, $headers))
				$num_emails++;
		}
 
		if (($num_emails == 1))
		{
			echo '<p>'.$message_envoye.' <a href="index.php">Retour au site</a></p>'."\n";
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		echo '<p>'.$message_formulaire_invalide.' <a href="contact.html">Retour au formulaire</a></p>'."\n";
	};
};
?>