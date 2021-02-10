<?php
declare(strict_types = 1);
require_once "Window.class.php";

// Toutes les méthodes nécessaires à l'implémentation de Leds sont dans cet exemple.

// Création d'une fenêtre
$win = new Window(50,6);

// Changement couleur texte
$win->setFrontColor("Cyan");

// Affichage caractère
$win->write(2,2,"█");

// Guirlande
$h = 4;
for ($i=2; $i<40; $i+=2) {
	// Changement couleur texte
	$win->setFrontColor("Red");
	// Affichage caractère
	$win->write($i,$h,"█");
	// Changement couleur texte
	$win->setFrontColor("Green");
	// Affichage caractère
	$win->write($i+1,$h,"█");
}


