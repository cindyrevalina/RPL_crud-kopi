<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";

$db = new Database();
$data = $db->query("SELECT * FROM pelanggan");
?>

<div class="content">
<div class="card">
<h2>Data Pelanggan</h2>

<a href="tambah.php" class="btn">+ Tambah Pelanggan</a>

<table>
<tr>
    <th>Nama</th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nomor_hp'] ?></td>
    <td>
        <a class="btn" href="edit.php?id=<?= $row['id_pelanggan'] ?>">Edit</a>
        <a class="btn" href="hapus.php?id=<?= $row['id_pelanggan'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</div>
</div>

<?php include "../layout/footer.php"; ?>
