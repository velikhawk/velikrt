<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center text-primary">FORM UBAH DATA WARGA</h3>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form action="/warga/update/<?= $warga['warga_id']; ?> method=" post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo $warga['nik']; ?>" id="nik" name="nik">
                    </div>
                </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $warga['nama']; ?>" id="nama" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-6">
                <select name="kelamin" class="form-select" value="<?php echo $warga['kelamin']; ?>" id="kelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $warga['alamat']; ?>" id="alamat" name="alamat">
            </div>
        </div>
        <div class="row mb-3">
            <label for="no_rumah" class="col-sm-2 col-form-label">No Rumah</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $warga['no_rumah']; ?>" id="no_rumah" name="no_rumah">
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