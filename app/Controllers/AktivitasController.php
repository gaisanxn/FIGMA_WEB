<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasDataModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AktivitasModel;
use App\Models\ArtikelDataModel;
use App\Models\ArtikelModel;

class AktivitasController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $aktivitasModel = new AktivitasModel();
        
        // Inisialisasi model
        $artikelModel = new ArtikelModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['artikel'] = $artikelModel->first();

        // Ambil semua data, data akan dikembalikan sebagai object
        $data['aktivitas'] = $aktivitasModel->first();

        $aktivitasdatamodel = new AktivitasDataModel();

        $data['dataaktivitas'] = $aktivitasdatamodel->findAll();
        
        $artikeldatamodel = new ArtikelDataModel();

        $data['dataartikel'] = $artikeldatamodel->findAll();

        // Kirim data ke view
        return view('aktivitas/index', $data);
    }
}