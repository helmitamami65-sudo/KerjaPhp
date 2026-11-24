<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="../Css/style-edit.css">
</head>
<body>
    <div class="judul">
        <h1>Edit Data Barang</h1>
    </div>
    <br/>
    <a href="barang.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "koneksi.php";
    $id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');
    $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id'") or die(mysqli_error($koneksi));
    while ($tampil = mysqli_fetch_array($data)) {
    ?>
    <form action="barang-edit-aksi.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="id_barang" value="<?php echo htmlspecialchars($tampil['id_barang']); ?>">
                    <input type="text" name="nama_barang" value="<?php echo htmlspecialchars($tampil['nama_barang']); ?>">
                </td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>
                    <input type="text" name="harga" value="<?php echo htmlspecialchars($tampil['harga']); ?>">
                </td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td>

                    <input type="text" name="stok" value="<?php echo htmlspecialchars($tampil['stok']); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
