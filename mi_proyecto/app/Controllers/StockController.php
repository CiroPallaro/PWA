<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class StockController extends BaseController
{
    public function index()
    {
        $productosModel = new ProductosModel();
        $productos = $productosModel->findAll();
        return view('stock/index', ['productos' => $productos]);
    }

    public function __construct()
    {
        $this->productosModel = new ProductosModel();
    }

public function verDetalle($productoId)
    {
        $producto = $this->productosModel->find($productoId);
        return view('stock/detalle', [
            'titulo' => 'Detalle del producto',
            'producto' => $producto
        ]);
    }

    public function crear()
    {
        $modelo = model(ProductosModel::class);
        if (! $this->validate([
            'nombre' => 'required|min_length[3]',
            'precio' => 'required|decimal',
            'stock' => 'required|integer'
        ]))

        return redirect();
    }
    

    public function actualizarStockForm($productoId)
    {
        return view('stock/form', ['productoId' => $productoId]);
    }

    public function actualizarStock($productoId)
    {
        $nuevoStock = $this->request->getPost('nuevoStock');
        $productosModel = new ProductosModel();
        $productosModel -> update($productoId, ['stock' => $nuevoStock]);

        return redirect()->to(site_url('stock'));
    }

    
}
