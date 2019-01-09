<?php
require_once 'controllers/controllerEx5.php';
?>
<html>
    <head>
        <title>Fidelité</title>
    </head>
    <body>
        <?php 
        foreach($clientsMArray as $client){?>
        <div>
            <p><?= $client->lastName ?></p>
            <p><?= $client->firstName ?></p>
        </div>
        <?php }
            ?>
    </body>
</html>

