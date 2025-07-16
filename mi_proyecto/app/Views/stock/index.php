<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
    <title>Lista Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table class="tabla">
        <thead>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Acción</th>
        </thead>
        <tbody>
            <?php foreach($productos as $producto) : ?>
                <tr>
                    <td> <?= $producto['nombre'] ?></td>
                    <td> <?= $producto['stock'] ?></td>
                    <td>
                        <a href="<?= site_url('stock/verDetalle/' . $producto['id']) ?>">Ver detalles</a>
                        <a href="<?= site_url('stock/actualizarStock/' . $producto['id']) ?>">Actualizar Stock</a>
                    </td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>