<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center text-primary">FORM TAMBAH DATA WARGA</h3>
    </div>
    <div class="card-body">
        <form action="/warga/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Masukan NIK Anda" autofocus value="<?= old('nik'); ?>">
                    <div id="nikFeedback" class="invalid-feedback">
                        <?= $validation->getError('nik'); ?>
                    </div>
                </div>
            </div>
    </div>
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda">
        </div>
    </div>
    <div class="row mb-3">
        <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-6">
            <select name="kelamin" class="form-select" id="kelamin">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Contoh: Gg. Anggur Desa Sukamaju">
        </div>
    </div>
    <div class="row mb-3">
        <label for="no_rumah" class="col-sm-2 col-form-label">No Rumah</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="no_rumah" name="no_rumah" placeholder="isi No Rumah">
        </div>
    </div>
    <div class="row mb-3">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-6">
            <select name="status" class="form-select" id="status">
                <option value="Aktif">AKTIF</option>
                <option value="Tidak_aktif">TIDAK AKTIF</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/warga" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
<?= $this->endSection(); ?>