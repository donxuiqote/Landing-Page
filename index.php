<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    </section class="content">
    <!-- Header Slider -->
    <section class="header-slider">
        <div id="schoolCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1920/500?random=1" class="d-block w-100" alt="Gambar Slider 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Sekolah Kami</h5>
                        <p>Mendidik generasi masa depan dengan keunggulan.</p>
                        <a class="button" href="#">Oke</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1920/500?random=2" class="d-block w-100" alt="Gambar Slider 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pendidikan Berkualitas</h5>
                        <p>Kami menyediakan program pendidikan terbaik.</p>
                        <a class="button" href="#">Oke</a>
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
    <section class="container my-5 ">
        <div class="row">
            <div class="col-md-6 mb-4 py-5">
                <h2>Sambutan Kepala Sekolah</h2>
                <img src="https://picsum.photos/150/150" alt="Kepala Sekolah" class="my-3">
                <p class="text-muted">Nama Kepala Sekolah</p>
                <p class="lead">Kami berkomitmen untuk menyediakan pendidikan terbaik bagi setiap siswa. Kami percaya bahwa setiap anak memiliki potensi untuk berkembang dengan bimbingan yang tepat.</p>
            </div>
            <div class="col-md-6 mb-4 py-5 vertical-line">
                <h2>Informasi</h2>
                <div class="row">
                    <div class="col-md-6 order-md-2 mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Komfp.</p>
                        <p class="text-muted">Nama Kepala Sekolah</p><!--  -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-md-2 mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Komfp.</p>
                        <p class="text-muted">Nama Kepala Sekolah</p><!--  -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-md-2 mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Komfp.</p>
                        <p class="text-muted">Nama Kepala Sekolah</p><!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="container pb-4">
        <h2 class="text-center mt-4">Tentang Kami</h2>
        <p class="text-center">

            SMK TANADA didirikan oleh Yayasan TANADA yang merupakan pengembangan dari TK, MI, MTS, dan MA.

            SMK TANADA hadir dengan metode pembelajaran yang tidak hanya membekali siswa dibidang akademik saja tetapi juga membekali keterampilan dan agama. Pola pendidikan diarahkan pada penggalian potensi siwa secara maksimal dengan memanfaatkan potensi dan fasilitas yang dimiliki siswa. para lulusan betul-betul diproyeksikan pada penguasaan kemampuan dan keterampilan untuk mandiri dan dapat memenangkan persaingan di dunia kerja dan mampu berkarya dalam kehidupan bermasyarakat.</p>
    </section>

    <!-- Visi & Misi -->
    <section class="bg-light ">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <h3 class="text-center">Visi</h3>
                    <p>Menjadi sekolah unggulan di Sidoarjo dengan menghasilkan lulusan yang takwa, cerdas dan kompetitif.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Misi</h3>
                    <ul>
                        <li>Memberikan pendidikan berkualitas yang berorientasi pada perkembangan zaman.</li>
                        <li>Membentuk karakter siswa dengan nilai-nilai moral dan etika.</li>
                        <li>Mengembangkan kreativitas dan potensi siswa dalam berbagai bidang.</li>
                    </ul>
                </div>
            </div>
            <div class="container d-flex align-items-center justify-content-center py-4">
                <object data="assets/images/undraw_books_re_8gea.svg" type="image/svg+xml" width="250" height="250"></object>
            </div>
        </div>
    </section>



    <section class="program-section">
        <div class="container">
            <h2 class="text-center mb-4">Program Jurusan</h2>
            <div class="row">
                <!-- Usaha Layanan Wisata Card -->
                <div class="col-md-6 mb-4">
                    <div class="card program-card">
                        <div class="card-img-top d-flex justify-content-center align-items-center">
                            <object data="assets/images/undraw_adventure_re_ncqp.svg" type="image/svg+xml" width="250" height="250" class="svg-object"></object>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Usaha Layanan Masyarakat</h5>
                            <p class="card-text">Program ini fokus pada pengembangan keterampilan desain dan komunikasi visual yang dibutuhkan untuk karier kreatif di berbagai industri.</p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <!-- Desain Komunikasi Visual (DKV) Card -->
                <div class="col-md-6 mb-4">
                    <div class="card program-card">
                        <div class="card-img-top d-flex justify-content-center align-items-center">
                            <object data="assets/images/undraw_art_museum_-8-or4.svg" type="image/svg+xml" width="250" height="250" class="svg-object"></object>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desain Komunikasi Visual (DKV)</h5>
                            <p class="card-text">Program ini fokus pada pengembangan keterampilan desain dan komunikasi visual yang dibutuhkan untuk karier kreatif di berbagai industri.</p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=4" class="img-fluid rounded mb-3" alt="Galeri 1">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=5" class="img-fluid rounded mb-3" alt="Galeri 2">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=2" class="img-fluid rounded mb-3" alt="Galeri 3">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=10" class="img-fluid rounded mb-3" alt="Galeri 1">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=34" class="img-fluid rounded mb-3" alt="Galeri 2">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=3" class="img-fluid rounded mb-3" alt="Galeri 3">
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>