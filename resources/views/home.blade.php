@extends('layouts.app') {{-- Use main layout --}}

@section('content')

<style>
    .hero-section {
        background-image: url('{{ asset('images/bag.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 50vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
    }
    </style>
    
<!-- Hero Section -->
<div class="bg-primary text-white py-5">
    <div class="hero-section">
    <h1 class="fw-bold">LEARN PROGRAMMING <span style="color:#00f2ff">IS EASY</span></h1>
    <p>Dengan mempelajari programming kamu dapat menciptakan banyak hal yang luar biasa</p>
</div>

</div>

<!-- Technology Icons Section -->
<div class="row text-center justify-content-center g-4">
    {{-- C# --}}
    <div class="col-md-2 col-6">
        <a href="(', 'csharp') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/C.png') }}" class="img-fluid" alt="C#">
                    <p class="mt-2 mb-0 small">C#</p>
                </div>
            </div>
        </a>
    </div>

    {{-- Laravel --}}
    <div class="col-md-2 col-6">
        <a href="(', 'laravel') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/laravel.png') }}" class="img-fluid" alt="Laravel">
                    <p class="mt-2 mb-0 small">Laravel</p>
                </div>
            </div>
        </a>
    </div>

    {{-- Godot --}}
    <div class="col-md-2 col-6">
        <a href="(', 'godot') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/godot.png') }}" class="img-fluid" alt="Godot">
                    <p class="mt-2 mb-0 small">Godot</p>
                </div>
            </div>
        </a>
    </div>

    {{-- Python --}}
    <div class="col-md-2 col-6">
        <a href="(', 'python') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/python.png') }}" class="img-fluid" alt="Python">
                    <p class="mt-2 mb-0 small">Python</p>
                </div>
            </div>
        </a>
    </div>

    {{-- Java --}}
    <div class="col-md-2 col-6">
        <a href="(', 'java') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/java.png') }}" class="img-fluid" alt="Java">
                    <p class="mt-2 mb-0 small">Java</p>
                </div>
            </div>
        </a>
    </div>

    {{-- Web Development --}}
    <div class="col-md-2 col-6">
        <a href="(', 'web-development') }}" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('images/html.jpg') }}" class="img-fluid" alt="Web Development">
                    <p class="mt-2 mb-0 small">Web Development</p>
                </div>
            </div>
        </a>
    </div>
</div>



<!-- Feature Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                        <h4>Belajar Sesuai Level</h4>
                        <p>Materi disusun dari pemula hingga mahir, sesuai dengan kemampuan Anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
                        <h4>Project-Based Learning</h4>
                        <p>Belajar langsung dengan membuat proyek nyata untuk portofolio Anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x text-primary mb-3"></i>
                        <h4>Komunitas Supportif</h4>
                        <p>Bergabung dengan komunitas untuk diskusi dan berbagi pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection