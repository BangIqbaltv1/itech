@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Postingan Saya</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($postingans->isEmpty())
        <p>Belum ada postingan.</p>
    @else
        <ul class="list-group">
            @foreach($postingans as $postingan)
                <li class="list-group-item">
                    <h5>{{ $postingan->judul }}</h5>
                    <p>{{ $postingan->konten }}</p>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('postingan.create') }}" class="btn btn-primary mt-3">Buat Postingan Baru</a>
</div>
@endsection
