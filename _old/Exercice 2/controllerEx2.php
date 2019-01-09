<?php
require 'modeleDataBase.php';
require 'modeleShowType.php';
$shows = new showTypes();
$showList = $shows->seeTypes();
?>