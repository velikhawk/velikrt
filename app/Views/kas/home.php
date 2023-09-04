<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-3">
    <h3>RT 03</h3>
    <div class="row">
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $warga ?></h3>

                    <p>Data Warga</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <a href="<?= ('/warga') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?= $iuran ?></h3>

                    <p>Iuran Warga</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cash-register"></i>
                </div>
                <a href="<?= ('iuran') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- /.col -->
    </div>
</div>
</div>
<?= $this->endSection() ?>