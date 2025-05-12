<?php
require_once __DIR__ . '/../models/departamento.php';

$departamento = new Departamento();
if (isset($_POST['accion']) && $_POST['accion'] == 'crear') {
    $departamento->crear($_POST);
}