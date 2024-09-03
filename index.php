<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <section class="header-slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://picsum.photos/800/600?random=1" class="d-block w-100" alt="Gambar Slider 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Sekolah Kami</h5>
                        <p>Menawarkan pendidikan berkualitas untuk masa depan yang lebih baik.</p>
                        <a href="about.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://picsum.photos/800/600?random=2" class="d-block w-100" alt="Gambar Slider 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kualitas Pendidikan Terbaik</h5>
                        <p>Kami menyediakan berbagai program untuk mengembangkan potensi siswa.</p>
                        <a href="programs.php" class="btn btn-primary">Jelajahi Program</a>
                    </div>
                </div>
            </div>
            <!-- Slider Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah Section -->
    <section class="principal-welcome py-5">
        <div class="container">
            <h2 class="text-center">Sambutan Kepala Sekolah</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-center">
                    <img src="https://picsum.photos/150/150" alt="Kepala Sekolah" class="rounded-circle mb-4">
                </div>
                <div class="col-md-8">
                    <p>Selamat datang di sekolah kami! Kami berkomitmen untuk menyediakan pendidikan yang berkualitas tinggi untuk semua siswa kami. Dengan dukungan dari tim pengajar yang berpengalaman dan fasilitas yang lengkap, kami yakin bahwa setiap siswa akan memiliki kesempatan untuk mencapai potensi penuh mereka.</p>
                    <p>Terima kasih atas kepercayaan Anda kepada kami. Kami berharap dapat bekerja sama dengan Anda untuk masa depan yang lebih baik.</p>
                    <p>Hormat kami,</p>
                    <p>Nama Kepala Sekolah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="vision-mission py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Visi & Misi</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Visi</h3>
                    <p>Menjadi lembaga pendidikan terkemuka yang menghasilkan lulusan berkualitas dan berakhlak mulia.</p>
                </div>
                <div class="col-md-6">
                    <h3>Misi</h3>
                    <ul>
                        <li>Menawarkan kurikulum yang inovatif dan relevan dengan perkembangan zaman.</li>
                        <li>Menanamkan nilai-nilai moral dan etika dalam setiap kegiatan pembelajaran.</li>
                        <li>Memberikan fasilitas dan sumber daya terbaik untuk mendukung proses pendidikan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="banner text-center py-5 bg-primary text-white">
        <div class="container">
            <img src="https://picsum.photos/200/300" alt="Banner Sekolah" class="img-fluid mb-4">
            <h1>Selamat Datang di Sekolah Kami</h1>
            <p>Mendidik Generasi Masa Depan dengan Keunggulan</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Sekolah kami didedikasikan untuk memberikan pendidikan berkualitas tinggi kepada semua siswa. Kami memiliki berbagai program pendidikan yang dirancang untuk mengembangkan potensi siswa dalam berbagai bidang.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery py-5 bg-light">
        <div class="container text-center">
            <h2>Galeri Sekolah</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://picsum.photos/200/300" alt="Galeri 1" class="img-fluid mb-4">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/200/300" alt="Galeri 2" class="img-fluid mb-4">
                </div>
                <!-- Tambahkan gambar lainnya di sini -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
