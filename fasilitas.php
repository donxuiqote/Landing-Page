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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- Navbar -->
        <?php include 'includes/navbar.php'; ?>

        <div class="header text-center">
        <H1>SMK TANADA</H1>
    </div>
    <div class=" contents text-center">
        <div class="row py-5">
            <div class="col-md-8">
                <h2 class="mb-4">Fasilitas</h2>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <button class="fasilitas-item row" data-target="#lab-komputer-hardware">
                            <i class="fas fa-desktop col-md-2"></i>
                            <h4 class="col-md-8">Lab. Komputer Hardware</h4>
                        </button>
                        <div class="gallery" id="lab-komputer-hardware">
                            <img src="https://picsum.photos/seed/flower/600/400" alt="Lab Komputer Hardware 1">
                            <img src="https://picsum.photos/seed/flower/600/400" alt="Lab Komputer Hardware 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#lab-komputer-software">
                            <i class="fas fa-laptop-code col-md-2"></i>
                            <h4 class="col-md-8">Lab. Komputer Software</h4>
                        </button>
                        <div class="gallery" id="lab-komputer-software">
                            <img src="https://picsum.photos/600/400?random=3" alt="Lab Komputer Software 1">
                            <img src="https://picsum.photos/600/400?random=4" alt="Lab Komputer Software 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#lab-bahasa">
                            <i class="fas fa-language col-md-2"></i>
                            <h4 class="col-md-8">Lab. Bahasa</h4>
                        </button>
                        <div class="gallery" id="lab-bahasa">
                            <img src="https://picsum.photos/600/400?random=5" alt="Lab Bahasa 1">
                            <img src="https://picsum.photos/600/400?random=6" alt="Lab Bahasa 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#multimedia">
                            <i class="fas fa-video col-md-2"></i>
                            <h4 class="col-md-8">Multimedia</h4>
                        </button>
                        <div class="gallery" id="multimedia">
                            <img src="https://picsum.photos/600/400?random=7" alt="Multimedia 1">
                            <img src="https://picsum.photos/600/400?random=8" alt="Multimedia 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#lapangan-olah-raga">
                            <i class="fas fa-football-ball col-md-2"></i>
                            <h4 class="col-md-8">Lapangan Olah Raga</h4>
                        </button>
                        <div class="gallery" id="lapangan-olah-raga">
                            <img src="https://picsum.photos/600/400?random=9" alt="Lapangan Olah Raga 1">
                            <img src="https://picsum.photos/600/400?random=10" alt="Lapangan Olah Raga 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#masjid">
                            <i class="fas fa-mosque col-md-2"></i>
                            <h4 class="col-md-8">Masjid</h4>
                        </button>
                        <div class="gallery" id="masjid">
                            <img src="https://picsum.photos/600/400?random=11" alt="Masjid 1">
                            <img src="https://picsum.photos/600/400?random=12" alt="Masjid 2">
                        </div>
                        <button class="fasilitas-item row" data-target="#perpustakaan">
                            <i class="fas fa-book col-md-2"></i>
                            <h4 class="col-md-8">Perpustakaan</h4>
                        </button>
                        <div class="gallery" id="perpustakaan">
                            <img src="https://picsum.photos/600/400?random=13" alt="Perpustakaan 1">
                            <img src="https://picsum.photos/600/400?random=14" alt="Perpustakaan 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 vertical-line ">
                <h2>Informasi</h2>
                <div class="row Informasi my-4">
                    <div class="col  mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col">
                        <p class="judul-informasi">Kedatangan SMK Tanada Wadung Asri ke Prodi D4 Destinasi Pariwisata FV UNAIR</p>
                        <p class="news-content content-informasi">Program Studi D4 Destinasi Pariwisata Vokasi Unair mendapat kesempatan kunjungan dari SMK Tanada Jurusan Pariwisata. Kunjungan tersebut disambut baik oleh Kepala Departemen Bisnis, Emma Suriani, S.Sos., M.Si. Beliau menyampaikan untuk memberikan kesempatan kepada pihak SMK Tanada untuk lebih mengenal mengenai prodi Destinasi Pariwisata dan beliau juga memperkenalkan dosen-dosen dari prodi Pariwisata untuk mengambil alih acara. </p><!--  -->
                        <div class="news-footer py-1 m-0">
                            <a href="#" class="read-more-informasi">Selengkapnya</a>
                            <span class="date-informasi">5 September 2024</span>
                        </div>
                    </div>
                </div>
                <div class="row Informasi my-4">
                    <div class="col  mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col">
                        <p class="judul-informasi">Kedatangan SMK Tanada Wadung Asri ke Prodi D4 Destinasi Pariwisata FV UNAIR</p>
                        <p class="news-content content-informasi">Program Studi D4 Destinasi Pariwisata Vokasi Unair mendapat kesempatan kunjungan dari SMK Tanada Jurusan Pariwisata. Kunjungan tersebut disambut baik oleh Kepala Departemen Bisnis, Emma Suriani, S.Sos., M.Si. Beliau menyampaikan untuk memberikan kesempatan kepada pihak SMK Tanada untuk lebih mengenal mengenai prodi Destinasi Pariwisata dan beliau juga memperkenalkan dosen-dosen dari prodi Pariwisata untuk mengambil alih acara. </p><!--  -->
                        <div class="news-footer p-0 m-0">
                            <a href="#" class="read-more-informasi">Selengkapnya</a>
                            <span class="date-informasi">5 September 2024</span>
                        </div>
                    </div>
                </div>
                <div class="row Informasi my-4">
                    <div class="col  mb-2">
                        <img src="https://picsum.photos/150/100" alt="Kepala Sekolah" class="mr-3">
                    </div>
                    <div class="col">
                        <p class="judul-informasi">Kedatangan SMK Tanada Wadung Asri ke Prodi D4 Destinasi Pariwisata FV UNAIR</p>
                        <p class="news-content content-informasi">Program Studi D4 Destinasi Pariwisata Vokasi Unair mendapat kesempatan kunjungan dari SMK Tanada Jurusan Pariwisata. Kunjungan tersebut disambut baik oleh Kepala Departemen Bisnis, Emma Suriani, S.Sos., M.Si. Beliau menyampaikan untuk memberikan kesempatan kepada pihak SMK Tanada untuk lebih mengenal mengenai prodi Destinasi Pariwisata dan beliau juga memperkenalkan dosen-dosen dari prodi Pariwisata untuk mengambil alih acara. </p><!--  -->
                        <div class="news-footer p-0 m-0">
                            <a href="#" class="read-more-informasi">Selengkapnya</a>
                            <span class="date-informasi">5 September 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>



    <!-- Footer -->

    <script src="javascript/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>