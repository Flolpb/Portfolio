<?php
echo link_tag('assets/css/styles.css');
echo link_tag('assets/plugins/bootstrap/css/bootstrap.min');
echo link_tag('https://unpkg.com/aos@2.3.1/dist/aos.css');
?>
<div class="container accueil" style="display: flex; flex-wrap: wrap">
	<div class="card bg-light m-auto text-justify bloc blocAccueil" style="display: none" >
		<div class="card-header">
			<h5 class="card-title text-center">Présentation</h5>
		</div>
		<div class="card-body">
			<p class="card-text">Je m'appelle Florent Chabin. Je suis né le 08 décembre 2001 à Saint Nazaire. Je loge actuellement à Nantes. Je suis un étudiant en première année d'informatique à l'école Campus Academy . Je suis un joueur de Basketball qui joue en U20M Elite au club de Frossay Saint-Viaud . Je suis quelqu'un de très curieux qui aime bien toucher à tout.</p>
			<div class="row justify-content-between">
				<a href="<?=base_url('index.php/Portfolio')?>" class="btn btn-light m-auto">Accéder à Mon Portfolio</a>
			</div>
		</div>
	</div>
</div>
<div class="espace"></div>
<h1 class="text-dark text-center display-1 m-5">CV</h1>
<div class="container cv" style="display: flex; flex-wrap: wrap">
	<div data-aos="fade-right" class="card m-auto text-justify mt-5 bloc">
		<div class="card-header">
			<h5 class="card-title text-center" >Profil professionel</h5>
		</div>
		<div class="card-body">
			<p class="card-text">Jeune étudiant en première année à l'école Campus Academy qui aspire à devenir développeur web Full stack.
				Je recherche activement un stage dans ce domaine pour mai, pour une durée de 2 à 4 mois. Je recherche également une alternance pour septembre prochain.</p>
			<div class="row justify-content-between">
				<a href="<?=base_url ()?>download/cv-florent-chabin.pdf" target="_blank" class="col-4 btn btn-light">Voir le pdf de mon CV</a>
				<a href="<?=base_url('index.php/Portfolio')?>" class="btn btn-light col-4">Accéder à Mon Portfolio</a>
			</div>
		</div>
	</div>
	<div data-aos="fade-left" class="card m-auto text-justify mt-5 bloc" >
		<div class="card-header">
			<h5 class="card-title text-center">Situation professionnelle</h5>
		</div>
		<div class="card-body">
			<p class="card-text">Je suis actuellement à la recherche d'un stage et d'une alternance dans le développement.
				Le stage doit se passer entre le 13 mai et le 28 août avec une durée minimum de 4 semaines. L'alternance commencerait en septembre prochain.</p>
			<div class="row justify-content-center">
				<a href="<?=base_url('index.php/Contact')?>" class="btn btn-light col-4">Me contacter</a>
			</div>
		</div>
	</div>
</div>
<div class="container cv" style="display: flex; flex-wrap: wrap">
	<div data-aos="fade-right" class="card text-justify m-auto mt-5 bloc">
		<div class="card-header">
			<h5 class="card-title text-center">Compétences en informatique</h5>
		</div>
		<div class="card-body text-center" >
			<ul style="list-style-type: none; padding: 0">
				<li>HTML/CSS/JS</li>
				<li>React JS</li>
				<li>MySQL</li>
				<li>PHP</li>
				<li>Codeigniter</li>
				<li>Bootstrap</li>
			</ul>
		</div>
	</div>
	<div data-aos="fade-left" class="card text-justify m-auto mt-5 bloc" >
		<div class="card-header">
			<h5 class="card-title text-center">Centres d'intérêts</h5>
		</div>
		<div class="card-body text-center">
			<p class="card-text">Le développement web</p>
			<p class="card-text">La programmation</p>
			<p class="card-text">Le sport, en particulier le basket</p>
			<p class="card-text">Aime les casses-têtes</p>
			<p class="card-text">Aime bien toucher à tout</p>
		</div>
	</div>

</div>


