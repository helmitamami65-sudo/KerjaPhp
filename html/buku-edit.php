<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link rel="stylesheet" href="../Css/style-edit.css">
</head>
<body>
    <div class="judul">
        <h1>Edit Data Buku</h1>
    </div>
    <br/>
    <a href="buku.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "koneksi.php";
    $id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');
    $data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku ='$id'") or die(mysqli_error($koneksi));
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="buku-edit-aksi.php" method="post">
        <table>
            <tr>
                <td>Judul</td>
                <td>
                    <input type="hidden" name="id_buku" value="<?php echo htmlspecialchars($tampil['id_buku']) ?>">
                    <input type="text" name="judul" value="<?php echo htmlspecialchars($tampil['judul']) ?>">
                </td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>
                    <input type="text" name="pengarang" value="<?php echo htmlspecialchars($tampil['pengarang']) ?>">
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <input type="text" name="penerbit" value="<?php echo htmlspecialchars($tampil['penerbit']) ?>">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="text" name="foto" value="<?php echo htmlspecialchars($tampil['foto']) ?>">
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
