<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";
$db = new Database();

if(isset($_POST['simpan'])){
$db->query("INSERT INTO menu VALUES(
NULL,'$_POST[nama]',$_POST[harga],$_POST[tersedia]
)");
header("Location:index.php");
}
?>

<div class="content"><div class="card">
<h2>Tambah Menu</h2>
<form method="post">
Nama Menu <input name="nama" required>
Harga <input type="number" name="harga" required>
Tersedia
<select name="tersedia">
<option value="1">Ya</option>
<option value="0">Tidak</option>
</select>
<button class="btn" name="simpan">Simpan</button>
</form>
</div></div>

<?php include "../layout/footer.php"; ?>
