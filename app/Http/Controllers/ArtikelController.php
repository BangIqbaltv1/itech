<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; // Pastikan model Artikel sudah ada

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $artikels = Artikel::latest()->paginate(5);
        return view('artikel.index', compact('artikels'));
    }

    // Menampilkan detail artikel berdasarkan slug
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        return view('artikel.show', compact('artikel'));
    }
}

