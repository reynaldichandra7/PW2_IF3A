<?php

namespace App\Controller;

class ProductController
{
    public function index()
    {
        // Ambil data produk dari database
        $products = [
            ['name' => 'Produk 1', 'price' => 10000],
            ['name' => 'Produk 2', 'price' => 20000],
        ];

        // Render template (gunakan Twig)
        echo json_encode($products); // Untuk testing, kita tampilkan data JSON
    }
}
