<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<h2 class="mb-5">Edit Baju</h2>

<form action="<?= base_url('admin/daftar-baju/change/'.$clothes['id']); ?>" method="post" enctype="multipart/form-data">


    <div class="mb-3">
        <label for="nama" class="form-label">Nama Baju</label>
        <input type="text" class="form-control w-50" id="nama"
            placeholder="nama" name="nama" value="<?= $clothes['nama']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $clothes['kategori']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="ukuran" class="form-label">Ukuran</label>
        <input type="teks" class="form-control" id="ukuran" name="ukuran" value="<?= $clothes['ukuran']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="warna" class="form-label">Warna</label>
        <input type="text" class="form-control" id="warna" name="warna" value="<?= $clothes['warna']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Baju</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= $clothes['harga']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="<?= $clothes['stok']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <a href="<?= base_url('admin/daftar-baju') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</form>

<?= $this->endSection() ?>