<?php

namespace App\Controllers;
use App\Models\TentangModel;
use App\Models\ProdukModel;
use App\Models\AktivitasModel;



class Home extends BaseController
{
    public function index(): string
    {
        return view('Beranda');
    }


    public function tentang(): string
    {
       
        $tentangModel = new TentangModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        
        $data['tentang'] = $tentangModel->first();

        // Kirim data ke view
        return view('Tentang', $data);
    }

    
    public function produk(): string
    {
       
        $produkModel = new ProdukModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        
        $data['produk'] = $produkModel->first();

        // Kirim data ke view
        return view('Produk', $data);
    }


    public function drone(): string
    {
        return view('Drone');
    }
    public function mouse(): string
    {
        return view('Mouse');
    }
    public function webcam(): string
    {
        return view('Webcam');
    }
    public function laptop(): string
    {
        return view('laptop');
    }
    public function smartphone(): string
    {
        return view('smartphone');
    }
    public function headset(): string
    {
        return view('headset');
    }
    public function artikel(): string
    {
        return view('artikel');
    }
    public function artikel1(): string
    {
        return view('artikel1');
    }
    public function artikel2(): string
    {
        return view('artikel2');
    }
    public function artikel3(): string
    {
        return view('artikel3');
    }


    public function aktivitas(): string
    {
       
        $aktivitasModel = new AktivitasModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        
        $data['aktivitas'] = $aktivitasModel->first();

        // Kirim data ke view
        return view('Aktivitas', $data);
    }


    public function aktivitas1(): string
    {
        return view('aktivitas1');
    }
    public function aktivitas2(): string
    {
        return view('aktivitas2');
    } 
    public function aktivitas3(): string
    {
        return view('aktivitas3');
    } 
    public function aktivitas4(): string
    {
        return view('aktivitas4');
    } 
    public function kontak(): string
    {
        return view('kontak');
    } 
}
