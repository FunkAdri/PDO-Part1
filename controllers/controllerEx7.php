<?php
// On appel les modèles
require 'modeles/modeleDataBase.php';
require 'modeles/modeleClient.php';
// On lie show à la class showTypes du fichier modeleShowType
$client = new clients();
// On dit que lorsque l'on note $show, on lance la fonction 'showEntertainement' qui affiche ce
// que l'on veut
$detailedClientArray = $client->showDetailedClients();