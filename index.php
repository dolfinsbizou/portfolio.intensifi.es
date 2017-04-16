<?php
require_once('model/api_keys.php');
require_once('model/utils.php');

$document_lang=(isset($_GET['lang'])?$_GET['lang']:"en");

switch($document_lang)
{
	case 'en':
		if(isset($_GET['error']))
		{
			switch($_GET['error'])
			{
			case 1:
				$errorInfo = "Empty subject.";
				break;
			case 2:
				$errorInfo = "Empty message body.";
				break;
			case 3:
				$errorInfo = "Invalid e-mail.";
				break;
			case 4:
				$errorInfo = "I'm sorry, but this form is currently deactivated. Don't hesitate to bother me on social networks!";
				break;
			case 5:
				$errorInfo = "Sending failed for unknown reason. Try again later or contact me on social networks.";
				break;
			case 6:
				$errorInfo = "The anti-bot field has been filled.";
				break;
			default:
				$errorInfo = null;
			}
		}
		else
			$errorInfo = null;

		require_once('view/index_en.php');
		break;
	default:
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
			case 5:
				$errorInfo = "L'envoi a échoué pour une raison inconnue. Réessayez plus tard ou contactez moi sur les réseaux sociaux.";
				break;
			case 6:
				$errorInfo = "Le champ anti-robot a été rempli.";
				break;
			default:
				$errorInfo = null;
			}
		}
		else
			$errorInfo = null;

		require_once('view/index_fr.php');
		break;
}
