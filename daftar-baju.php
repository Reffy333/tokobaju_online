<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5">Daftar Baju</h2>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-baju/tambah')?>" class="btn btn-primary">Tambah Baju</a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Warna</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clothes as $baju): ?>
            <tr>
                <th scope="row"><?=$baju['id']?></th>
                <td><?=$baju['nama']?></td>
                <td><?=$baju['kategori']?></td>
                <td><?=$baju['ukuran']?></td>
                <td><?=$baju['warna']?></td>
                <td>
                    <img src="<?= base_url($baju['gambar'])?>" alt="" style="width: 150px; height: auto;">
                </td>0
                <td>
                <?=$baju['harga']?>
                </td>
                <td><?=$baju['stok']?></td>
                <td>
                    <a href="<?= base_url('admin/daftar-baju/edit')?>/<?=$baju['id']?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-baju/hapus')?>/<?=$baju['id']?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>