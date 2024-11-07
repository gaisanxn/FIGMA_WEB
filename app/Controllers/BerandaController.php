<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasDataModel;
use App\Models\ProdukDataModel;
use App\Models\ProdukModel;
use App\Models\TentangModel;
use CodeIgniter\HTTP\ResponseInterface;

class BerandaController extends BaseController
{
    public function index()
    {
        $tentang = new TentangModel();
        $data['tentang'] = $tentang->first();

        $produk = new ProdukDataModel();

        $data['produk'] = $produk->findAll();

        $aktivitas = new AktivitasDataModel();

        $data['aktivitas'] = $aktivitas->findAll();


        return view('Beranda', $data);
    }
}
