<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - ReoveLibrary</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styling untuk bagian header */
        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #2a2a72;
            position: relative;
        }

        /* Tambahkan ornamen garis di bawah judul */
        h2::after {
            content: '';
            width: 150px;
            height: 3px;
            background-color: #00aaff;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hiasan lingkaran di samping paragraf */
        .decorative-circle {
            position: absolute;
            top: -20px;
            left: -30px;
            width: 50px;
            height: 50px;
            background: #00aaff;
            border-radius: 50%;
            z-index: -1;
        }

        .container {
            position: relative;
        }

        /* Styling untuk paragraf */
        p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            text-align: justify;
        }

        /* Efek hover untuk gambar */
        img:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Animasi scroll ke bawah */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            animation: fadeInUp 1s ease-in-out;
        }

        /* Border ornamen di sekitar kontainer */
        .ornament-border {
            border: 2px solid #00aaff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Kutipan motivasi tambahan */
        .quote {
            font-style: italic;
            margin-top: 40px;
            color: #2a2a72;
        }
    </style>
</head>
<body>

    <?php include('../includes/navbar-genre.php'); ?>

    <!-- Container utama -->
    <div class="container mt-5 text-center animate ornament-border">
        <h2 class="mb-4">Tentang ReoveLibrary</h2>
        
        <!-- Tambahkan dekorasi lingkaran kecil di sebelah kiri teks -->
        <div class="row">
            <div class="col-md-6">
                <p class="text-left position-relative">ReoveLibrary, singkatan dari Rekomendasi Novel Library, adalah platform yang dirancang khusus untuk membantu para siswa SMK 3 Yogyakarta dalam menjelajahi berbagai genre novel. Tujuannya adalah memperluas wawasan siswa mengenai beragam pilihan novel yang tersedia. Melalui platform ini, siswa dapat dengan mudah mencari dan menemukan novel yang diinginkan, lengkap dengan informasi detail dari setiap genre yang disediakan.</p>
                <p class="text-left position-relative">"Membaca adalah jendela dunia, dan ReoveLibrary hadir membuka banyak jendela bagi siswa SMK 3 Yogyakarta."</p>
                <div class="decorative-circle"></div>
            </div>
            <!-- Tambahkan ilustrasi atau gambar -->
            <div class="col-md-6">
                <img src="/ReoveLibrary/assets/ilus.png" alt="Ilustrasi Membaca" class="img-fluid" style="border-radius: 10px;">
            </div>
        </div>

        <!-- Teks motivasi tambahan -->
        <p class="quote">"Jelajahi dunia yang tak terbatas melalui kata-kata, dan biarkan imajinasi membawamu ke tempat yang luar biasa."</p>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
