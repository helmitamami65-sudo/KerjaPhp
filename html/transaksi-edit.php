<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Transaksi</title>
    <link rel="stylesheet" href="../Css/style-edit.css">
</head>
<body>
    <div class="judul">
        <h1>Edit Data Transaksi</h1>
    </div>
    <br/>
    <a href="transaksi.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "koneksi.php";
    $id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');
    $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi ='$id'") or die(mysqli_error($koneksi));
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="transaksi-edit-aksi.php" method="post">
        <table>
            <tr>
                <td>Id Barang</td>
                <td>
                    <input type="hidden" name="id_transaksi" value="<?php echo htmlspecialchars($tampil['id_transaksi']) ?>">
                    <input type="text" name="id_barang" value="<?php echo htmlspecialchars($tampil['id_barang']) ?>">
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>
                    <input type="text" name="qty" value="<?php echo htmlspecialchars($tampil['qty']) ?>">
                </td>
            </tr>
            <tr>
                <td>Harga Total</td>
                <td>
                    <input type="text" name="harga_total" value="<?php echo htmlspecialchars($tampil['harga_total']) ?>">
                </td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="text" name="nip" value="<?php echo htmlspecialchars($tampil['nip']) ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
