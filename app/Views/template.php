<!DOCTYPE html>
<html lang="en">

<head>
    <title>KAS RT 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/adminlte.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/css.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sweetalert2.min.css'); ?>" rel="stylesheet">

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/ajax.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sweetalert2.all.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

    <script src="<?= base_url('assets/js/font.js'); ?>"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="<?= base_url('assets/js/jquery-3.6.0.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js'); ?>"></script>



    <script>
        function previewImg() {
            const sampul = document.querySelector('.custom-file-input');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            //mengganti nama gambar
            sampulLabel.textContent = sampul.files[0].name;
            //mengganti preview
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload - function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/assets/img/icon.png" width="60" height="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/warga">Data Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/iuran">Iuran Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laporan">Laporan Iuran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" action="" method="POST">
                <input class="form-control mr-sm-2" placeholder="Cari data disini" name="keyword">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit">Cari</button>
            </form>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


</body>

</html>