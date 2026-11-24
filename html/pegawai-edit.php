<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <link rel="stylesheet" href="../Css/style-edit.css">
</head>
<body>
    <div class="judul">
        <h1>Edit Data Pegawai</h1>
    </div>
    <br/>
    <a href="pegawai.php">Lihat Semua Data</a>
    <br/>
    <?php
    include "koneksi.php";
    $id = mysqli_real_escape_string($koneksi, $_GET['id'] ?? '');
    $data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip ='$id'") or die(mysqli_error($koneksi));
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form action="pegawai-edit-aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="nip" value="<?php echo htmlspecialchars($tampil['nip']) ?>">
                    <input type="text" name="nama" value="<?php echo htmlspecialchars($tampil['nama']) ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo htmlspecialchars($tampil['alamat']) ?>">
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?php echo htmlspecialchars($tampil['username']) ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="password" value="<?php echo htmlspecialchars($tampil['password']) ?>">
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
