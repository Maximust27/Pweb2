<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <h3 class="mt-2">Form Tambah Buku</h3>
        <form action="/buku/simpan" method="post" class="mt-4">
        <?= csrf_field(); ?>
        <div class="from-group row">
            <label for="inputjudul" class="form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="from-group row">
            <label for="inputpengarang" class="form-label">Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pengarang" value="<?= old('pengarang'); ?>">
            </div>
        </div>
        <div class="from-group row">
            <label for="inputtahun" class="form-label">Tahun Terbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tahun" value="<?= old('tahun'); ?>">
            </div>
        </div>
        <div class="from-group row">
            <label for="inputsampul" class="form-label">Sampul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sampul" value="<?= old('sampul'); ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>