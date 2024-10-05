<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReoveLibrary - Rekomendasi Buku SMK 3 Yogyakarta</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>

        /* Gradasi background */
        .gradient-background {
            background: linear-gradient(to right, #a0c4ff, #b3d4ff); /* Kombinasi biru pastel */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        /* Section Beranda */
        #beranda {
            padding: 4rem 0;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            margin-top: 5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
        }

        #beranda h2 {
            font-size: 2.5rem;
            color: #343a40;
            font-weight: bold;
            text-align: center;
        }

        #beranda p {
            font-size: 1.2rem;
            color: #6c757d;
            text-align: center;
        }

        /* Kartu Info */
        .info-card {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
            height: 100%; /* Memastikan tinggi kartu konsisten */
        }

        .info-card:hover {
            transform: translateY(-10px);
        }

        .info-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ff7e5f;
        }

        .info-card h4 {
            font-size: 1.5rem;
            color: #343a40;
        }

        .info-card p {
            font-size: 1rem;
            color: #6c757d;
        }

        .btn {
            background-color: #ff7e5f;
            border: none;
            padding: 10px 20px;
            color: white;
            font-size: 1rem;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #feb47b;
        }

        /* Responsif untuk ukuran kecil */
        @media (max-width: 576px) {
            .info-card {
                padding: 1rem; /* Mengurangi padding untuk perangkat kecil */
            }

            .info-card h4 {
                font-size: 1.3rem; /* Ukuran teks judul lebih kecil */
            }

            .info-card p {
                font-size: 0.9rem; /* Ukuran teks deskripsi lebih kecil */
            }
        }

        /* Style untuk Footer Full-Width */
            .footer-full {
            width: 100%;           /* Lebar penuh */
            padding: 15px 0;       /* Padding atas dan bawah */
            position: relative;     /* Posisi tetap di bagian bawah halaman */
            bottom: 0;
            }

    </style>

</head>
<body class="gradient-background">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ReoveLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ReoveLibrary/pages/tentang.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ReoveLibrary/pages/genre.php">Rekomendasi Novel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ReoveLibrary/pages/kontak.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <!-- Tombol untuk membuka modal konfirmasi logout -->
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Bootstrap untuk konfirmasi logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="/ReoveLibrary/assets/ilus.png" alt="Logo" class="mb-3" style="width: 50px;">
                <p>Apakah kamu yakin ingin keluar dari ReoveLibray?</p>
                <i class="fas fa-exclamation-triangle text-warning" style="font-size: 50px;"></i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <a href="/ReoveLibrary/auth/logout.php" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>



    <!-- Content -->
    <section id="beranda" class="text-center">
        <h2>📚 Selamat Datang di Platform Rekomendasi Novel SMK 3 Yogyakarta.</h2>
        <p>Temukan novel pilihan terbaik yang cocok untukmu!</p>

        <!-- Cards Section -->
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="info-card">
                        <i class="fas fa-book-open"></i>
                        <h4>Rekomendasi Novel</h4>
                        <p>Telusuri koleksi novel terbaik dari berbagai genre yang telah kami pilihkan untukmu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="info-card">
                        <i class="fas fa-info-circle"></i>
                        <h4>Tentang Kami</h4>
                        <p>Pelajari lebih lanjut tentang kami untuk menyediakan rekomendasi novel.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="info-card">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Kontak Kami</h4>
                        <p>Hubungi kami jika memiliki pertanyaan atau membutuhkan informasi lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="genre">
        <?php include 'pages/genre.php'; ?>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
