<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itech - Edukasi Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .main-content {
            flex: 1; /* This makes sure the main content takes the remaining space */
        }
        .nav-link {
            font-weight: 500;
        }
        .btn-create {
            background-color: #ffc107;
            color: #000;
            font-weight: bold;
        }
        .itech-logo {
            height: 40px;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/itech.png') }}" alt="itech" class="itech-logo me-2">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarItech">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarItech">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="/course">Programming Edukasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/feedback">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="/quizzes">Daftar Kuis</a></li>
                    <li class="nav-item"><a class="btn btn-create me-2" href="{{ route('postingan.index') }}">Create Post</a></li>

                    @guest
    <li class="nav-item"><a class="btn btn-outline-light me-2" href="{{ route('login') }}">Log In</a></li>
    <li class="nav-item"><a class="btn btn-light" href="{{ route('register') }}">Sign Up</a></li>
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            {{ Auth::user()->name }}
        </a>

        <ul class="dropdown-menu dropdown-menu-end">
            <!-- Link Profile -->
            <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
            
            <!-- Link Logout -->
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a></li>
        </ul>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
@endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten Halaman --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer opsional --}}
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- About Us Column -->
                <div class="col-lg-4 mb-4">
                    <h5 class="text-uppercase mb-4">Tentang Kami</h5>
                    <p>Kami adalah platform pembelajaran programming yang didedikasikan untuk membantu siapa saja menjadi developer handal dengan materi berkualitas dan komunitas yang supportif.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="/courses" class="text-white text-decoration-none">Courses</a></li>
                        <li class="mb-2"><a href="/tutorials" class="text-white text-decoration-none">Tutorials</a></li>
                        <li class="mb-2"><a href="/blog" class="text-white text-decoration-none">Blog</a></li>
                        <li><a href="/contact" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Categories Column -->
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5 class="text-uppercase mb-4">Kategori</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Web Development</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Mobile Apps</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Game Development</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Data Science</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Machine Learning</a></li>
                    </ul>
                </div>

                <!-- Newsletter Column -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <h5 class="text-uppercase mb-4">Newsletter</h5>
                    <p>Dapatkan update terbaru dan materi eksklusif dari kami.</p>
                    <form action="/newsletter/subscribe" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <p class="small">Dengan subscribe, Anda menyetujui <a href="/privacy" class="text-info">Kebijakan Privasi</a> kami.</p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="pt-4 mt-4 border-top border-secondary">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-md-0">&copy; {{ date('Y') }} Learn Programming Is Easy. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline text-center text-md-end mb-0">
                            <li class="list-inline-item"><a href="/terms" class="text-white text-decoration-none small">Terms of Service</a></li>
                            <li class="list-inline-item ms-3"><a href="/privacy" class="text-white text-decoration-none small">Privacy Policy</a></li>
                            <li class="list-inline-item ms-3"><a href="/faq" class="text-white text-decoration-none small">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
