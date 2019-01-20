<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('scripts/connexion.php');
?>

<style  type="text/css">
	   .centertable {}
</style>



<?php 	include('chunks/header.php'); ?>
<?php 	include('chunks/onglet.php'); ?>
<?php 	if (isset($_GET['categorie'])) : ?>
<?php 	switch ($_GET['categorie']) : ?>
<?php 	case 'parcours' : ?>
<?php 		include('chunks/parcours.php');?>
<?php 	break; ?>
<?php 	case 'experience' : ?>
<?php 		include('chunks/experience-professionnelle.php');?>
<?php 	break; ?>
<?php 	case 'informatique' : ?>
<?php 		include('chunks/competences-informatiques.php');?>
<?php 	break; ?>
<?php 	case 'autres' : ?>
<?php 		include('chunks/autres.php');?>
<?php 	break; ?>
<?php 	case 'formulaire' : ?>
<?php 		include('chunks/formulaire.php');?>
<?php 	break; ?>
<?php 	case 'confirmation' : ?>
<?php 		include('chunks/confirmation.php');?>
<?php 	break; ?>
<?php 	default ; ?>
<?php 		include('chunks/error.php');?>
<?php 	break; ?>
<?php 	endswitch; ?>
<?php 	else : ?>
<?php 	include('chunks/home.php');?>
<?php 	endif; ?> 
		<br />
<?php 	include('chunks/footer.php'); ?>