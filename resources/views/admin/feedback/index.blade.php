@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Data Feedback</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($feedbacks as $fb)
                <tr>
                    <td>{{ $fb->nama }}</td>
                    <td>{{ $fb->email }}</td>
                    <td>{{ $fb->pesan }}</td>
                    <td>
                        <form action="{{ route('admin.feedback.destroy', $fb->id) }}" method="POST" onsubmit="return confirm('Yakin hapus feedback ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Tidak ada feedback.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
