<?php
include "koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');

mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'") or die(mysqli_error($koneksi));

header("location:barang.php?pesan=hapus");
exit;
?>
