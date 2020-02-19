


<div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-around">
	<?php
	foreach ($projets as $projet){ ?>
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" style="height: 10rem;" src="<?=$projet->img?>" alt="Image du projet">
	  <div class="card-body">
		<h5 class="card-title"><?=$projet->nomProjet?></h5>
		<p class="card-text"><?=$projet->courteDescription?></p>
		<a href="<?=base_url('index.php/projets/'.$projet->id)?>" class="btn btn-success">Plus d'informations</a>
	  </div>
	</div>

<?php } ?>
</div>



