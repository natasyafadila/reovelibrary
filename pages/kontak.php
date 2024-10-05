<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - ReoveLibrary</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styling untuk header */
        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #2a2a72;
            position: relative;
            margin-bottom: 40px;
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

        /* Pemberitahuan */
        .info-box {
            background-color: #dff9fb;
            padding: 20px;
            border-left: 5px solid #00aaff;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk tabel */
        .table {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        td {
            font-size: 1.1rem;
            padding: 15px;
            vertical-align: middle;
        }

        /* Warna ikon dan teks */
        i {
            color: #00aaff;
            margin-right: 10px;
        }


        /* Styling untuk peta */
        .map-container {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Background warna terang */
        body {
            background-color: #f5f7fa;
        }
    </style>
</head>
<body>

    <?php include('../includes/navbar-genre.php'); ?>

    <!-- Pemberitahuan/Pesan -->
    <div class="container mt-4">
        <div class="info-box">
            <p><strong>Informasi Penting:</strong> Perpustakaan ReoveLibrary akan ditutup pada tanggal 1 Oktober untuk pemeliharaan. Silakan hubungi kami jika ada pertanyaan lebih lanjut.</p>
        </div>
    </div>

    <!-- Container utama -->
    <div class="container mt-5 fade-in">
        <h2 class="text-center">Kontak Kami</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><i class="fas fa-map-marker-alt"></i> Alamat</td>
                        <td>Jl. R.W. Monginsidi No 2, Yogyakarta</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone"></i> Telepon</td>
                        <td>(0274) 513503</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-envelope"></i> Email</td>
                        <td>reovelperpus@smk3yk.sch.id</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-clock"></i> Jam Buka</td>
                        <td>Senin - Kamis: 08.00 - 15.00<br>Sabtu: 08.00 - 14.30</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- Peta Lokasi -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.3832167872193!2d110.3699252153963!3d-7.815316079289374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5747cfb025c5%3A0xd85fa26704a6de15!2sSMK%20Negeri%203%20Yogyakarta!5e0!3m2!1sid!2sid!4v1695788420178!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
