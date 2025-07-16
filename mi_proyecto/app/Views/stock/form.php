<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
    <title>actualizarStock</title>
</head>
<body>
    <h2>Actualizar Stock</h2>
    <form action="<?= site_url('stock/actualizarStock/' . $productoId) ?>" method ="post">
        <label for="nuevoStock">Nuevo Stock:</label>
        <input type="number" name="nuevoStock" id="nuevoStock" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>