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

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;
        
        // Kirim data ke view
        return view('produk/index', $data);
    }

    public function detail($slug)
    {
        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;
        

        $produkdata = new ProdukDataModel();
        // Mencari produk berdasarkan slug
        $produk = $produkdata->where('slug', $slug)->orWhere('slug_en', $slug)->first();

        // Cek apakah slug sesuai dengan bahasa yang sedang aktif
        if (($lang === 'id' && $slug !== $produk->slug) || ($lang === 'en' && $slug !== $produk->slug_en)) {
            // Redirect ke URL slug yang benar sesuai bahasa
            $correctSlug = $lang === 'id' ? $produk->slug : $produk->slug_en;
            $correctulr = $lang === 'id' ? 'produk' : 'product';
           
            return redirect()->to("$lang/$correctulr/$correctSlug");
        }

        
        if (!$produk) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Produk dengan slug '{$slug}' tidak ditemukan.");
        }
        
        $data['produk'] = $produk;
        return view('produk/detail', $data); // Menampilkan detail produk
        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;
    }

}
