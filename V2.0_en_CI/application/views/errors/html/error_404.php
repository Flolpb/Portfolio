<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
</head>
<body>
	<div class="container">
		<h1 class="display-1 text-danger">Erreur 404 !!</h1>
		<a class="display-2 text-success" href="<?=base_url('index.php')?>">Retourner à l'accueil !!</a>
	</div>
</body>
</html>
