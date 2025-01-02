<?php

require "Auteur.php";
require "Livre.php";
require "Biblioteque.php";

$JK = new Auteur("Rowling", "J.K.");
Biblioteque::addLivre(new Livre("Harry Potter à l'école des sorciers", $JK, 309));
Biblioteque::addLivre(new Livre("Harry Potter et la chambre des secrets", $JK, 341));
Biblioteque::addLivre(new Livre("1984", new Auteur("Orwel", "George"), 328));

$research = "Rowling";
$livres = Biblioteque::rechercherLivres($research);
foreach ($livres as $livre){
    var_dump($livre);
}