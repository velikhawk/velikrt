<?= $this->extend('/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <h1 class="h3 mb-4 text-gray-800">Data Warga</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary"><a href="/warga/tambah" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus"></i>Tambah Data Warga</a></h4>
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
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Rumah</th>
                            <th>Status</th>
                            <th>Opsi</th>

                        </tr>
                    </thead>
                    <?php
                    $i = 1 + (6 * ($currentPage - 1));
                    foreach ($warga as $w) :
                    ?>
                        <tbody>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $w['nik']; ?></td>
                            <td><?= $w['nama']; ?></td>
                            <td><?= $w['kelamin']; ?></td>
                            <td><?= $w['alamat']; ?></td>
                            <td><?= $w['no_rumah']; ?></td>
                            <td><?= $w['status']; ?></td>
                            <td>
                                <a href="/warga/ubah/<?= $w['warga_id']; ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <form action="/warga/<?= $w['warga_id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin Hapus Data Ini!!!')"><i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        <?php endforeach ?>
                        </tbody>
                </table>
                <?= $pager->links('warga', 'warga_pagination'); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>