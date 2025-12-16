<?php
include "layout/header.php";
include "layout/sidebar.php";
?>

<div class="content">
    <div class="card">
        <h2>Selamat Datang 👋</h2>
        <p>
            Sistem Pemesanan Kopi adalah aplikasi sederhana berbasis PHP
            untuk mengelola data pelanggan, menu kopi, pemesanan,
            dan pembayaran.
        </p>

        <hr style="margin:15px 0">

        <h3>Menu Utama</h3>
        <div style="display:flex; gap:15px; margin-top:15px; flex-wrap:wrap;">
            <a href="pelanggan/index.php" class="btn">👤 Data Pelanggan</a>
            <a href="menu/index.php" class="btn">☕ Menu Kopi</a>
            <a href="pesanan/index.php" class="btn">🧾 Pemesanan</a>
            <a href="pembayaran/index.php" class="btn">💰 Pembayaran</a>
        </div>
    </div>
</div>

<?php include "layout/footer.php"; ?>
