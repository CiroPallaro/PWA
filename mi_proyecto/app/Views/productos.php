<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Productos</title>
</head>
<body>
    
    <h1>Productos </h1>
    <table class="tabla">
        <thead>
            <tr><th>Código</th><th>Nombre</th><th>Stock</th></tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= esc($producto->id) ?></td>
                    <td><?= esc($producto->nombre) ?></td>
                    <td><?= esc($producto->stock) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>