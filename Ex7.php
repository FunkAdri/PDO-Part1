<?php
require_once 'controllers/controllerEx7.php';
?>
<html>
    <head>
        <title>Oui</title>
    </head>
    <body>
        <?php
        // On crée notre boucle pour afficher ce que l'on demande à chaque fois qu'on le demande.
        foreach ($detailedClientArray as $client) {
            ?>
            <div>
                <!-- On affiche dans un paragraphe les infos de la fonction -->
                <ul>
                    <li>Nom : <?= $client->lastName ?></li>
                    <li>Prénom : <?= $client->firstName ?></li>
                    <li>Date de Naissance : <?= $client->birthDate ?></li>
                    <li>Carte de fidélité : <?= $client->card ?></li>
                    <li>Numéro de carte : <?= $client->cardNumber ?></li>
                </ul>
            </div>
        <?php }
        ?>
    </body>
</html>