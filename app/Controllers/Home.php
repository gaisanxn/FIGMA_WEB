<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Beranda');
    }
    public function tentang(): string
    {
        return view('Tentang');
    }
    public function produk(): string
    {
        return view('Produk');
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
        return view('aktivitas');
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
