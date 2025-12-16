<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";

$db = new Database();
$data = $db->query("SELECT * FROM menu");
?>

<div class="content"><div class="card">
<h2>Data Menu Kopi</h2>
<a href="tambah.php" class="btn">+ Tambah Menu</a>

<table>
<tr>
<th>Nama</th><th>Harga</th><th>Tersedia</th><th>Aksi</th>
</tr>

<?php while($m = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $m['nama_menu'] ?></td>
<td>Rp <?= number_format($m['harga']) ?></td>
<td><?= $m['tersedia'] ? 'Ya' : 'Tidak' ?></td>
<td>
<a class="btn" href="edit.php?id=<?= $m['id_menu'] ?>">Edit</a>
<a class="btn" href="hapus.php?id=<?= $m['id_menu'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
</div></div>

<?php include "../layout/footer.php"; ?>
