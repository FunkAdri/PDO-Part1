<?php
require 'controllers/controllerEx2.php';
foreach ($showList as $show){
    ?><div><?= $show->type ?></div><?php
}
?>