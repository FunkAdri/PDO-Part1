<?php
require 'modeles/modeleDataBase.php';
require 'modeles/modeleClient.php';
$clientObj = new clients();
$clientsList = $clientObj->showClients();
