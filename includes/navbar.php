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
                <p>Apakah kamu yakin ingin keluar dari ReoveLibrary?</p>
                <i class="fas fa-exclamation-triangle text-warning" style="font-size: 50px;"></i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <a href="/ReoveLibrary/auth/logout.php" class="btn btn-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>

