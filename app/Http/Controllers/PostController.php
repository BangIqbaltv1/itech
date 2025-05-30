<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostinganUser;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Show the form to create a new post
    public function create()
    {
        return view('user.postingan.create');
    }

    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        PostinganUser::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('postingan.index')->with('success', 'Postingan berhasil dibuat.');
    }

    // List posts of authenticated user
    public function index()
    {
        $postingans = PostinganUser::where('user_id', Auth::id())->latest()->get();
        return view('user.postingan.index', compact('postingans'));
    }
}
