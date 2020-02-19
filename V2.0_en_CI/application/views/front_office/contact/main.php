
<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-4 login">
			<form class="form-send-msg card-body">
				<h1 class="h3 mb-3 font-weight-normal">M'envoyer un message !</h1>
				<p class="text-danger dataError" style="display: none">Un des champs n'est pas valide !</p>
				<label for="inputPrenom" class="sr-only">Prénom</label>
				<input name="inputPrenom" type="text" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus>
				<label for="inputNom" class="sr-only">Nom</label>
				<input name="inputNom" type="text" id="inputNom" class="form-control" placeholder="Nom" required autofocus>
				<label for="inputMail" class="sr-only">Mail</label>
				<input name="inputMail" type="email" id="inputMail" class="form-control" placeholder="Email" required autofocus>
				<label for="inputMessage" class="sr-only">Message</label>
				<textarea name="inputMessage" type="text" id="inputMessage" class="form-control" placeholder="Message (minimum 10 caractères)" required></textarea>
				<button type="button" id="btn-send" class="btn mt-4 btn-send bg-success text-white"><span>Envoyer</span></button>
				<h2>Ou sinon</h2>
				<div class="row" style="margin-left: 5rem;">
					<a target="_blank" href="https://www.linkedin.com/in/florent-chabin-297a07195/"><img style="width: 5rem" src="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Bug.svg.original.svg" alt="logoLinkedIn"></a>
					<a target="_blank" href="https://twitter.com/ChabinFlorent"> <img src="https://upload.wikimedia.org/wikipedia/fr/c/c8/Twitter_Bird.svg" alt="logo twitter" style="width: 5rem"></a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/plugins/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/msg.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
