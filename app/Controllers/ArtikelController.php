<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtikelModel;
use App\Models\ArtikelDataModel;



class ArtikelController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $artikelModel = new ArtikelModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['artikel'] = $artikelModel->first();
        
        $artikeldatamodel = new ArtikelDataModel();

        $data['dataartikel'] = $artikeldatamodel->findAll();
        // Kirim data ke view
        return view('Artikel', $data);
    }
}

