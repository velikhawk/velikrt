<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <h1 class="h3 mb-4 text-gray-800">Data Iuran</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary"><a href="/iuran/tambah" data-toggle="modal" data-target="#tambahModal" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i>Tambah Data Iuran</a></h4>
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
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th>ID Warga</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1 + (6 * ($currentPage - 1));
                    foreach ($iuran as $u) :
                    ?>
                        <tbody>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $u['keterangan']; ?></td>
                            <td><?= date('d-M-Y', strtotime($u['tanggal'])); ?></td>
                            <td><?= $u['bulan']; ?></td>
                            <td><?= $u['tahun']; ?></td>
                            <td>Rp. <?= number_format($u['jumlah'], 0, ',', '.'); ?></td>
                            <td><?= $u['warga_id']; ?></td>
                            <td>
                                <a href="/iuran/ubah/<?= $u['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <form action="/iuran/<?= $u['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin Hapus Data Ini!!!')"><i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
                <?= $pager->links('iuran', 'iuran_pagination'); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>