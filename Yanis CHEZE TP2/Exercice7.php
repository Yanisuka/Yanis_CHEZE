<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
 xml:lang="fr" lang="fr">
 <head>
 <title>TP2 Yanis CHEZE</title> 
 <meta http-equiv="content-type"
 content="text/html;charset=utf-8" />
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<h1 style="text-align: center;">Exercice 7</h1>

 	<?php

		$fichier = file("got.txt"); // Nom du fichier à afficher, son adresse de localisation
		 
		$total = count($fichier); // Nombre total des lignes du fichier

		for($i = 0; $i < $total; $i++) 
		{ // Départ de la boucle

		echo $fichier[$i]; // On affiche ligne par ligne le contenu du fichier

		} // Fin de la boucle

		?>

 </body>
 </html>