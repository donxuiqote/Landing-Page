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
            width: 100vw;
            /* Full viewport width */
            height: 100vh;
            /* Full viewport height */
            overflow: hidden;
            /* Prevent overflow */
        }

        .carousel-item {
            height: 100vh;
            /* Full viewport height */
        }

        .carousel-item img {
            height: 100%;
            /* Ensures the image covers the height of the carousel item */
            width: 100%;
            /* Ensures the image covers the width of the carousel item */
            object-fit: cover;
            /* Maintain aspect ratio while covering the area */
        }

        .carousel-caption {
            display: none;
            /* Hide the caption */
        }

        /* Optional: hide carousel controls if not needed */
        .carousel-control-prev,
        .carousel-control-next {
            display: block;
            /* Show the carousel controls */
        }


    </style>
</head>

<body>
    <!-- Navbar -->

    <?php include 'includes/navbar.php'; ?>

    <!-- Header Slider -->
    <div class="header-slider">
        <div id="schoolCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/tanada.jpeg" class="d-block w-100" alt="Gambar Slider 1">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1920/500?random=2" class="d-block w-100" alt="Gambar Slider 2">
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
    </div>
        <!-- Sambutan Kepala Sekolah -->
        <section class="">
        <div class="container semua-section">
            <div class="row">
                <div class="text-center">
                    <div class="col">
                        <h2>Sambutan Kepala Sekolah</h2>
                    </div>
                    <img src="https://picsum.photos/200/200" alt="Kepala Sekolah" class="my-3 rounded-circle">
                    <p class="text-muted">Nama Kepala Sekolah</p>
                    <p class="lead">Kami berkomitmen untuk menyediakan pendidikan terbaik bagi setiap siswa. Kami percaya bahwa setiap anak memiliki potensi untuk berkembang dengan bimbingan yang tepat.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="container">
            <div class="text-center">
                <h2>Informasi</h2>
            </div>
            <div class="news-container">
                <div class="news-card">
                    <img src="https://picsum.photos/800/400" alt="News Image">
                    <div class="news-card-body">
                        <h3 class="news-title">Judul Berita</h3>
                        <p class="news-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque, justo et facilisis facilisis, nisl quam feugiat erat, ac condimentum lectus tortor non dui. Integer malesuada orci sit amet lacus malesuada, a congue felis pharetra. Aliquam erat volutpat. Vestibulum quis urna vel tortor ornare vehicula ut nec nulla.
                        </p>
                        <div class="news-footer">
                            <a href="#" class="read-more">Read more</a>
                            <span class="date">September 5, 2024</span>
                            
                        </div>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://picsum.photos/800/400" alt="News Image">
                    <div class="news-card-body">
                        <h3 class="news-title">Judul Berita</h3>
                        <p class="news-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque, justo et facilisis facilisis, nisl quam feugiat erat, ac condimentum lectus tortor non dui. Integer malesuada orci sit amet lacus malesuada, a congue felis pharetra. Aliquam erat volutpat. Vestibulum quis urna vel tortor ornare vehicula ut nec nulla.
                        </p>
                        <div class="news-footer">
                            <a href="#" class="read-more">Read more</a>
                            <span class="date">September 5, 2024</span>
                        </div>
                    </div>
                </div>                <div class="news-card">
                    <img src="https://picsum.photos/800/400" alt="News Image">
                    <div class="news-card-body">
                        <h3 class="news-title">Judul Berita</h3>
                        <p class="news-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque, justo et facilisis facilisis, nisl quam feugiat erat, ac condimentum lectus tortor non dui. Integer malesuada orci sit amet lacus malesuada, a congue felis pharetra. Aliquam erat volutpat. Vestibulum quis urna vel tortor ornare vehicula ut nec nulla.
                        </p>
                        <div class="news-footer">
                            <a href="#" class="read-more">Read more</a>
                            <span class="date">September 5, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://picsum.photos/800/400" alt="News Image">
                    <div class="news-card-body">
                        <h3 class="news-title">Judul Berita</h3>
                        <p class="news-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque, justo et facilisis facilisis, nisl quam feugiat erat, ac condimentum lectus tortor non dui. Integer malesuada orci sit amet lacus malesuada, a congue felis pharetra. Aliquam erat volutpat. Vestibulum quis urna vel tortor ornare vehicula ut nec nulla.
                        </p>
                        <div class="news-footer">
                            <a href="#" class="read-more">Read more</a>
                            <span class="date">September 5, 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak berita di sini -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bgm">
        <div class="container py-4 text-center semua-section">
            <div class="">
                <img src="assets/images/logo.png" alt="Logo SMK TANADA" class="logo-tentang">
            </div>
            <h2 class="mt-4">Tentang Kami</h2>
            <p class="">
                SMK TANADA didirikan oleh Yayasan TANADA yang merupakan pengembangan dari TK, MI, MTS, dan MA.
                SMK TANADA hadir dengan metode pembelajaran yang tidak hanya membekali siswa dibidang akademik saja tetapi juga membekali keterampilan dan agama. Pola pendidikan diarahkan pada penggalian potensi siwa secara maksimal dengan memanfaatkan potensi dan fasilitas yang dimiliki siswa. para lulusan betul-betul diproyeksikan pada penguasaan kemampuan dan keterampilan untuk mandiri dan dapat memenangkan persaingan di dunia kerja dan mampu berkarya dalam kehidupan bermasyarakat.
            </p>
        </div>
    </section>




    <!-- Visi & Misi -->
    <section class="">
        <div class="container text-center">
        <h2>Visi & Misi</h2>

            <div class="row mt-4">
                <div class="col-md-6 vimi-card container">
                    . <h3 class="">Visi</h3>
                    <p>Menjadi sekolah unggulan di Sidoarjo dengan menghasilkan lulusan yang takwa, cerdas dan kompetitif.</p>
                </div>
                <div class="col-md-6 vimi-card container">
                    <h3 class="">Misi</h3>
                    <p>
                        Memberikan pendidikan berkualitas yang berorientasi pada perkembangan zaman.
                        Membentuk karakter siswa dengan nilai-nilai moral dan etika.
                        Mengembangkan kreativitas dan potensi siswa dalam berbagai bidang.
                    </p>
                </div>
            </div>
            <div class="container d-flex align-items-center justify-content-center py-4">
                <object data="assets/images/undraw_books_re_8gea.svg" type="image/svg+xml" width="250" height="250"></object>
            </div>
        </div>
    </section>

    <section class="bgm" id="stats">
        <div class="row text-center semua-section">
            <div class="stat col-md-4">
                <h2 id="jumlah-siswa">0</h2>
                <p>Jumlah Siswa</p>
            </div>
            <div class="stat col-md-4">
                <h2 id="tenaga-pendidik">0</h2>
                <p>Tenaga Pendidik</p>
            </div>
            <div class="stat col-md-4">
                <h2 id="tata-usaha">0</h2>
                <p>Tata Usaha</p>
            </div>
        </div>
    </section>

    <section class="program-section">
        <div class="container semua-section">
            <div class="text-center">
                <h2 class="">Program Jurusan</h2>
            </div>
            <div class="row">
                <!-- Usaha Layanan Wisata Card -->
                <div class="col-md-6 mb-4">
                    <div class="program-card">
                        <div class="card-img-top d-flex justify-content-center align-items-center">
                            <object data="assets/images/undraw_adventure_re_ncqp.svg" type="image/svg+xml" width="250" height="250" class="svg-object"></object>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Usaha Layanan Wisata</h5>
                            <p class="card-text"> Menyediakan keterampilan dalam manajemen pariwisata, perencanaan perjalanan, dan pelayanan pelanggan dengan fokus pada pengalaman praktis.</p>
                            <div class="text-end">
                                <a href="#" class="btn btn-program">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desain Komunikasi Visual (DKV) Card -->
                <div class="col-md-6 mb-4">
                    <div class="program-card">
                        <div class="card-img-top d-flex justify-content-center align-items-center">
                            <object data="assets/images/undraw_art_museum_-8-or4.svg" type="image/svg+xml" width="250" height="250" class="svg-object"></object>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Desain Komunikasi Visual (DKV)</h5>
                            <p class="card-text">Program ini fokus pada pengembangan keterampilan desain dan komunikasi visual yang dibutuhkan untuk karier kreatif di berbagai industri.</p>
                            <div class="text-end">
                                <a href="#" class="btn btn-program">Pelajari Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="">
        <div class="semua-section  container">
            <div class="text-center">
                <h2 class="text-center">Galeri Sekolah</h2>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=1" class="img-fluid galeri rounded mb-3" alt="Galeri 1">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=2" class="img-fluid galeri rounded mb-3" alt="Galeri 2">
                </div>
                <div class="col-md-4">
                    <img src="https://picsum.photos/350/250?random=3" class="img-fluid galeri rounded mb-3" alt="Galeri 3">
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


    <script src="javascript/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>