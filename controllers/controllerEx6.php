<?php

// On appel les modèles
require 'modeles/modeleDataBase.php';
require 'modeles/modeleShowType.php';
// On instancie show à la class showTypes du fichier modeleShowType
$show = new showTypes();
// On dit que lorsque l'on note $show, on lance la fonction 'showEntertainement' qui affiche ce
// que l'on veut
$showEntertainement = $show->showEntertainment();
