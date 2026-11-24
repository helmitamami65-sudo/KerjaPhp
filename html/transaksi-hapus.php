<?php
include "koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');

mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id'") or die(mysqli_error($koneksi));

header("location:transaksi.php?pesan=hapus");
exit;
?>
