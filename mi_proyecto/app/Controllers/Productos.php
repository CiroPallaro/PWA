<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT id, nombre, stock FROM productos");
        $resultado = $query -> getResult();
        $data = ['titulo' => 'Catalogo de productos' , 'productos' => $resultado];
        return view('productos', $data);

    }
}
