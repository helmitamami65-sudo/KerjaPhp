<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Transaksi</title>
    <link rel="stylesheet" href="../Css/dashboard.css">
    <link rel="stylesheet" href="../Css/pegawai.css?v=2">
</head>
<body>
<table>
    <tr class="header">
        <td colspan="2" align="center">
            <h2>Tabel Transaksi</h2>
        </td>
    </tr>
    <tr>
        <td class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="buku.php">Buku</a></li>
                <li><a href="barang.php">Barang</a></li>
                <li><a href="pegawai.php">Pegawai</a></li>
                <li><a href="transaksi.php">Transaksi</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </td>
        <td class="content">
            <h2>Tabel Transaksi</h2>
            <br>
            <table border="1">
                <tr>
                    <td>ID Transaksi</td>
                    <td>ID Barang</td>
                    <td>Harga</td>
                    <td>Quantity</td>
                    <td>Harga Total</td>
                    <td>NIP</td>
                    <td>Aksi</td>
                </tr>
                <?php
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM transaksi") or die(mysqli_error($koneksi));
                while ($tampil = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($tampil['id_transaksi']); ?></td>
                    <td><?php echo htmlspecialchars($tampil['id_barang']); ?></td>
                    <td><?php echo htmlspecialchars($tampil['harga']); ?></td>
                    <td><?php echo htmlspecialchars($tampil['qty']); ?></td>
                    <td><?php echo htmlspecialchars($tampil['harga_total']); ?></td>
                    <td><?php echo htmlspecialchars($tampil['nip']); ?></td>
                    <td>
                        <a href="transaksi-edit.php?id=<?php echo urlencode($tampil['id_transaksi']) ?>" class="btn-aksi btn-edit">Edit</a>
                        <a href="transaksi-hapus.php?id=<?php echo urlencode($tampil['id_transaksi']) ?>" class="btn-aksi btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            <br>
            <div style="display: flex; gap: 10px; align-items: center; margin-top: 15px;">
                <a href="transaksi-input.php" style="color: #ffffff; text-decoration: none; display: inline-block; padding: 10px 18px; background-color: #1d4ed8; border-radius: 6px; font-weight: 600; font-size: 0.9rem;">Input Data Transaksi</a>
            </div>
        </td>
    </tr>
    <tr class="footer">
        <td colspan="2" align="center" class="layout-td">
            &copy; 2026 Paty Helmy Tamami Lamadira
        </td>
    </tr>
</table>
</body>
</html>