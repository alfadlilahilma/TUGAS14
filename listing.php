<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listing Produk | AdminLTE</title>
    <!-- Tambahkan link ke stylesheet AdminLTE jika diperlukan -->
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Tambahkan header, sidebar, dan konten listing produk sesuai dengan AdminLTE -->
    <header class="main-header">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-white navbar-light">
            <!-- Links, user profile, dll. -->
        </nav>
    </header>
    
    <aside class="main-sidebar">
        <!-- Sidebar Content -->
    </aside>
    
    <div class="content-wrapper">
        <!-- Konten Listing Produk -->
        <section class="content">
            <div class="container-fluid">
               
        <!DOCTYPE html>
<html>
<head>
    <title>DEALER MOTOR</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Selamat Datang di Dealer Motor DALF</h1>
    <h3>Kami Siap Melayani Dengan Baik</h3>
    <h5>Berikut Daftar Produk Kami : </h5>

    <div class="product-container">
        <div class="product-card">
            <img src="CBR1.jpg" alt="Produk 1">
            <div class="product-details">
                <h2>CB150R 2013 </h2>
                <p>Deskripsi produk 1.</p>
                <p>Warna: Merah </p>
                <p>Tipe Rangka: Diamond Steel 
                <p>Harga: Rp 22.350.000</p>

            </div>
        </div>

        <div class="product-card">
            <img src="pcx.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Nmax</h2>
                <p>Deskripsi produk 2.</p>
                <p>Warna: Merah </p>
                <p>kapasitas: 155cc </p>
                <p>Harga: Rp 31.420.000</p>
            </div>
        </div>

        <div class="product-card">
            <img src="vario1.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Honda Vario 160</h2>
                <p>Deskripsi produk 3.</p>
                <p>Warna: Merah </p>
                <p>kapasitas: 156.9cc </p>
                <p>Harga: Rp 26.640.000</p>
            </div>
        </div>

        <div class="product-card">
            <img src="beat.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Honda Beat </h2>
                <p>Deskripsi produk 4.</p>
                <p>Warna: Merah </p>
                <p>Tipe rangka: Tulang Punggung e-SAF </p>
                <p>Harga: Rp 26.640.000</p>
            </div>
        </div>

        <div class="product-card">
            <img src="scoopy.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Honda Scoopy Stylish Red Smart Key</h2>
                <p>Deskripsi produk 5.</p>
                <p>Warna: Merah </p>
                <p>Tipe Rangka: Underbone - eSAF </p>
                <p>Harga: Rp 23.302.000</p>
            </div>
        </div>

         <div class="product-card">
            <img src="aerox.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Yamaha Aerox</h2>
                <p>Deskripsi produk 6.</p>
                <p>Warna: Merah </p>
                <p>Tipe Rangka: Underbone </p>
                <p>Harga: Rp 30.960.000</p>
            </div>
        </div>

         <div class="product-card">
            <img src="megapro.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Honda MegaPro PGM-FI</h2>
                <p>Deskripsi produk 7.</p>
                <p>Warna: Merah </p>
                <p>Kapasitas : 150cc </p>
                <p>Harga: Rp 20.000.000</p>
            </div>
        </div>

         <div class="product-card">
            <img src="revo.jpg" alt="Produk 2">
            <div class="product-details">
                <h2>Honda Revo </h2>
                <p>Deskripsi produk 8.</p>
                <p>Warna: Merah </p>
                <p>Tipe Rangka : Tulang Punggung </p>
                <p>Harga: Rp 16.000.000</p>
            </div>
        </div>


        <!-- Tambahkan produk lainnya sesuai kebutuhan -->
    </div>
    // Menampilkan daftar produk
    echo "<ul>";
    foreach ($produk as $p) {
        echo "<li>{$p['nama']} - Rp{$p['harga']}</li>";
    }
    echo "</ul>";
    ?>

    <footer class="main-footer">
        <!-- Footer Content -->
    </footer>
</div>
<!-- Tambahkan script dan library yang diperlukan di sini -->
<script src="path/to/adminlte/js/adminlte.min.js"></script>
</body>
</html>
