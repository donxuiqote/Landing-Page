<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="navbar" style="display: absolute;">
        <div class="container nav">
            <a class="navbar-brand align-items-center" href="/">
                <img src="assets/images/logo.png" class="logo" alt="Logo SMK TANADA">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="visi-misi.html">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="struktur-organisasi.html">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="fasilitas.html">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kompetensi Keahlian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="desain-komunikasi-visual.html">Desain Komunikasi Visual</a></li>
                            <li><a class="dropdown-item" href="usaha-layanan-wisata.html">Usaha Layanan Wisata</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="ekstrakulikuler">Ekstrakulikuler</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PPDB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header text-center">
        <H1>SMK TANADA</H1>
    </div>



    <footer class="footer py-4 bg-footer text-white">
        <div class="mx-4">
            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="footer-contact">
                        <h3>Kontak</h3>
                        <p><strong>Alamat:</strong> Jl. Wadungasri dalam No. 24 Waru Sidoarjo</p>
                        <p><strong>Telepon:</strong> (031)8674429</p>
                        <p><strong>Email:</strong> smk_tanada@yahoo.com</p>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/esemkatanadaofficial/" target="_blank" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://youtube.com" target="_blank" class="text-white me-3"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="mailto:info@sekolah.com" class="text-white me-3"><i class="fas fa-envelope fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h3>Lokasi</h3>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1090937568247!2d112.7617596750004!3d-7.341644592666952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fad5dfbf1d15%3A0x4afa1a07cb929204!2sSMK%20TANADA!5e0!3m2!1sid!2sid!4v1725341436351!5m2!1sid!2sid"
                            width="100%"
                            height="400"  <!-- Adjust height as needed -->
                            style="border:0; border-radius: 8px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 text-center">
            <p>&copy; 2024 Sekolah Kami. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
    <!-- Footer -->
    <!-- <?php include 'includes/footer.php'; ?> -->
    <script src="javascript/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>