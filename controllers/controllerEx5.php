<?php
    require 'modeles/modeleDataBase.php';    
    require 'modeles/modeleClient.php';
    $clients = new Clients();
    $clientsMArray = $clients->showMClients();