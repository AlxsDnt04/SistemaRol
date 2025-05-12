<?php
// se llama al archivo del modelo
require_once __DIR__ . '/models/departamento.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Departamento</title>
</head>
<body>
    <h1>Formulario de Departamento</h1>
    <form action="../SistemaRol/controllers/departamentoController.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="30">
        <br><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" maxlength="30">
        <br><br>

        <label for="area">Área:</label>
        <input type="text" id="area" name="area" maxlength="30">
        <br><br>

        <!-- hidden -->
         <input type="hidden" name="accion" value="crear">


        <button type="submit">Guardar</button>
    </form>
</body>
</html>