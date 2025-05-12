<?php
// filepath: c:\Users\LABE1-PC-19\Documents\VsCode\DisenoWeb\SistemaRol\index.php
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
    <form action="procesar_departamento.php" method="post">
        <label for="id_departamento">ID Departamento:</label>
        <input type="number" id="id_departamento" name="id_departamento" required>
        <br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="30">
        <br><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" maxlength="30">
        <br><br>

        <label for="area">Área:</label>
        <input type="text" id="area" name="area" maxlength="30">
        <br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>