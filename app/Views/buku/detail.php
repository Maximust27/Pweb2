<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-2">detail buku</h3>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $buku['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title"><?= $buku['judul']; ?></h5>
                        <p class="card-text"><b>pengarang:</b> <?= $buku['pengarang']; ?></p>
                        <p class="card-text">Penerbit: <?= $buku['penerbit']; ?></p>
                        <p class="card-text">Tahun Terbit: <?= $buku['tahun_terbit']; ?></p>
                        <a href="#" class="btn btn-primary">Ubah</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                        <br><br>
                        <a href="/buku">Kembali ke daftar buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>