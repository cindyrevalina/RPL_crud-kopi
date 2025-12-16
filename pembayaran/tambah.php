<?php
include "../config/Database.php";
include "../layout/header.php";
include "../layout/sidebar.php";
$db = new Database();

$pesanan = $db->query("SELECT * FROM pesanan");

if(isset($_POST['simpan'])){
$db->query("INSERT INTO pembayaran VALUES(
NULL,$_POST[id_pesanan],'$_POST[metode]','berhasil',NOW()
)");
header("Location:index.php");
}
?>

<div class="content"><div class="card">
<h2>Pembayaran</h2>
<form method="post">

Pesanan
<select name="id_pesanan">
<?php while($p=mysqli_fetch_assoc($pesanan)){ ?>
<option value="<?= $p['id_pesanan'] ?>">Pesanan #<?= $p['id_pesanan'] ?></option>
<?php } ?>
</select>

Metode
<select name="metode">
<option value="cash">Cash</option>
<option value="qris">QRIS</option>
</select>

<button class="btn" name="simpan">Bayar</button>
</form>
</div></div>


