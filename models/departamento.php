<?php
require_once __DIR__ . '/../config/database.php';

class Departamento
{
    // variable para la conexion
    private $db;

    public function __construct()
    {
        $this->db = database::connect();
    }

    public function crear($data)
    {
        $statement = $this->db->prepare("INSERT INTO departamento (nombre, ubicacion, area) VALUES (?, ?, ?)");
        return $statement->execute([$data['nombre'], $data['ubicacion'], $data['area']]);
    }
}
