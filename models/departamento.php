<?php
require_once __DIR__ . '/config/database.php';

class Departamento{
    // variable para la conexion
    private $db;

    public function __construct(){
        $this->db = database::connect();
        
    }
        

}