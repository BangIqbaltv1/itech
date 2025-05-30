<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;  // Pastikan model Feedback sudah ada

class FeedbackController extends Controller
{
    // Menampilkan halaman form feedback
    public function create()
    {
        return view('feedback.create');
    }

    // Menyimpan feedback yang diterima
    public function store(Request $request)
    {
        // Validasi input feedback
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan feedback ke database
        Feedback::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Kirim notifikasi sukses atau terima kasih
        return redirect()->route('feedback.create')->with('success', 'Terima kasih atas feedback Anda!');
    }
}
