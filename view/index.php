<!DOCTYPE html>
<html lang="fr">
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
		<ul class="contact-links large">
			<li><a href="https://twitter.com/dolfsquare"><img src="assets/img/twitter-icon.png" alt="Twitter" /></a></li>
			<li><a href="https://tooting.intensifi.es/@dolfsquare"><img src="assets/img/mastodon-icon.png" alt="Mastodon" /></a></li>
			<li><a href="https://www.linkedin.com/in/guillaume-jorandon-b088a5116/"><img src="assets/img/linkedin-icon.png" alt="LinkedIn" /></a></li>
			<li><a href="https://github.com/dolfinsbizou"><img src="assets/img/github-icon.png" alt="GitHub" /></a></li>
		</ul>
	</header>
	<div id="content-wrapper">
	<section id="about" class="section-odd">
		<h3>À propos</h3>
		<blockquote>
			Comme le disait le philosophe Bergson : les couilles me grattent... Nan. Pupuce je t'ai déjà dit de pas modifier mon texte !<br /><span class="quote-author">François <span class="small-caps">Theurel</span></span>
		</blockquote>
		<h4>Du blabla</h4>
		<p>Lorem ipsum dolor <a href="http://perdu.com">sit</a> amet, consectetur adipiscing elit. Pellentesque luctus fermentum odio, et placerat est <strong>fringilla</strong> sit <em>amet</em>. Vestibulum viverra consectetur faucibus. Donec feugiat orci ante, vitae venenatis justo suscipit a. Fusce porta magna eu purus ullamcorper, vitae gravida massa convallis. Cras in vestibulum augue. Duis cursus, massa eget blandit aliquam, nunc mi volutpat elit, sed aliquet nibh ex a nunc. Praesent aliquet, quam tristique placerat condimentum, felis ipsum tristique enim, in molestie sem sem nec sapien. Pellentesque tincidunt nisi non elit porta, in euismod dolor pellentesque.</p>
		<p>Un autre paragraphe.</p>
		<h4>Encore du blabla</h4>
		<p>Pellentesque volutpat ex ut nibh dapibus suscipit. Praesent egestas sapien lacinia neque tristique volutpat. In non enim elementum, eleifend nisl at, ultricies erat. Duis convallis vehicula turpis, et volutpat ligula aliquam in. Aliquam sed pulvinar erat. Suspendisse finibus dolor sed libero sodales, at hendrerit dolor interdum. Duis tortor nibh, ullamcorper sit amet varius in, tempus ut justo. Sed lacus nisl, maximus laoreet mattis nec, luctus id nisl. Vestibulum efficitur sapien vehicula tempor hendrerit. Maecenas nisl velit, vehicula ut ligula sed, placerat vehicula leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id maximus massa. Sed sagittis lacinia laoreet. In vel sapien bibendum, euismod eros quis, volutpat tellus.</p>
	</section>
	<section id="portfolio" class="section-even">
		<h3>Réalisations</h3>
		<ul class="button-list projects-list">
			<li><a href="https://intensifi.es">
				<img class="preview-image" src="assets/img/profile.png" alt="Projet 1" />
				<h5>Un projet</h5>
				<p>Une brève description</p>
			</a></li>
			<li><a href="https://intensifi.es">
				<img class="preview-image" src="assets/img/profile.png" alt="Projet 2" />
				<h5>Un autre projet</h5>
				<p>Une longue description pourrie de merde à chier</p>
			</a></li>
			<li><a href="https://intensifi.es">
				<img class="preview-image" src="assets/img/profile.png" alt="Projet 1" />
				<h5>Un projet</h5>
				<p>Une brève description</p>
			</a></li>
			<li><a href="https://intensifi.es">
				<img class="preview-image" src="assets/img/profile.png" alt="Projet 2" />
				<h5>Un autre projet</h5>
				<p>Une brève description</p>
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
			<input type="submit" value="Envoyer" />
		</form>
		<ul class="contact-links narrow">
			<li><a href="https://twitter.com/dolfsquare"><img src="assets/img/twitter-icon.png" alt="Twitter" /></a></li>
			<li><a href="https://tooting.intensifi.es/@dolfsquare"><img src="assets/img/mastodon-icon.png" alt="Mastodon" /></a></li>
			<li><a href="https://www.linkedin.com/in/guillaume-jorandon-b088a5116/"><img src="assets/img/linkedin-icon.png" alt="LinkedIn" /></a></li>
			<li><a href="https://github.com/dolfinsbizou"><img src="assets/img/github-icon.png" alt="GitHub" /></a></li>
		</ul>
	</aside>
	<footer>
		<p>Copyright de mes fesses</p>
	</footer>
	</div>
</body>
</html>