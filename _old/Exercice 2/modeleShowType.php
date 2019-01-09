<?php
class showTypes extends database {
    
    public $id;
    public $type;
    
    public function seeTypes(){
        $response = $this->database->query('SELECT * FROM showTypes');
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
