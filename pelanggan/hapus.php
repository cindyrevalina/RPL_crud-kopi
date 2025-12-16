<?php
include "../config/Database.php";
$db = new Database();

$id = $_GET['id'];
$db->query("DELETE FROM pelanggan WHERE id_pelanggan='$id'");
header("Location:index.php");
