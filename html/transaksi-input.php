<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Transaksi</title>
    <link rel="stylesheet" href="../Css/barang.css">
    <link rel="stylesheet" href="../Css/dashboard.css">
    <link rel="stylesheet" href="../Css/StyleCSS-Input.css">
</head>
<body>

<table>
    <tr class="header">
        <td colspan="2" align="center">
            <h2>TRANSAKSI</h2>
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
            <div class="form-container">
                <h2>Input Data Transaksi</h2>
                <br>

                <form action="transaksi-input-aksi.php" method="post">
                    <table class="form-table">
                        <tr>
                            <td class="label-col">ID Transaksi</td>
                            <td><input type="text" name="id_transaksi" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col">ID Barang</td>
                            <td><input type="text" name="id_barang" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col">Harga</td>
                            <td><input type="text" name="harga" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col">Quantity</td>
                            <td><input type="text" name="qty" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col">Harga Total</td>
                            <td><input type="text" name="harga_total" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col">NIP</td>
                            <td><input type="text" name="nip" class="form-input" required></td>
                        </tr>
                        <tr>
                            <td class="label-col"></td>
                            <td style="padding-top: 10px !important;">
                                <div style="display: flex; gap: 10px; align-items: center;">
                                    <input type="submit" value="Simpan" style="background: #2563eb; color: white; border: none; padding: 9px 18px; border-radius: 6px; font-weight: 600; cursor: pointer; font-size: 0.85rem;">
                                    <a href="transaksi.php" style="background: #3f3f46; color: white; text-decoration: none; padding: 9px 18px; border-radius: 6px; font-weight: 600; font-size: 0.85rem; display: inline-block;">Kembali</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
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