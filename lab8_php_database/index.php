<?php
include("koneksi.php");

// ambil data
$sql = "SELECT * FROM data_barang ORDER BY id_barang DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <h1>Data Barang</h1>
    <div class="toolbar">
        <a class="btn" href="tambah.php">+ Tambah Barang</a>
    </div>
    <div class="main">
        <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td>
                            <?php if (!empty($row['gambar']) && file_exists($row['gambar'])): ?>
                                <img class="thumb" src="<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama']) ?>">
                            <?php else: ?>
                                <span class="noimg">-</span>
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['kategori']) ?></td>
                        <td><?= number_format($row['harga_beli'],0,',','.') ?></td>
                        <td><?= number_format($row['harga_jual'],0,',','.') ?></td>
                        <td><?= (int)$row['stok'] ?></td>
                        <td>
                            <a class="link" href="ubah.php?id=<?= $row['id_barang'] ?>">Ubah</a> |
                            <a class="link delete" href="hapus.php?id=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>
</body>
</html>
