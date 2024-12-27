<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Baju</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Baju</h1>

        <?php if (isset($baju)): ?>
            <p>Apakah Anda yakin ingin menghapus baju dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($baju['nama']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($baju['harga'], 2, ',', '.'); ?></li>
                <li><strong>Stok:</strong> <?= htmlspecialchars($baju['stok']); ?></li>
            </ul>

            <form action="/admin/daftar-baju/hapus/<?= $baju['id']; ?>" method="post">
                <?= csrf_field(); ?> 
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-baju" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data Baju tidak ditemukan.</p>
            <a href="/admin/daftar-baju" class="btn btn-secondary">Kembali ke Daftar baju</a>
        <?php endif; ?>
    </div>
</body>
</html>