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
		<h1>Guillaume Jorandon</h1>
		<h2>Computer science engineering student</h2>
		<nav>
			<ul>
				<li><a class="about-link" href="#about">About</a></li>
				<li><a class="portfolio-link" href="#portfolio">Creations</a></li>
				<li><a class="cv-link" href="#cv">Curriculum Vitae</a></li>
				<li><a class="contact-link" href="#contact">Contact</a></li>
			</ul>
		</nav>
		</ul>
		<?php contact_links("large"); ?>
		<ul class="lang-selector">
			<li><a href="./?lang=fr">[FR]</a></li>
			<li><a href="./?lang=en">[EN]</a></li>
		<ul>
	</header>
	<div id="content-wrapper">
	<section id="about" class="section-odd">
		<h3>About</h3>
		<blockquote>
			<span class="quote-content">We can only see a short distance ahead, but we can see plenty there that needs to be done.</span><br /><span class="quote-author">Alan Turing</span>
		</blockquote>
		<h4>In a nutshell</h4>
		<p>I'm a <strong>Computer Science and engineering</strong> student at the <a href="https://www.utc.fr/en.html" title="UTC">Université de Technologie de Compiègne</a>, France, where I study <strong>math</strong> and <strong>data mining</strong>. Furthermore, in the context of the <a href="https://sites.google.com/site/mineurphiteco/" title="PHITECO">PHITECO minor</a>, I study <strong>cognitive science</strong> and philosophy of technology.</p>
		<h4>Associations and hobbies</h4>
		<p>Passionate about music (from jazz to rap to trip hop), I've been playing guitar for <?= date("Y")-2003 ?> years ; I've been part of a band thanks to <a href="http://assos.utc.fr/larsen/" title="Larsen">Larsen</a>, a student association federating musical activities at the UTC. I started playing piano lately. I cook and also love to read.</p>
		<p>Aware of the issues about online rights and digital freedoms, I'm a treasurer for  <a href="https://picasoft.net/" title="Picasoft">Picasoft</a>, student association member of <a href="https://framagit.org/framasoft/CHATONS/blob/master/docs/Charter-en.md" title="Keen Internet Talented Teams Engaged in Network Service">KITTENS</a>, promoting net neutrality and the use of free software, by training and raising awareness of engineering students, but also by providing free sotftware alternatives to private services.</p>
	</section>
	<section id="portfolio" class="section-even">
		<h3>Creations</h3>
		<ul class="button-list projects-list"><!-- 720*230 is the optimal size for each picture -->
			<li><a href="https://glados.intensifi.es">
				<img class="preview-image" src="assets/img/aperture.png" alt="Aperture Sciences" />
				<h5>Portal2.js</h5>
				<p>A faithful Javascript reconstruction of the ending credits of Portal 2.</p>
			</a></li>
			<li><a href="https://github.com/dolfinsbizou/mandelbrot">
				<img class="preview-image" src="assets/img/mandelbrot.png" alt="Ensemble de Mandelbrot" />
				<h5>mandelbrot</h5>
				<p>A mandelbrot set computing utility using libpng.</p>
			</a></li>
			<li><a href="https://github.com/dolfinsbizou/Paper-Plane-Fork">
				<img class="preview-image" src="assets/img/paper-plane.png" alt="Paper Plane" />
				<h5>Paper Plane</h5>
				<p>A C++/SFML fork of the mini-game Paper Plane.</p>
			</a></li>
			<li><a href="https://blog.intensifi.es/?p=22">
				<img class="preview-image" src="assets/img/christiane-taubira.png" alt="Christiane Taubira" />
				<h5>Taubira et le FN</h5>
				<p>A bunch of thinkings made in an academic context about the media representation of Christiane Taubira, a french political woman.</p>
			</a></li>

			<li><a href="#portfolio">
				<img class="preview-image" src="assets/img/soon.png" alt="Projet 2" />
				<h5>Soon...</h5>
				<p>There's more to come!</p>
			</a></li>
		</ul>
	</section>
	<section id="cv" class="section-odd">
		<h3>Curriculum Vitae</h3>
		<ul class="button-list">
			<li><a class="download" href="https://intensifi.es/files/cv_en.pdf">English</a></li>
			<li><a class="download" href="https://intensifi.es/files/cv.pdf">French</a></li>
		</ul>
	</section>
	<aside id="contact" class="section-even">
		<h3>Contact</h3>
		<p>If you have a question, an offer to make, contact me with this form.</p>
		<?php if($errorInfo) { ?>
		<div class="error-info"><?= $errorInfo ?></div>
		<?php }
		else if(isset($_GET['success'])) { ?>
		<div class="success-info">Message sent. I'll examine it and answer as soon as possible.</div>
		<?php }
		else if(!$sendmail_enabled) { ?>
		<div class="warning-info">This form is currently deactivated. Please contact me on social networks instead.</div>
		<?php } ?>
		<form method="post" action="post.php?lang=<?= $document_lang ?>">
			<span class="field-half">
			<label for="email">E-mail address</label>
			<input type="email" name="email" id="email" required />
			</span>
			<span class="field-half">
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject" required />
			</span>
			<span class="field">
			<label for="content">Body</label>
			<textarea name="content" id="content" required></textarea>
			</span>
			<label for="comment" class="hp">If you are a self-conscious being, capable of self-determination, please don't fill this field.</label>
			<input type="text" name="comment" id="comment" class="hp" />
			<input type="submit" value="Envoyer" />
		</form>
		<?php contact_links("narrow"); ?>
	</aside>
	<footer>
		<p>This design is released in the public domain following the terms of the <a href="https://creativecommons.org/publicdomain/zero/1.0/deed.en" title="CC0">CC0 license</a>.</p>
	</footer>
	</div>
</body>
</html>
