<?php
include "koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');

mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'") or die(mysqli_error($koneksi));

header("location:buku.php?pesan=hapus");
exit;
?>
