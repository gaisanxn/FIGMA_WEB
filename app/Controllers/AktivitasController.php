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

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        // Kirim data ke view
        return view('aktivitas/index', $data);

        
    }

    public function detail($slug)
    {
       

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        $aktivitasdata = new AktivitasDataModel();
        // Mencari produk berdasarkan slug
  
        $aktivitas = $aktivitasdata->where('slug', $slug)->orWhere('slug_en', $slug)->first();

        // Cek apakah slug sesuai dengan bahasa yang sedang aktif
        if (($lang === 'id' && $slug !== $aktivitas->slug) || ($lang === 'en' && $slug !== $aktivitas->slug_en)) {
            // Redirect ke URL slug yang benar sesuai bahasa
            $correctSlug = $lang === 'id' ? $aktivitas->slug : $aktivitas->slug_en;
            $correctulr = $lang === 'id' ? 'aktivitas' : 'activities';

            return redirect()->to("$lang/$correctulr/$correctSlug");
        }
       
        

        

        if (!$aktivitas) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Aktivitas dengan slug '{$slug}' tidak ditemukan.");
        }

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        $data['aktivitas'] = $aktivitas;
        return view('aktivitas/detail', $data); // Menampilkan detail produk
    }
}
