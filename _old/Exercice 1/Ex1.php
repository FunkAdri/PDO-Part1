<!DOCTYPE HTML>
<?php
require 'controllerEx1.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        foreach ($clientsList as $client) {
            ?><div><?= $client->firstName ?> . <?= $client->lastName ?></div>
            <?php
        }
        ?>
    </body>
</html>