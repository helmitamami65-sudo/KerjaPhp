<?php
include "koneksi.php";
$nip = mysqli_real_escape_string($koneksi, $_POST['nip'] ?? '');
$nama = mysqli_real_escape_string($koneksi, $_POST['nama'] ?? '');
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat'] ?? '');
$username = mysqli_real_escape_string($koneksi, $_POST['username'] ?? '');
$password = mysqli_real_escape_string($koneksi, $_POST['password'] ?? '');

mysqli_query($koneksi, "INSERT INTO pegawai VALUES ('$nip', '$nama', '$alamat', '$username', '$password')") or die(mysqli_error($koneksi));
header("location:pegawai.php?pesan=input");
exit;
?>
