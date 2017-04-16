<!DOCTYPE html>
<html lang="<?= $document_lang ?>">
<head>
	<title>Guillaume Jorandon</title>
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
</head>
<body>
	<header>
		<img id="profile-picture" src="assets/img/profile.png" alt="Photo de profil" />
		<h1>Guillaume <span class="small-caps">Jorandon</span></h1>
		<h2>Étudiant Ingénieur en science informatique</h2>
		<nav>
			<ul>
				<li><a class="about-link" href="#about">À propos</a></li>
				<li><a class="portfolio-link" href="#portfolio">Réalisations</a></li>
				<li><a class="cv-link" href="#cv">Curriculum Vitae</a></li>
				<li><a class="contact-link" href="#contact">Contact</a></li>
			</ul>
		</nav>
		</ul>
		<?php contact_links("large"); ?>
	</header>
	<div id="content-wrapper">
	<section id="about" class="section-odd">
		<h3>À propos</h3>
		<blockquote>
			Nous ne savons pas où nous allons, mais du moins il nous reste bien des choses à faire.<br /><span class="quote-author">Alan <span class="small-caps">Turing</span></span>
		</blockquote>
		<h4>En quelques mots</h4>
		<p>Je suis étudiant ingénieur en <strong>Génie Informatique</strong> à l'<a href="https://www.utc.fr/" title="UTC">Université de Technologie de Compiègne</a>, en France. J'y étudie les <strong>mathématiques</strong> et la <strong>fouille de données</strong>. Dans le cadre du <a href="https://sites.google.com/site/mineurphiteco/" title="PHITECO">mineur PHITECO</a>, j'étudie aussi les <strong>sciences cognitives</strong> et l'influence des techniques sur les modes de pensée.</p>
		<h4>Activités et passions</h4>
		<p>Passionné de musique de touts styles (du jazz au rap, en passant par le trip hop), je fais de la guitare depuis <?= date("Y")-2003 ?> ans ; j'ai été membre d'un groupe par le biais de <a href="http://assos.utc.fr/larsen/" title="Larsen">Larsen</a>, une association qui fédère les activités musicales à l'UTC. Plus récemment je me suis mis au piano. Je cuisine et j'aime beaucoup lire.</p>
		<p>Sensibilisé aux problématiques de droit en ligne et de libertés numériques, je participe en tant que Trésorier à <a href="https://picasoft.net/" title="Picasoft">Picasoft</a>, association étudiante membre du collectif <a href="https://chatons.org/" title="Collectif des Hébergeurs Alternatifs, Transparents, Ouverts, Neutres et Solidaires">CHATONS</a>, qui vise à promouvoir et défendre une approche libriste respectueuse de la vie privée et de la liberté d'expression dans le domaine de l'informatique, à travers la formation et la sensibilisation du milieu ingénieur, mais aussi en proposant des alternatives libres aux services privatisants.</p>
	</section>
	<section id="portfolio" class="section-even">
		<h3>Réalisations</h3>
		<ul class="button-list projects-list"><!-- 720*230 is the optimal size for each picture -->
			<li><a href="https://intensifi.es">
				<img class="preview-image" src="assets/img/aperture.png" alt="Aperture Sciences" />
				<h5>Portal2.js</h5>
				<p>Une reconstruction fidèle du générique de fin de Portal 2 en JavaScript.</p>
			</a></li>
			<li><a href="https://github.com/dolfinsbizou/mandelbrot">
				<img class="preview-image" src="assets/img/mandelbrot.png" alt="Ensemble de Mandelbrot" />
				<h5>mandelbrot</h5>
				<p>Un générateur de fractales de Mandelbrot personnalisables, avec libpng.</p>
			</a></li>
			<li><a href="https://github.com/dolfinsbizou/Paper-Plane-Fork">
				<img class="preview-image" src="assets/img/paper-plane.png" alt="Paper Plane" />
				<h5>Paper Plane</h5>
				<p>Un fork du mini-jeu Paper Plane, en C++ avec la SFML.</p>
			</a></li>
			<li><a href="https://blog.intensifi.es/?p=22">
				<img class="preview-image" src="assets/img/christiane-taubira.png" alt="Christiane Taubira" />
				<h5>Taubira et le FN</h5>
				<p>Un ensemble de réflexions sur la représentation médiatique de Christiane <span class="small-caps">Taubira</span>, réalisé dans un cadre académique.</p>
			</a></li>

			<li><a href="#portfolio">
				<img class="preview-image" src="assets/img/soon.png" alt="Projet 2" />
				<h5>Soon...</h5>
				<p>Plus à venir</p>
			</a></li>
		</ul>
	</section>
	<section id="cv" class="section-odd">
		<h3>Curriculum Vitae</h3>
		<ul class="button-list">
			<li><a class="download" href="https://intensifi.es/files/cv.pdf">Français</a></li>
			<li><a class="download" href="https://intensifi.es/files/cv_en.pdf">Anglais</a></li>
		</ul>
	</section>
	<aside id="contact" class="section-even">
		<h3>Contact</h3>
		<p>Si vous avez une question, une offre particulière à me faire, contactez-moi avec ce formulaire.</p>
		<?php if($errorInfo) { ?>
		<div class="error-info"><?= $errorInfo ?></div>
		<?php }
		else if(isset($_GET['success'])) { ?>
		<div class="success-info">Message envoyé. Je vais l'examiner et y répondre dans les plus brefs délais.</div>
		<?php }
		else if(!$sendmail_enabled) { ?>
		<div class="warning-info">L'envoi de messages est actuellement désactivé. Je vous invite à me contacter sur les réseaux sociaux.</div>
		<?php } ?>
		<form method="post" action="post.php">
			<span class="field-half">
			<label for="email">Adresse e-mail</label>
			<input type="email" name="email" id="email" required />
			</span>
			<span class="field-half">
			<label for="subject">Sujet</label>
			<input type="text" name="subject" id="subject" required />
			</span>
			<span class="field">
			<label for="content">Message</label>
			<textarea name="content" id="content" required></textarea>
			</span>
			<label for="comment" class="hp">Si vous êtes un être doué d'une conscience, et capable d'auto-détermination, laissez ce champ vide.</label>
			<input type="text" name="comment" id="comment" class="hp" />
			<input type="submit" value="Envoyer" />
		</form>
		<?php contact_links("narrow"); ?>
	</aside>
	<footer>
		<p>Le thème de ce site est transféré dans le domaine public selon les termes de la <a href="https://creativecommons.org/publicdomain/zero/1.0/deed.fr" title="CC0">licence CC0</a>.</p>
	</footer>
	</div>
</body>
</html>
