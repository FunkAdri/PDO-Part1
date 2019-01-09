<?php
require_once 'controllers/controllerEx6.php';
?>
<html>
    <head>
        <title>Oui</title>
    </head>
    <body>
        <?php
        // On crée notre boucle pour afficher ce que l'on demande à chaque fois qu'on le demande.
        foreach ($showEntertainement as $show) {
            ?>
            <div>
                <!-- On affiche dans un paragraphe les infos de la fonction -->
                <p><?= $show->title ?> par <?= $show->performer ?> le <?= $show->date ?> à <?= $show->startTime ?><hr /></p>
            </div>
        <?php }
        ?>
    </body>
</html>
