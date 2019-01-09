<?php
require 'modeleDataBase.php';
require 'modeleClient.php';

$clientObj = new clients();
$clientsList = $clientObj->showClients();
?>
