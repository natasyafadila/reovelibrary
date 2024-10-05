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
        <h2 class="mb-4">Rekomendasi Novel Misteri</h2>

        <div class="row">
            <!-- Rekomendasi Novel Misteri 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ms 1.jpg" alt="Sampul Novel Misteri" class="book-cover">
                    <div class="book-info">
                        <h4>Para Pelindung (The Guardians)</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 8 Apr 2022</p>
                        <p>ISBN: 9786020659459</p>
                        <p>Halaman: 440</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Novel Para Pelindung (The Guardians) mengisahkan Quincy Miller yang ditetapkan sebagai pelaku pembunuhan Keith Russo. Tidak ada bukti yang mengarahkan Quincy sebagai pembunuh namun hukum berkata lain. Ia akhirnya dipenjara selama 22 tahun.</p>
                        <a href="https://www.goodreads.com/book/show/61164540-para-pelindung?ref=nav_sb_ss_1_14" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Misteri 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ms 2.jpg" alt="Sampul Novel Misteri" class="book-cover">
                    <div class="book-info">
                        <h4>The Devil All The Time</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Elex Media Komputindo</p>
                        <p>Tanggal Terbit: 28 Feb 2022</p>
                        <p>ISBN: 9786230031236</p>
                        <p>Halaman: 344</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">The Devil All The Time merupakan hasil adaptasi dari novel berjudul sama karya Donald Ray Pollock, yang menelusuri dua generasi antara Perang Dunia II dan Perang Vietnam. Film ini disebut akan memberikan sebuah gambaran menarik sekaligus mengerikan mengenai pertempuran antara keadilan dan kejahatan. Sebagaimana dilansir Vanity Fair, sutradara Antonio Campos telah mengerjakan adaptasi film ini sejak lima tahun lalu.</p>
                        <a href="https://archive.org/details/donaldraypollockthedevilallthetime" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Buku Novel Misteri 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                <img src="/ReoveLibrary/assets/ms 3.jpg" alt="Sampul Novel Misteri" class="book-cover">
                        <h4>Ivanna Van Dijk</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Kawah Media</p>
                        <p>Tanggal Terbit: 12 Jul 2018</p>
                        <p>ISBN: 9786022202752</p>
                        <p>Halaman: 211</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Hantu Belanda berambut pirang itu selalu terlihat marah, gusar, dan mengusir siapa pun yang datang ke rumah. Dia benci orang-orang berwajah Melayu, dia benci perempuan-perempuan cantik, dia benci keluarga manusia yang berbahagia. Namun yang paling parah, dia sangat benci aku. Berulang kali kudengar dia berteriak, "Pergi kau dari sini! Kau sahabat Elizabeth! Kau jahat! Sama seperti perempuan sundal itu!"</p>
                        <a href="https://gilispenpat.org/uploads/File-Buku/CUrR5gep1WgcxeyPFMkc7W41K5y0ODPoPTMIzkjH.pdf" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Misteri 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/ms 4.jpg" alt="Sampul Novel Misteri" class="book-cover">
                    <div class="book-info">
                        <h4>Pembunuhan di Pondokan Mahasiswa - Hickory Dickory Dock</h4>
                        <div class="rating">
                            <p>Rating: ★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 1 Apr 2013</p>
                        <p>ISBN: 9789792294408</p>
                        <p>Halaman: 320</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Cerita ini berhubungan dengan sekretaris Poirot yang cekatan, Miss Lemon. Felicity Lemon yang sangat efisien suatu hari membuat tiga kesalahan saat mengetik surat yang sederhana—yang tidak pernah terjadi sebelumnya. Itu karena Mrs. Hubbard, adiknya yang baru kembali dari Singapura, menjadi matron—pengurus—di pondokan mahasiswa milik Mrs. Nicoletis di Hickory Road.</p>
                        <a href="https://books.google.co.id/books/about/Pembunuhan_di_Pondokan_Mahasiswa.html?id=tey1EAAAQBAJ&redir_esc=y" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
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
