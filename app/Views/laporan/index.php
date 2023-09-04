<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <h1 class="h3 mb-4 text-gray-800">Data Laporan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!--+++-->
            </div>
            <div class="card-body">
                <!-- FLASDATA ALERT -->
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Warga</th>
                            <th>Nama Warga</th>
                            <th>NIK</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah Kas</th>

                        </tr>
                    </thead>
                    <?php $no = 1;
                    $kas = 0; ?>
                    <?php foreach ($iuran as $u) : $kas += $u['jumlah']; ?>
                        <tbody>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $u['warga_id']; ?></td>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['nik']; ?></td>
                            <td><?= date('M', strtotime($u['tanggal'])); ?></td>
                            <td><?= $u['tahun']; ?></td>
                            <td>Rp. <?= number_format($u['jumlah'], 0, ',', '.'); ?></td>

                            </tr>
                        <?php endforeach ?>
                        </tbody>

                        <tr>
                            <td colspan="6" class="text-center">Total Jumlah Kas :</td>
                            <td>Rp. <?= number_format($kas, 0, ',', '.'); ?></td>
                        </tr>

                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>