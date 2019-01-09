<?php
    require 'modeles/modeleDataBase.php';    
    require 'modeles/modeleClient.php';
    $list20 = new clients();
    $array20 = $list20->showTwentyClients();