<?php ?>
<div class="container">
	<div class="row">
		<img class="col-8" src="<?=$projet->img?>" alt="Card image cap">
		<div class="card mb-3 col-4">
			<div class="card-body">
				<h5 class="card-title"><?=$projet->nomProjet?></h5>
				<p class="card-text"><?=$projet->longueDescription?></p>
				<a href="<?=base_url('index.php/Portfolio')?>" class="btn btn-success">Retour</a>
			</div>
		</div>
	</div>
</div>
<div style="height: 5vh"></div>
