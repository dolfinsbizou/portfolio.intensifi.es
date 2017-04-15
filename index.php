<?php
require_once('model/api_keys.php');

if(isset($_GET['error']))
{
	switch($_GET['error'])
	{
		case 1:
			$errorInfo = "Sujet vide.";
			break;
		case 2:
			$errorInfo = "Aucun corps de message renseigné.";
			break;
		case 3:
			$errorInfo = "Adresse e-mail invalide.";
			break;
		case 4:
			$errorInfo = "Toutes mes excuses. L'envoi de mail est actuellement désactivé. N'hésitez pas à me contacter sur les réseaux sociaux !";
			break;
		default:
			$errorInfo = null;
	}
}
else
	$errorInfo = null;

require_once('view/index.php');