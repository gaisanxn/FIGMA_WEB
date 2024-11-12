<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasDataModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AktivitasModel;

class AktivitasController extends BaseController
{
    public function index()
    {


        // Ambil semua data, data akan dikembalikan sebagai object
        // $data['aktivitas'] = $aktivitasModel->first();

        // Inisialisasi model
        $aktivitasModel = new AktivitasModel();
        $data['aktivitas'] = $aktivitasModel->first();


        // Inisialisasi model
        $aktivitasdatamodel = new AktivitasDataModel();
        $data['dataaktivitas'] = $aktivitasdatamodel->findAll();



        // Kirim data ke view
        return view('aktivitas/index', $data);
    }

    public function detail($slug)
    {
        $aktivitasdata = new AktivitasDataModel();
        // Mencari produk berdasarkan slug
        $aktivitas = $aktivitasdata->where('slug', $slug)->first();


        if (!$aktivitas) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Aktivitas dengan slug '{$slug}' tidak ditemukan.");
        }

        $data['aktivitas'] = $aktivitas;
        return view('aktivitas/detail', $data); // Menampilkan detail produk
    }
}
