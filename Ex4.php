<?php
require_once 'controllers/controllerEx4.php';
?>
<html>
    <head>
        <title>Fidelité</title>
    </head>
    <body>
        <?php 
        foreach($fidelityArray as $client){?>
        <div>
            <p><?= $client->lastName ?></p>
            <p><?= $client->cardNumber ?></p>
            <p><?= $client->type ?><hr /></p>
        </div>
        <?php }
            ?>
    </body>
</html>
