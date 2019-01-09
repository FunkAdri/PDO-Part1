<?php

class showTypes extends database {

    public $id;
    public $type;
    public $title;
    public $performer;
    public $date = '01/01/2000';
    public $startTime = '00:00:00';

    // On créé une fonction qui affichera chaque types de spectacle.
    public function seeTypes() {
        $response = $this->database->query('SELECT * FROM `showTypes`');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    // On créé une fonction qui affiche le titre, l'artiste la date et l'heure de l'évènement
    public function showEntertainment() {
        $response = $this->database->query('SELECT `shows`.`title`, `shows`.`performer`, DATE_FORMAT(`shows`.`date`,"%d/%m/%Y") AS `date`, `shows`.`startTime` FROM `shows`');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}
