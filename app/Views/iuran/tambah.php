<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center text-primary">FORM TAMBAH DATA IURAN</h3>
    </div>
    <div class="card-body">
        <form action="/iuran/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Contoh: Bayar Iuran 17an">
                </div>
            </div>
    </div>
    <div class="row mb-3">
        <script>
            $(function() {
                $("#tanggal").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });
        </script>
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="tttt/bb/hh">
        </div>
    </div>
    <div class="row mb-3">
        <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
        <div class="col-sm-6">
            <?php $bln = date('m') ?>
            <select class="form-control" name="bulan">
                <option value="">Pilih Bulan</option>
                <option value="01" <?php if ($bln == 1) {
                                        echo 'selected';
                                    } ?>>Januari</option>
                <option value="02" <?php if ($bln == 2) {
                                        echo 'selected';
                                    } ?>>Februari</option>
                <option value="03" <?php if ($bln == 3) {
                                        echo 'selected';
                                    } ?>>Maret</option>
                <option value="04" <?php if ($bln == 4) {
                                        echo 'selected';
                                    } ?>>April</option>
                <option value="05" <?php if ($bln == 5) {
                                        echo 'selected';
                                    } ?>>Mei</option>
                <option value="06" <?php if ($bln == 6) {
                                        echo 'selected';
                                    } ?>>Juni</option>
                <option value="07" <?php if ($bln == 7) {
                                        echo 'selected';
                                    } ?>>Juli</option>
                <option value="08" <?php if ($bln == 8) {
                                        echo 'selected';
                                    } ?>>Agustus</option>
                <option value="09" <?php if ($bln == 9) {
                                        echo 'selected';
                                    } ?>>September</option>
                <option value="10" <?php if ($bln == 10) {
                                        echo 'selected';
                                    } ?>>Oktober</option>
                <option value="11" <?php if ($bln == 11) {
                                        echo 'selected';
                                    } ?>>November</option>
                <option value="12" <?php if ($bln == 12) {
                                        echo 'selected';
                                    } ?>>Desember</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
        <div class="col-sm-6">
            <?php $thn = date('Y') ?>
            <select name="tahun" class="form-control">
                <option value="">Pilih Tahun</option>
                <?php for ($i = 2010; $i <= $thn; $i++) { ?>
                    <option value="<?= $i; ?>" <?php if ($thn == $i) {
                                                    echo 'selected';
                                                } ?>>
                        <?= $i; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Contoh: 10000">
        </div>
    </div>
    <div class="row mb-3">
        <label for="warga_id" class="col-sm-2 col-form-label">ID Warga</label>
        <div class="col-sm-6">
            <select name="warga_id" class="form-control">
                <option value="">Pilih</option>
                <?php foreach ($warga_id as $key => $value) { ?>
                    <option value="<?= $value['warga_id'] ?>"><?= $value['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/iuran" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
<?= $this->endSection(); ?>