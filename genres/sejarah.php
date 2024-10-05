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
        <h2 class="mb-4">Rekomendasi Novel Sejarah</h2>

        <div class="row">
            <!-- Rekomendasi Novel Sejarah 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/sjr 1.jpg" alt="Sampul Novel Sejarah" class="book-cover">
                    <div class="book-info">
                        <h4>Jejak Dedari</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: GagasMedia</p>
                        <p>Tanggal Terbit: 15 Nov 2016</p>
                        <p>ISBN: 9789797808600</p>
                        <p>Halaman: 340</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Rare terlahir sebagai gadis bisu tuli dan tak dapat mengelak dari takdir kelahirannya yang dianggap sebagai kutukan. Hinaan dan duka sepanjang hidupnya membuat Rare bertekad menjadi seorang penari Sanghyang Dedari. Gairah dan semangatnya menjadi penari Sanghyang Dedari menembus kebisuan. Penari Sanghyang Dedari dipercaya sebagai titisan dewa yang menjelma untuk menyembuhkan duka dan petaka yang memburu hingga anak cucu.</p>
                        <a href="https://www.goodreads.com/book/show/33156649-jejak-dedari?from_search=true&from_srp=true&qid=nYhBYEaE4X&rank=1" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Sejarah 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/sjr 2.jpg" alt="Sampul Novel Sejarah" class="book-cover">
                    <div class="book-info">
                        <h4>Gadis Pantai</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Kpg / Lentera</p>
                        <p>Tanggal Terbit: 1 Jan 2006</p>
                        <p>ISBN: 9789799731203</p>
                        <p>Halaman: 272</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Gadis Pantai adalah novel karya Pramoedya Ananta Toer. Dalam Bahasa Inggris, novel ini dikenal dengan nama The Girl from the Coast. Novel ini memberikan gambaran mengenai situasi feodalisme di daerah Jawa pada zaman dulu. Buku ini juga memiliki ciri khas dari Pramoedya Ananta Toer, yakni menceritakan kisah pernikahan dini dan kritik terhadap situasi sosial. Cerita ini dibuat berdasarkan kisah pernikahan neneknya sendiri.</p>
                        <a href="https://archive.org/details/pramoedya-ananta-toer-gadis-pantai-2000-hasta-mitra/page/n22/mode/1up" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Sejarah 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/sjr 4.jpg" alt="Sampul Novel Sejarah" class="book-cover">
                    <div class="book-info">
                        <h4>Amba</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 1 Sept 2012</p>
                        <p>ISBN: 9786020350219</p>
                        <p>Halaman: 580</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Amba merupakan novel yang mengisahkan kehidupan Amba yang saat itu berusia 18 tahun dan memiliki keinginan untuk mengejar pendidikan ke jenjang yang lebih tinggi. Keinginannya itu bertolak belakang dengan kekhawatiran kedua orang tuanya karena Amba tidak kunjung menikah.</p>
                        <a href="https://books.google.co.id/books?id=DbxsrgEACAAJ&printsec=copyright&redir_esc=y#v=onepage&q&f=false" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Novel Sejarah 4 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="book-card">
                    <img src="/ReoveLibrary/assets/sjr 5.jpg" alt="Sampul Novel Sejarah" class="book-cover">
                    <div class="book-info">
                        <h4>Entrok</h4>
                        <div class="rating">
                            <p>Rating: ★★★★☆</p>
                        </div>
                        <p>Detail Buku:</p>
                        <p>Penerbit: Gramedia Pustaka Utama</p>
                        <p>Tanggal Terbit: 5 Apr 2010</p>
                        <p>ISBN: 9789792255898</p>
                        <p>Halaman: 282</p>
                        <p>Bahasa: Indonesia</p>
                        <p class="sinopsis">Sinopsis:</p>
                        <p class="sinopsis-description">Marni, perempuan Jawa buta huruf yang masih memuja leluhur. Melalui sesajen dia menemukan dewa-dewanya, memanjatkan harapannya. Tak pernah dia mengenal Tuhan yang datang dari negeri nun jauh di sana. Dengan caranya sendiri dia mempertahankan hidup. Menukar keringat dengan sepeser demi sepeser uang. Adakah yang salah selama dia tidak mencuri, menipu, atau membunuh</p>
                        <a href="https://www.goodreads.com/book/show/7876993-entrok?from_search=true&from_srp=true&qid=A9c6cs0MRQ&rank=1" class="btn btn-primary btn-baca">Baca Selengkapnya</a>
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
