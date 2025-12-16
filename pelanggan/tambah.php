<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";

$db = new Database();

if (isset($_POST['simpan'])) {
    $db->query("INSERT INTO pelanggan VALUES(
        NULL,
        '$_POST[nama]',
        '$_POST[nomor_hp]'
    )");
    header("Location:index.php");
}
?>

<div class="content">
<div class="card">
<h2>Tambah Pelanggan</h2>

<form method="post">
    Nama
    <input name="nama" required>

    Nomor HP
    <input name="nomor_hp" required>

    <button class="btn" name="simpan">Simpan</button>
</form>
</div>
</div>

<?php include "../layout/footer.php"; ?>
