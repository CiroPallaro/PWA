<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/estilos.css') ?>">
    <title>Detalles del producto</title>
</head>
<body>
    <h1> Detalles del producto</h1>
    <p><strong>Nombre: </strong> <?= $producto['nombre'] ?></p>
    <p><strong>Descripción: </strong> <?= $producto['descripcion'] ?></p>
    <p><strong>Precio: </strong> <?= $producto['precio'] ?></p>
    <p><strong>Stock: </strong> <?= $producto['stock'] ?></p>

    <a href="<?= site_url('../stock')?>">Volver a la lista de productos</a>
</body>
</html>