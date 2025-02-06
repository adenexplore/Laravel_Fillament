<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 50px;
    }

    h1 {
        color: red;
        font-size: 48px;
    }

    p {
        font-size: 18px;
        color: #555;
    }

    a {
        text-decoration: none;
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
    }

    a:hover {
        background-color: #2980b9;
    }
    </style>
</head>

<body>

    <script>
    Swal.fire({
        icon: 'error',
        title: '404 - Halaman Tidak Ditemukan',
        text: 'Maaf, halaman yang Anda cari tidak tersedia.',
        confirmButtonText: 'Kembali ke Beranda',
        footer: '<a href="/">Klik di sini untuk kembali</a>'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/";
        }
    });
    </script>

    <h1>404</h1>
    <p>Maaf, halaman yang Anda cari tidak ditemukan.</p>
    <a href="/">Kembali ke Beranda</a>

</body>

</html>