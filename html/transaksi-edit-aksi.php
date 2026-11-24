<?php
include "koneksi.php";
$id_transaksi = mysqli_real_escape_string($koneksi, $_POST['id_transaksi'] ?? '');
$id_barang = mysqli_real_escape_string($koneksi, $_POST['id_barang'] ?? '');
$qty = mysqli_real_escape_string($koneksi, $_POST['qty'] ?? '');
$harga_total = mysqli_real_escape_string($koneksi, $_POST['harga_total'] ?? '');
$nip = mysqli_real_escape_string($koneksi, $_POST['nip'] ?? '');

mysqli_query($koneksi, "UPDATE transaksi SET id_transaksi='$id_transaksi', id_barang='$id_barang', qty='$qty', harga_total='$harga_total', nip='$nip' WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($koneksi));

header("location:transaksi.php?pesan=update");
exit;
?>
