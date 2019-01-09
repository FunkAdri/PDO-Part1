<?php
    require 'modeles/modeleDataBase.php';    
    require 'modeles/modeleClient.php';
    $clients = new Clients();
    $fidelityArray = $clients->showfidelityClients();