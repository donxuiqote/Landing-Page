<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-slider {
            position: relative;
        }
        .carousel-item img {
            object-fit: cover;
            height: 500px;
        }
        .vision-mission-content {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Header Slider -->
    <section class="header-slider">
        <div id="schoolCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1920/500?random=1" class="d-block w-100" alt="Gambar Slider 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Sekolah Kami</h5>
                        <p>Mendidik generasi masa depan dengan keunggulan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1920/500?random=2" class="d-block w-100" alt="Gambar Slider 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pendidikan Berkualitas</h5>
                        <p>Kami menyediakan program pendidikan terbaik.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section class="container py-5 text-center">
        <h2>Sambutan Kepala Sekolah</h2>
        <p class="lead">Kami berkomitmen untuk menyediakan pendidikan terbaik bagi setiap siswa. Kami percaya bahwa setiap anak memiliki potensi untuk berkembang dengan bimbingan yang tepat.</p>
        <img src="https://picsum.photos/150/150" alt="Kepala Sekolah" class="rounded-circle my-3">
        <p class="text-muted">Nama Kepala Sekolah</p>
    </section>

    <!-- Visi & Misi -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Visi & Misi</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h3>Visi</h3>
                    <p>Menjadi sekolah unggulan yang menghasilkan generasi berakhlak mulia dan berprestasi.</p>
                </div>
                <div class="col-md-6">
                    <h3>Misi</h3>
                    <ul>
                        <li>Memberikan pendidikan berkualitas yang berorientasi pada perkembangan zaman.</li>
                        <li>Membentuk karakter siswa dengan nilai-nilai moral dan etika.</li>
                        <li>Mengembangkan kreativitas dan potensi siswa dalam berbagai bidang.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="container py-5">
        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">Sekolah kami berdedikasi untuk memberikan pendidikan yang berkualitas tinggi kepada semua siswa. Kami memiliki berbagai program yang dirancang untuk mengembangkan potensi siswa dalam berbagai bidang.</p>
    </section>

    <!-- Gallery Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Galeri Sekolah</h2>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=1" class="img-fluid rounded mb-3" alt="Galeri 1">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=2" class="img-fluid rounded mb-3" alt="Galeri 2">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=3" class="img-fluid rounded mb-3" alt="Galeri 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center">
        <p>&copy; 2024 Sekolah Kami. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
