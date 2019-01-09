<?php
class clients extends database{ // On fait une classe client dont le parents est database donc clients hérite
    //On met ici ce que contient la table client (mieux vaut mettre en attribut le nom des champs)
    public $id;
    public $firtName;
    public $lastName;
    public $birthDate;
    public $card;
    public $carNumber;

    //La fonction va servir à afficher les clients
    public function showClients(){
        $response = $this->database->query('SELECT * FROM clients');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
    public function showTwentyClients(){
        $response = $this->database->query('SELECT * FROM clients LIMIT 20');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    /**
     * Methode qui retourne un tableau d'objets de tous les clients qui ont une carte de fidélité 
     * @return ARRAY Tableau d'objets
     */
    public function showfidelityClients(){
        $response = $this->database->query('SELECT `clients`.`lastName`, `clients`.`cardNumber`, `cardTypes`.`type` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` INNER JOIN `cardTypes` ON `cards`.`cardTypesId` = `cardTypes`.`id` WHERE `cardTypes`.`id` LIKE \'1\'
');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
    public function showMClients(){
        $response = $this->database->query('SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName`');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
    public function showDetailedClients(){
        $response = $this->database->query('SELECT `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS birthDate, IF(`card` = 1, "oui", "non") AS card, `cardNumber` FROM `clients`');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
}