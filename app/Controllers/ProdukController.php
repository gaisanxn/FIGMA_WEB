<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukDataModel;
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

        $produkdatamodel = new ProdukDataModel();

        $data['dataproduk'] = $produkdatamodel->findAll();

      
        
        // Kirim data ke view
        return view('produk/index', $data);
    }

    public function detail($slug)
    {
        $produkdata = new ProdukDataModel();
        // Mencari produk berdasarkan slug
        $produk = $produkdata->where('slug', $slug)->first();

        
        if (!$produk) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Produk dengan slug '{$slug}' tidak ditemukan.");
        }
        
        $data['produk'] = $produk;
        return view('produk/detail', $data); // Menampilkan detail produk
    }

}
