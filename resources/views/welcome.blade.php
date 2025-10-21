<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filament Laravel Documentation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        header {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #4f46e5;
        }

        section {
            padding: 80px 0;
        }

        .code-box {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            font-family: monospace;
            overflow-x: auto;
        }

        footer {
            background-color: #111827;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        footer a {
            color: #a5b4fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-lightning-charge"></i> Filament Docs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#crud">CRUD</a></li>
                    <li class="nav-item"><a class="nav-link" href="#install">Instalasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header id="home">
        <div class="container">
            <h1 class="fw-bold display-4">Panduan Lengkap Filament Admin Laravel</h1>
            <p class="lead mt-3">Buat Dashboard, CRUD, dan Web Aplikasi dengan cepat & mudah menggunakan Filament.</p>
            <a href="#install" class="btn btn-light btn-lg mt-4 shadow-sm"><i class="bi bi-book"></i> Mulai Belajar</a>
        </div>
    </header>

    <!-- Fitur Section -->
    <section id="fitur">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">✨ Fitur Utama Filament</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <i class="bi bi-speedometer2 feature-icon"></i>
                    <h5 class="mt-3">Admin Panel</h5>
                    <p>Panel admin yang responsif, cepat, dan dapat disesuaikan sepenuhnya.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-table feature-icon"></i>
                    <h5 class="mt-3">CRUD Otomatis</h5>
                    <p>Buat Create, Read, Update, Delete hanya dengan 1 perintah Artisan.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-lock feature-icon"></i>
                    <h5 class="mt-3">Autentikasi Aman</h5>
                    <p>Login & proteksi akses bawaan menggunakan middleware Filament.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CRUD Section -->
    <section id="crud" class="bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">🚀 Membuat CRUD di Filament</h2>
                <p class="text-muted">Cukup satu perintah untuk membuat Resource CRUD lengkap.</p>
            </div>

            <div class="code-box mb-4">
                <code>php artisan make:filament-resource Produk</code>
            </div>

            <p>Perintah di atas akan otomatis membuat file resource lengkap untuk model <code>Produk</code>,
                termasuk form input dan tabel data.</p>

            <h5 class="mt-4">🔧 Contoh Form di <code>ProdukResource.php</code>:</h5>
            <div class="code-box">
<pre><code>TextInput::make('nama_produk')->required(),
TextInput::make('harga')->numeric(),
Textarea::make('deskripsi'),</code></pre>
            </div>

            <h5 class="mt-4">📋 Contoh Tabel:</h5>
            <div class="code-box">
<pre><code>TextColumn::make('nama_produk')->sortable()->searchable(),
TextColumn::make('harga')->money('IDR'),
TextColumn::make('created_at')->dateTime(),</code></pre>
            </div>

            <p>Semua data otomatis tampil di dashboard Filament yang bisa diakses di <code>/admin</code>.</p>
        </div>
    </section>

    <!-- Instalasi Section -->
    <section id="install">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">⚙️ Instalasi Filament</h2>
            <p class="text-muted">Langkah cepat untuk mulai menggunakan Filament Admin:</p>

            <div class="code-box text-start mx-auto" style="max-width: 600px;">
<pre><code>composer create-project laravel/laravel project-filament
cd project-filament
composer require filament/filament
php artisan make:filament-user
php artisan serve</code></pre>
            </div>

            <p class="mt-3">Lalu buka <code>http://127.0.0.1:8000/admin</code> dan login menggunakan akun yang kamu buat ✨</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Filament Docs | Dibuat dengan ❤️ oleh <a href="#">Aden Developer</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
