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
        $response = $database->query('SELECT * FROM clients');
        $donnes = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    
}
?>