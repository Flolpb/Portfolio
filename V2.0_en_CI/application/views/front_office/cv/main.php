<?php echo link_tag('assets/css/styles.css'); ?>
<?php echo link_tag('assets/plugins/bootstrap/css/bootstrap.min'); ?>


<div class="container">
	<div class="container">
		<div class="card-header">
			<h5 class="card-title text-center">Profil professionel</h5>
		</div>
		<div class="card-body">
			<p class="card-text">Jeune étudiant en première année à l'école Campus Academy qui aspire à devenir développeur web Full stack.
				Je recherche activement un stage dans ce domaine pour mai, pour une durée de 2 à 4 mois. Je recherche également une alternance pour septembre prochain.</p>
			<div class="row justify-content-between">
				<a href="<?=base_url ()?>download/cv-florent-chabin.pdf" target="_blank" class="col-4 btn btn-success">Voir le pdf de mon CV</a>
				<a href="<?=base_url('index.php/Portfolio')?>" class="btn btn-success col-4">Accéder à Mon Portfolio</a>
			</div>
		</div>
	</div>
	<div class="card m-auto text-justify" >
		<div class="card-header">
			<h5 class="card-title text-center">Situation professionnelle</h5>
		</div>
		<div class="card-body">
			<p class="card-text">Je suis actuellement à la recherche d'un stage et d'une alternance dans le développement.
				Le stage doit se passer entre le 13 mai et le 28 août avec une durée minimum de 4 semaines. L'alternance commencerait en septembre prochain.</p>
			<div class="row justify-content-center">
				<a href="<?=base_url('index.php/Contact')?>" class="btn btn-success col-4">Me contacter</a>
			</div>
		</div>
	</div>
	<div class="card text-justify mt-5" >
		<div class="card-header">
			<h5 class="card-title text-center">Compétences en informatique</h5>
		</div>
		<div class="card-body text-center">
			<p class="card-text">HTML/CSS</p>
			<p class="card-text">Javascript</p>
			<p class="card-text">React JS</p>
			<p class="card-text">MySQL</p>
			<p class="card-text">PHP</p>
			<p class="card-text">Codeigniter</p>
			<p class="card-text">Python</p>
			<p class="card-text">Bootstrap</p>
		</div>
	</div>
	<div class="card col-5 m-auto text-justify" >
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
<div style="height: 5vh"></div>
