<?php
function contact_links($mode="narrow")
{ ?>
<ul class="contact-links <?= $mode ?>">
	<li><a href="https://twitter.com/dolfsquare" title="Twitter"><img src="assets/img/twitter-icon<?= ($mode=="narrow")?'-narrow':'' ?>.png" alt="Twitter" /></a></li>
	<li><a href="https://tooting.intensifi.es/@dolfsquare" title="Mastodon"><img src="assets/img/mastodon-icon<?= ($mode=="narrow")?'-narrow':'' ?>.png" alt="Mastodon" /></a></li>
	<li><a href="https://www.linkedin.com/in/guillaume-jorandon-b088a5116/" title="LinkedIn"><img src="assets/img/linkedin-icon<?= ($mode=="narrow")?'-narrow':'' ?>.png" alt="LinkedIn" /></a></li>
	<li><a href="https://github.com/dolfinsbizou" title="GitHub"><img src="assets/img/github-icon<?= ($mode=="narrow")?'-narrow':'' ?>.png" alt="GitHub" /></a></li>
</ul>
<?php } ?>

