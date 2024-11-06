<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $produkModel = new ProdukModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['produk'] = $produkModel->first();
        
        // Kirim data ke view
        return view('Produk', $data);
    }
}
