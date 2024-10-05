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
        }
        .book-cover {
        width: 60%; /* Ubah lebar gambar menjadi 60% */
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
        <h2 class="mb-4">Rekomendasi Novel Fiksi Remaja</h2>

        <div class="row">
            <!-- Rekomendasi Novel Fiksi Remaja 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fks 1.jpg" alt="Sampul Novel Fiksi Remaja" class="book-cover">
                    <div class="book-info">
                        <h4>Funiculi Funicula</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 28 Okt 2022</p>
                        <p>ISBN: 9786020663845</p>
                        <p>Halaman: 200</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Funiculi Funicula, sebuah kafe di gang sempit di Tokyo, masih kerap didatangi orang-orang yang ingin menjelajahi waktu. Peraturan-peraturan yang merepotkan masih berlaku, tetapi itu semua tidak menyurutkan harapan mereka untuk memutar waktu.</p>
                        <a href="https://fliphtml5.com/ucyyf/irlh/Funiculi_Funicula_%28Toshikawa_Kawaguchi%29/#google_vignette" class="btn btn-primary btn-baca" target="_blank">Baca Selengkapnya</a>

                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Fiksi Remaja 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fks 2.jpg" alt="Sampul Novel Fiksi Remaja" class="book-cover">
                    <div class="book-info">
                        <h4>Kekasih Musim Gugur</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 9 Jul 2020</p>
                        <p>ISBN: 9786020642703</p>
                        <p>Halaman: 456</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Namun rahasia seperti warna. Tatap dalam-dalam, dan ia mulai menuturkan selaksa cerita. Kekasih Musim Gugur adalah kisah dua perempuan, Srikandi (Siri) dan Dara. Yang satu seorang seniman kosmopolitan, yang satunya lagi seorang aktivis politik. Siri adalah anak Amba dan Bhisma, tokoh utama novel pertama Laksmi Pamuntjak, Amba.</p>
                        <a href="https://www.goodreads.com/book/show/54261399-kekasih-musim-gugur" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Fiksi Remaja 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fks 3.jpg" alt="Sampul Novel Fiksi Remaja" class="book-cover">
                    <div class="book-info">
                        <h4>Jakarta Sebelum Pagi</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Widiasarana Indonesia</p>
                        <p>Tanggal Terbit: 5 Jun 2016</p>
                        <p>ISBN: 9786023754847</p>
                        <p>Halaman: 380</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Mawar, hyacinth biru, dan melati. Dibawa balon perak, tiga bunga ini diantar setiap hari ke balkon apartemen Emina. Tanpa pengirim, tanpa pesan; hanya kemungkinan adanya stalker mencurigakan yang tahu alamat tempat tinggalnya.</p>
                        <a href="https://archive.org/details/jakarta-sebelum-pagi/page/103/mode/1up" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Fiksi Remaja 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fks 4.jpg" alt="Sampul Novel Fiksi Remaja" class="book-cover">
                    <div class="book-info">
                        <h4>Delicious Lips</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 24 Juli 2022</p>
                        <p>ISBN: 9786020663777</p>
                        <p>Halaman: 224</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Zakia, salah satu siswa teladan di sekolah, si jangkung serius yang nyinyir secukupnya, hidupnya jaya dan nyaris tak bercela. Dia diangkat jadi wakil ketua OSIS, bergabung dengan tim basket putri, dan punya gebetan cowok bermasa depan gemilang bernama Mahaka.</p>
                        <a href="https://www.goodreads.com/book/show/61781166-delicious-lips" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
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
