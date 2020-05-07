<?php
/**
 * Created by PhpStorm.
 * User: nemza
 * Date: 2018-12-20
 * Time: 13:11
 */

// PHASE 10-MAIL
class Mail extends MainController
{

	public function __construct()
	{

		parent::__construct();
	}

	// ────────────────────────────────────────────────────────────────────────

	// localhost/projets/ieps/mail/send


	// public function send() { // à l'origine, changé par la suite par la function suivante.
	public function send01()
	{

		$recipient = $_POST['recipient'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];
		$headers = [
			'From' => $_POST['email'],
			'Reply-To' => $_POST['email'],
			'X-Mailer' => 'PHP/' . phpversion(), // Fonction phpversion…
			//// X-Mail permet de savoir avec quel protocole ty envois.
			'MINE-Version' => 1.0, // Type de application associé.
			'Content-type' => 'text/html; charset=utf-8'
		];

		$message = '
		<b>I.E.P.S.C.F. - Namur</b> (' . date('y-m-d') . ')<br>' . $_POST['message'];

		try {
			mail($recipient, $subject, $message, $headers);
			header('location:' . $_SERVER['HTTP_REFERER']);
			// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
			// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
			exit;

		} catch (Exception $e) {

			header('location:' . $_SERVER['HTTP_REFERER']);
			// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
			// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
			exit;
		}
	}

	// ────────────────────────────────────────────────────────────────────────

	public function send()
	{

		// Tous les champs sont obligatoire.
		// Champ sujet pas < de 3 caractères.
		// Champ message pas < de 5 caractères.
		// Filtrer champ e‑mail.

		// Il faut faiqe une verification que tous les inputs sont bien rempli en PHP même si vous avez mis un « required » dans le HTML…
		if (!empty($_POST['recipient']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])) {

			if (strlen($_POST['subject']) < 3 || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || strlen($_POST['message']) < 5) {

				echo 'donnée pas correct, format ou nombre de caractères';

				exit;
			}
			$recipient = $_POST['recipient'];

			$subject = $_POST['subject'];

			$headers = [

				'From' => $_POST['email'],
				'Reply-To' => $_POST['email'],
				'X-Mailer' => 'PHP/' . phpversion(), // Fonction phpversion…
				// « X-Mailer » permet de savoir avec quel protocole ty envois les informations.
				'MINE-Version' => 1.0, // Type de application associé.
				'Content-type' => 'text/html; charset=utf-8'
			];

			// Contenu du text area modifié avec en‑tête personnalisé.
			$message = '
		<b>I.E.P.S.C.F. - Namur</b> (' . date('y-m-d') . ')<br>' . $_POST['message'];

			try {
				mail($recipient, $subject, $message, $headers);
				header('location:' . $_SERVER['HTTP_REFERER']); // Renvoi de ou on vient, à savoir le formulaire.
				// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
				// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
				exit;

			} catch (Exception $e) {

				header('location:' . $_SERVER['HTTP_REFERER']);
				// ⚠ Location doit être écrit tel quel, ne pas ajouter de espace.
				// ⚠ Il faut utiliser le chemin du « Class_Contrôleur/fonctionMéthode », pas le « nom du fichier »…
				exit;
			}
		} else {

			echo 'Vous devez tout remplir…';
		}
	}
}