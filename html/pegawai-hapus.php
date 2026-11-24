<?php
include "koneksi.php";
$id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');

mysqli_query($koneksi, "DELETE FROM pegawai WHERE nip='$id'") or die(mysqli_error($koneksi));

header("location:pegawai.php?pesan=hapus");
exit;
?>
