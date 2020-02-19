<?php
echo link_tag('assets/css/styles.css');
echo link_tag('assets/plugins/bootstrap/css/bootstrap.min');
echo link_tag('https://unpkg.com/aos@2.3.1/dist/aos.css');

include_once "header.php";

?>

<h1 class="text-dark text-center display-1 m-5"><?=$title?></h1>



<?php

include_once $pageName.'.php';
include_once "footer.php";

?>

<script type="text/javascript" src="<?=base_url()?>assets/plugins/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/animate.js" ></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init({
		duration: 1200,
	});

</script>
