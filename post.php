<?php
require_once('model/api_keys.php');

$document_lang=(isset($_GET['lang'])?$_GET['lang']:"en");

if(!$sendmail_enabled)
{
	header('Location: ./?lang=' . $document_lang . '&error=4#contact');
	exit(0);
}

if(!isset($_POST))
{
	header('Location: ./?lang=' . $document_lang);
	exit(0);
}

// Anti bot hidden field
if(!empty($_POST['comment']))
{
	error_log('Captcha! ' . json_encode($_POST));
	header('Location: ./?lang=' . $document_lang . '&error=6#contact');
	exit(1);
}

if(!isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['content']))
{
	header('Location: ./?lang=' . $document_lang);
	exit(0);
}

if($_POST['subject'] === "")
{
	header('Location: ./?lang=' . $document_lang . '&error=1#contact');
	exit(0);
}
if($_POST['content'] === "")
{
	header('Location: ./?lang=' . $document_lang . '&error=2#contact');
	exit(0);
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	header('Location: ./?lang=' . $document_lang . '&error=3#contact');
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/' . $mailgun_domain . '/messages');
curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mailgun_key);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	"from" =>  $mailgun_common_name . ' <' . $mailgun_sender . '@' . $mailgun_domain . '>',
	"to" => $mailgun_recipient,
	"subject" => $_POST['subject'],
	"text" => 'Reçu de ' . $_POST['email'] . "\n" . $_POST['content']
)));

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

if($response === FALSE)
{
	header('Location: ./?lang=' . $document_lang . '&error=5#contact');
	exit(0);
}


curl_close($ch);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/' . $mailgun_domain . '/messages');
curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mailgun_key);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	"from" =>  $mailgun_common_name . ' <' . $mailgun_sender . '@' . $mailgun_domain . '>',
	"to" => $_POST['email'],
	"subject" => 'Confirmation d\'envoi - portfolio.intensifi.es',
	"text" => "Vous m'avez envoyé un email via portfolio.intensifi.es. Je vais l'examiner et y répondre dans les plus brefs délais.\nSujet : " . $_POST['subject'] . "\nMessage :\n" . $_POST['content'] . "\n\nSi vous n'êtes pas à l'origine de ce message, merci d'ignorer le présent e-mail (et toutes mes excuses pour le dérangement, n'hésitez pas à me contacter si cela se reproduit).\nNe répondez pas directement à ce mail ! Je ne le recevrai pas. Contactez moi plutôt avec le formulaire sur portfolio.intensifi.es."
)));

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

header('Location: ./?lang=' . $document_lang . '&success#contact');
