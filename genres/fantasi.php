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
        <h2 class="mb-4">Rekomendasi Novel Fantasi</h2>

        <div class="row">
            <!-- Rekomendasi Buku Fantasi -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fs 5.jpg" alt="Sampul Novel Fantasi" class="book-cover">
                    <div class="book-info">
                        <h4>Harry Potter dan Kamar Rahasia</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama
                        <p>Tanggal Terbit: 1 Nov 2000</p>
                        <p>ISBN: 9789796558520</p>
                        <p>Halaman: 432</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Harry Potter sudah tidak tahan lagi melewati liburan musim panas bersama keluarga Dursley yang menyebalkan, dan dia ingin sekali bisa segera kembali ke Sekolah Sihir Hogwarts. Tetapi tiba-tiba muncul makhluk aneh bernama Dobby, yang melarangnya kembali ke sana. Malapetaka akan menimpa Harry kalau dia berani kembali ke Hogwarts.</p>
                        <a href="https://books.google.co.id/books/about/Harry_Potter_dan_kamar_rahasia.html?id=xVBbEzRjBZoC&redir_esc=y" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Buku Fantasi 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/fs 2.jpg" alt="Sampul Novel Fantasi" class="book-cover">
                    <div class="book-info">
                        <h4>Charlie and The Chocolate Factory</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Noura Books Publishing</p>
                        <p>Tanggal Terbit: 26 Jun 2018</p>
                        <p>ISBN: 9786023853076</p>
                        <p>Halaman: 215</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Willy Wonka, seorang pemilik perusahaan coklat ternama di dunia, memiliki sebuah pabrik coklat luar biasa yang sudah ia tutup dari publik selama 15 tahun lamanya. Pada suatu hari, Willy Wonka mengadakan kontes untuk siapa yang menemukan 5 tiket emas yang diselipkan pada batang coklat yang ia jual, akan mendapat kesempatan untuk masuk dan berkeliling ke dalam pabrik coklat yang terkenal paling luar biasa di dunia.</p>
                        <a href="https://books.google.co.id/books/about/Charlie_and_the_Chocolate_Factory.html?id=TpGWiBzrxhAC&redir_esc=y" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Buku Fantasi 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fs 3.jpg" alt="Sampul Novel Fantasi" class="book-cover">
                    <div class="book-info">
                        <h4>The Bliss Bakery #5: Magic In The Mix</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Noura Books Publishing</p>
                        <p>Tanggal Terbit: 6 Mar 2019</p>
                        <p>ISBN: 9786023853564</p>
                        <p>Halaman:312</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Dua hal yang tak pernah Rose bayangkan adalah bisa terbang ke Italia demi menyelamatkan sang bibi yang diculik oleh Count Caruso, dan menyamar menjadi seorang anggota No Direction, boyband yang paling tenar di dunia.</p>
                        <a href="https://books.google.co.id/books?id=K0N1xwEACAAJ&printsec=copyright&redir_esc=y#v=onepage&q&f=false" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Buku Fiksi Remaja 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/fs 4.jpg" alt="Sampul Novel Fantasi" class="book-cover">
                    <div class="book-info">
                        <h4>Alaia</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Fantasious</p>
                        <p>Tanggal Terbit: 3 Feb 2021</p>
                        <p>ISBN: 9786233100021</p>
                        <p>Halaman: 372</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description"> Alaia merupakan putri yang mulia dari lautan, yang merupakan keturunan dari Raja Siren dan Ratu Mermaid. Menjalani hubungan terlarang. Kutukan akan dipecahkan, menantang permainan alam yang bersembunyi di jantung laut.</p>
                        <a href="https://www.goodreads.com/book/show/57322213-ala-a?ref=nav_sb_ss_3_5" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
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
