<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiksi Remaja - ReoveLibrary</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
       .book-card {
        border: 1px solid #ddd; /* Menambahkan batas pada card */
        border-radius: 5px; /* Sudut melengkung */
        padding: 15px; /* Jarak dalam card */
        height: 100%; /* Memastikan semua card memiliki tinggi yang sama */
        max-width: 300px; /* Membatasi lebar card */
        margin: auto; /* Memusatkan card dalam kolom */
        background-color: #ffffff; /* Warna background putih untuk card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan efek bayangan */
        }
        .book-cover {
        width: 60%; /* Ubah lebar gambar menjadi 60% */
        height: auto; /* Tinggi otomatis untuk mempertahankan rasio */
        margin-bottom: 10px; /* Jarak antara gambar dan informasi buku */
        }
        .book-cover {
            width: 80%; /* Mengatur lebar gambar agar responsif */
            height: auto; /* Tinggi otomatis untuk mempertahankan rasio */
            margin-bottom: 10px; /* Jarak antara gambar dan informasi buku */
        }
        .book-info p {
            text-align: left; /* Menjaga teks tetap rata kiri */
            margin: 0; /* Menghilangkan margin untuk keseragaman */
        }
        .rating {
            text-align: center; /* Memusatkan teks rating */
            margin-bottom: 10px; /* Menambahkan jarak antara rating dan detail buku */
        }
        .sinopsis {
            font-weight: bold; /* Membuat tulisan 'Sinopsis' menjadi bold */
            margin-top: 10px; /* Menambahkan jarak antara detail buku dan sinopsis */
        }
        .sinopsis-description {
            margin-top: 5px; /* Jarak antara tulisan 'Sinopsis' dan deskripsi */
            margin-bottom: 15px; /* Menambahkan jarak bawah untuk keseragaman */
        }
        .btn-baca {
            margin-top: 10px; /* Menambahkan jarak atas pada tombol 'Baca Selengkapnya' */
        } 
    </style>
</head>
<body>

    <?php include('../includes/navbar-genre.php'); ?>

    <div class="container mt-5 text-center">
        <h2 class="mb-4">Rekomendasi Novel Inspiratif</h2>

        <div class="row">
            <!-- Rekomendasi Novel Inspiratif 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ins 1.jpg" alt="Sampul Novel Inspiratif" class="book-cover">
                    <div class="book-info">
                        <h4>Writers & Writing</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Elex Media Komputindo</p>
                        <p>Tanggal Terbit: 18 Mar 2022</p>
                        <p>ISBN: 9786230031359</p>
                        <p>Halaman: 192</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Jika kamu berkeinginan untuk menjadi seorang penulis, atau mungkin hanya sekedar ingin bisa menulis dengan baik, maka buku ini bisa menjadi jawabannya. Melalui buku ini penulis menjelaskan bahwa, tidak ada yang bisa membatasimu untuk menulis tentang apa saja, kecuali dirimu sendiri.</p>
                        <a href="https://books.google.co.id/books/about/Writers_Writing_HC.html?id=iutsEAAAQBAJ&redir_esc=y" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Inspiratif 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ins 2.jpg" alt="Sampul Novel Inspiratif" class="book-cover">
                    <div class="book-info">
                        <h4>Judul To Live - Hidup</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 24 Feb 2015</p>
                        <p>ISBN: 9786020313825
                        </p>
                        <p>Halaman: 221</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Dari seorang anak tuan tanah kaya yang menghabiskan waktu di meja judi dan ranjang pelacur, Fugui kehilangan harta dan orang-orang yang dicintainya. Dia berusaha bertahan hidup di tengah kekejaman perang saudara, absurditas Revolusi Kebudayaan, hingga bencana kelaparan yang melanda China akibat kekeliruan kebijakan Mao. Kisah tragis kehidupan seorang Fugui merangkum kengerian perjalanan sejarah negeri China di tengah ingar bingar revolusi komunis.</p>
                        <a href="URL_LINK_BUKU_2" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Inspiratif 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ins 3.jpg" alt="Sampul Novel Inspiratif" class="book-cover">
                    <div class="book-info">
                        <h4>Who Are You?</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 23 Juni 2021</p>
                        <p>ISBN: 9786020653662</p>
                        <p>Halaman: 256</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Apakah kau tahu bahwa orang yang suka memukul teman di sampingnya ketika tertawa adalah orang yang ingin keberadaannya diakui? Apakah kau tahu bahwa orang yang suka gonta ganti profil medsos sesuai isu terkini sebenarnya kurang pintar bergaul? Apakah kau tahu, barang yang kaumiliki, kebiasaan, dan tindakan sehari-hari yang tak kausadari ternyata bisa menjadi petunjuk isi hati dan kepribadianmu? Pada dasarnya, manusia adalah makhluk sosial. </p>
                        <a href="https://books.google.co.id/books/about/Who_Are_You.html?id=-O5EEAAAQBAJ&redir_esc=y" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Inspiratif4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ins 4.jpg" alt="Sampul Novel Inspiratif" class="book-cover">
                    <div class="book-info">
                        <h4>Moga Bunda Disayang Allah</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: PENERBIT SABAK GRIP</p>
                        <p>Tanggal Terbit: 12 Mei 2021</p>
                        <p>ISBN: 9786239607494</p>
                        <p>Halaman: 312</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Melati, bocah berusia 6 tahun yang awalnya sangat periang dan lucu. Namun, di saat usianya 3 tahun, Melati mulai buta dan tuli. Dunianya pun menjadi gelap gulita dan sunyi. Dia tidak memiliki akses untuk bisa mengenal dunia dan seisinya. Mata, telinga dan semua tertutup baginya. Melati tidak pernah mendapatkan cara untuk mengenal apa yang ingin dikenalnya.</p>
                        <a href="https://fliphtml5.com/nnqnh/wxty/Moga_Bunda_Disayang_Allah_-_Tere_Liye/94/" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
