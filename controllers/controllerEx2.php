<?php
require 'modeles/modeleDataBase.php';
require 'modeles/modeleShowType.php';
$shows = new showTypes();
$showList = $shows->seeTypes();