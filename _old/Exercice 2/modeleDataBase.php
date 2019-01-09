<?php
class database {
    public $database;
    public function __construct() {
        //On essaye de se connecter à la base de données
        try {
            // la base de donnée exemple : $this->database = new PDO('mysql:host=localhost:dbname=nomdelabase1','nomdelabase2','nomdelabase3');
            //Si le try marche pas on attrape dans l'exception l'erreur
        } catch (Exception $ex) {
            die('Erreur : ' . $error->getMessage()); //Avec le die on arrête tout et avec la fonction $error on on affiche le message d'erreur
        }
    }
    public function __destruct() {
        $this->database = NULL;
    }
}
?>
