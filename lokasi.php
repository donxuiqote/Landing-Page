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
    <section class="navbar">
        <?php include 'includes/navbar.php'; ?>

    </section>

    <!-- Location -->
    <section class="location-section">
    <div class="location">
        <h2>Lokasi Kami</h2>
        <p class="address">Alamat: Jl. Raya Wadung Asri Dalam No.24, Wadungasri Dalem, Wadungasri, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256</p>
        <p>Jam Operasional</p>
        <ul class="no-bullets">
            <li>Senin   : 06.30-15.15 </li>
            <li>Selasa  : 06.30-15.15 </li>
            <li>Rabu    : 06.30-15.00 </li>
            <li>Kamis   : 06.30-15.00 </li>
            <li>Jumat   : 06.30-11.00 </li>
        </ul>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1090937568247!2d112.7617596750004!3d-7.341644592666952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fad5dfbf1d15%3A0x4afa1a07cb929204!2sSMK%20TANADA!5e0!3m2!1sid!2sid!4v1725341436351!5m2!1sid!2sid"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center ">
        <p>&copy; 2024 Sekolah Kami. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>