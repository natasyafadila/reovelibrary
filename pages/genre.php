<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre - ReoveLibrary</title>
    <link rel="stylesheet" href="/ReoveLibrary/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #f3f4f6);
        }

        .genre-card {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 220px;
            margin: 10px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
        }

        .genre-card:hover {
            background-color: #e2e6ea;
            background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .genre-icon {
            font-size: 30px;
            margin-right: 15px;
            color: #ff7e5f;
            transition: transform 0.5s ease-in-out;
        }

        .genre-card:hover .genre-icon {
            transform: rotate(360deg);
        }

        .genre-card h5 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .book-card {
            margin: 20px;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-align: center;
        }

        .book-cover {
            width: 100%;
            height: auto;
        }

        .hidden {
            display: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            animation: fadeIn 1s ease-in-out;
        }

        /* Ornamen Dekoratif */
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            position: relative;
            display: inline-block;
            margin-bottom: 1.5rem;
        }

        .section-title::before {
            content: "📚";
            font-size: 2.5rem;
            color: #ff7e5f;
            position: absolute;
            left: -3rem;
            top: 50%;
            transform: translateY(-50%);
        }

        .section-title::after {
            content: "✨";
            font-size: 1.5rem;
            color: #ff7e5f;
            position: absolute;
            right: -2rem;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Tambahkan sedikit animasi hover pada genre */
        .genre-card:hover h5 {
            text-shadow: 1px 1px 10px rgba(255, 126, 95, 0.5);
        }

    </style>
</head>
<body>

    <div class="container mt-5 text-center">
        <h2 class="section-title mb-4">Rekomendasi Genre Novel</h2>
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <a href="/ReoveLibrary/genres/fiksi-remaja.php" class="genre-card">
                    <i class="fas fa-book-open genre-icon"></i>
                    <h5>Fiksi Remaja</h5>
                </a>
                <a href="/ReoveLibrary/genres/fantasi.php" class="genre-card">
                    <i class="fas fa-magic genre-icon"></i>
                    <h5>Fantasi</h5>
                </a>
                <a href="/ReoveLibrary/genres/sejarah.php" class="genre-card">
                    <i class="fas fa-landmark genre-icon"></i>
                    <h5>Sejarah</h5>
                </a>
                <a href="/ReoveLibrary/genres/inspiratif.php" class="genre-card">
                    <i class="fas fa-lightbulb genre-icon"></i>
                    <h5>Inspiratif</h5>
                </a>
                <a href="/ReoveLibrary/genres/misteri.php" class="genre-card">
                    <i class="fas fa-mask genre-icon"></i>
                    <h5>Misteri</h5>
                </a>
            </div>
        </div>
    </div>

    <!-- Genre content sections -->
    <div id="fantasi" class="genre-content hidden">
        <!-- Content Fantasi -->
    </div>

    <div id="sejarah" class="genre-content hidden">
        <!-- Content Sejarah -->
    </div>

    <div id="inspiratif" class="genre-content hidden">
        <!-- Content Inspiratif -->
    </div>

    <div id="misteri" class="genre-content hidden">
        <!-- Content Misteri -->
    </div>

    <div id="fiksi remaja" class="genre-content hidden">
        <!-- Content Fiksi Remaja -->
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showGenre(genreId) {
            // Sembunyikan semua konten genre
            const genres = document.querySelectorAll('.genre-content');
            genres.forEach(genre => genre.classList.add('hidden'));
            
            // Tampilkan genre yang dipilih
            const selectedGenre = document.getElementById(genreId);
            selectedGenre.classList.remove('hidden');
        }
    </script>
    
</body>
</html>
