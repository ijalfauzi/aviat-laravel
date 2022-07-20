<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function modul()
    {
        return view('home.preview-modul');
    }

    public function demo()
    {
        return view('home.request-demo');
    }

    public function compro()
    {
        return view('home.download-company-profile');
    }

    public function simrs()
    {
        return view('home.sistem-informasi-manajemen-rs');
    }

    public function simklinik()
    {
        return view('home.simklinik-sistem-informasi-manajemen-klinik');
    }

    public function sirem()
    {
        return view('home.sistem-rekam-medis');
    }

    public function telemedis()
    {
        return view('home.telemedis');
    }

    public function ai()
    {
        return view('home.aviat-ai');
    }

    public function kioska()
    {
        return view('home.kioska');
    }
    
}
