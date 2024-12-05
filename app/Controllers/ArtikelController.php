<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasModel;
use App\Models\ProdukModel;

use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtikelModel;
use App\Models\ArtikelDataModel;



class ArtikelController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $aktivitasModel = new AktivitasModel();

        // Ambil semua data, data akan dikembalikan sebagai object
        $data['aktivitas'] = $aktivitasModel->first();

        // Inisialisasi model
        $produkModel = new ProdukModel();

        // Ambil semua data, data akan dikembalikan sebagai object
        $data['produk'] = $produkModel->first();

        // Inisialisasi model
        $artikelModel = new ArtikelModel();

        // Ambil semua data, data akan dikembalikan sebagai object
        $data['artikel'] = $artikelModel->first();

        $artikeldatamodel = new ArtikelDataModel();

        $data['dataartikel'] = $artikeldatamodel->findAll();

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;


        // Kirim data ke view
        return view('artikel/index', $data);
    }

    public function detail($slug)
    {
        $artikeldata = new ArtikelDataModel();
        // Mencari produk berdasarkan slug
        $artikel = $artikeldata->where('slug', $slug)->orWhere('slug_en', $slug)->first();


        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        // Cek apakah slug sesuai dengan bahasa yang sedang aktif
        if (($lang === 'id' && $slug !== $artikel->slug) || ($lang === 'en' && $slug !== $artikel->slug_en)) {
            // Redirect ke URL slug yang benar sesuai bahasa
            $correctSlug = $lang === 'id' ? $artikel->slug : $artikel->slug_en;
            $correctulr = $lang === 'id' ? 'artikel' : 'article';

            return redirect()->to("$lang/$correctulr/$correctSlug");
        }

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Artikel dengan slug '{$slug}' tidak ditemukan.");
        }

        $data['artikel'] = $artikel;
        return view('artikel/detail', $data); // Menampilkan detail produk

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;
    }
}
