<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";

$db = new Database();
$data = $db->query("
SELECT p.*, pl.nama, m.nama_menu
FROM pesanan p
JOIN pelanggan pl ON p.id_pelanggan=pl.id_pelanggan
JOIN menu m ON p.id_menu=m.id_menu
");
?>

<div class="content"><div class="card">
<h2>Data Pemesanan</h2>
<a href="tambah.php" class="btn">+ Tambah Pesanan</a>

<table>
<tr>
<th>Pelanggan</th><th>Menu</th><th>Status</th><th>Aksi</th>
</tr>

<?php while($p = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $p['nama'] ?></td>
<td><?= $p['nama_menu'] ?></td>
<td><?= $p['status_pesanan'] ?></td>
<td>
<a class="btn" href="edit.php?id=<?= $p['id_pesanan'] ?>">Edit</a>
</td>
</tr>
<?php } ?>
</table>
</div></div>

<?php include "../layout/footer.php"; ?>
