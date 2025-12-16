<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";
$db = new Database();

$pelanggan = $db->query("SELECT * FROM pelanggan");
$menu = $db->query("SELECT * FROM menu");

if(isset($_POST['simpan'])){
$db->query("INSERT INTO pesanan VALUES(
NULL,$_POST[pelanggan],$_POST[menu],NOW(),'pending'
)");
header("Location:index.php");
}
?>

<div class="content"><div class="card">
<h2>Tambah Pesanan</h2>
<form method="post">

Pelanggan
<select name="pelanggan">
<?php while($pl=mysqli_fetch_assoc($pelanggan)){ ?>
<option value="<?= $pl['id_pelanggan'] ?>"><?= $pl['nama'] ?></option>
<?php } ?>
</select>

Menu
<select name="menu">
<?php while($m=mysqli_fetch_assoc($menu)){ ?>
<option value="<?= $m['id_menu'] ?>"><?= $m['nama_menu'] ?></option>
<?php } ?>
</select>

<button class="btn" name="simpan">Simpan</button>
</form>
</div></div>

<?php include "../layout/footer.php"; ?>
