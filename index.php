<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sekolah</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <section class="header-slider">
    <div class="slider-container">
        <div class="slider-wrapper">
            <!-- Slide 1 -->
            <div class="slider-slide">
                <div class="slider-image">
                    <img src="https://picsum.photos/800/600?random=1" alt="Gambar Slider 1">
                </div>
                <div class="slider-text">
                    <h1>Selamat Datang di Sekolah Kami</h1>
                    <p>Menawarkan pendidikan berkualitas untuk masa depan yang lebih baik.</p>
                    <a href="about.php" class="btn-learn-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slider-slide">
                <div class="slider-image">
                    <img src="https://picsum.photos/800/600?random=2" alt="Gambar Slider 2">
                </div>
                <div class="slider-text">
                    <h1>Kualitas Pendidikan Terbaik</h1>
                    <p>Kami menyediakan berbagai program untuk mengembangkan potensi siswa.</p>
                    <a href="programs.php" class="btn-learn-more">Jelajahi Program</a>
                </div>
            </div>
        </div>
        <!-- Slider Controls -->
        <button class="slider-control prev">&#10094;</button>
        <button class="slider-control next">&#10095;</button>
    </div>
</section>

<!-- Sambutan Kepala Sekolah Section -->
<section class="principal-welcome">
    <div class="container">
        <h2>Sambutan Kepala Sekolah</h2>
        <div class="principal-welcome-content">
            <img src="https://picsum.photos/150/150" alt="Kepala Sekolah" class="principal-image">
            <div class="principal-text">
                <p>Selamat datang di sekolah kami! Kami berkomitmen untuk menyediakan pendidikan yang berkualitas tinggi untuk semua siswa kami. Dengan dukungan dari tim pengajar yang berpengalaman dan fasilitas yang lengkap, kami yakin bahwa setiap siswa akan memiliki kesempatan untuk mencapai potensi penuh mereka.</p>
                <p>Terima kasih atas kepercayaan Anda kepada kami. Kami berharap dapat bekerja sama dengan Anda untuk masa depan yang lebih baik.</p>
                <p>Hormat kami,</p>
                <p>Nama Kepala Sekolah</p>
            </div>
        </div>
    </div>
</section>


<!-- Visi & Misi Section -->
<section class="vision-mission">
    <div class="container">
        <h2>Visi & Misi</h2>
        <div class="vision-mission-content">
            <div class="vision">
                <h3>Visi</h3>
                <p>Menjadi lembaga pendidikan terkemuka yang menghasilkan lulusan berkualitas dan berakhlak mulia.</p>
            </div>
            <div class="mission">
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
    <section class="banner">
        <img src="https://picsum.photos/200/300" alt="Banner Sekolah" class="banner-image">
        <div class="banner-text">
            <h1>Selamat Datang di Sekolah Kami</h1>
            <p>Mendidik Generasi Masa Depan dengan Keunggulan</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <h2>Tentang Kami</h2>
        <p>Sekolah kami didedikasikan untuk memberikan pendidikan berkualitas tinggi kepada semua siswa. Kami memiliki berbagai program pendidikan yang dirancang untuk mengembangkan potensi siswa dalam berbagai bidang.</p>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <h2>Galeri Sekolah</h2>
        <div class="gallery-images">
            <img src="https://picsum.photos/200/300" alt="Galeri 1" class="gallery-img">
            <img src="https://picsum.photos/200/300" alt="Galeri 2" class="gallery-img">
            <!-- Tambahkan gambar lainnya di sini -->
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Kontak Kami</h2>
        <form action="contact-form/process-form.php" method="post" class="contact-form">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="pesan" placeholder="Pesan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const sliderWrapper = document.querySelector('.slider-wrapper');
        let currentIndex = 0;

        function updateSlider() {
            const slideWidth = sliderWrapper.children[0].getBoundingClientRect().width;
            sliderWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < sliderWrapper.children.length - 1) {
                currentIndex++;
                updateSlider();
            }
        });

        // Set initial position
        updateSlider();
    });
</script>

</body>
</html>
