<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";

$db = new Database();
$data = $db->query("
SELECT pb.*, pl.nama
FROM pembayaran pb
JOIN pesanan p ON pb.id_pesanan=p.id_pesanan
JOIN pelanggan pl ON p.id_pelanggan=pl.id_pelanggan
");
?>

<div class="content"><div class="card">
<h2>Data Pembayaran</h2>
<a href="tambah.php" class="btn">+ Bayar</a>

<table>
<tr>
<th>Pelanggan</th><th>Metode</th><th>Status</th>
</tr>

<?php while($pb=mysqli_fetch_assoc($data)){ ?>
<tr>
<td><?= $pb['nama'] ?></td>
<td><?= $pb['metode'] ?></td>
<td><?= $pb['status'] ?></td>
</tr>
<?php } ?>
</table>
</div></div>

<?php include "../layout/footer.php"; ?>
