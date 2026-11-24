<?php
include "koneksi.php";
$id_buku = mysqli_real_escape_string($koneksi, $_POST['id_buku'] ?? '');
$judul = mysqli_real_escape_string($koneksi, $_POST['judul'] ?? '');
$pengarang = mysqli_real_escape_string($koneksi, $_POST['pengarang'] ?? '');
$penerbit = mysqli_real_escape_string($koneksi, $_POST['penerbit'] ?? '');
$foto = mysqli_real_escape_string($koneksi, $_POST['foto'] ?? '');

mysqli_query($koneksi, "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', foto='$foto' WHERE id_buku='$id_buku'") or die(mysqli_error($koneksi));

header("location:buku.php?pesan=update");
exit;
?>
