<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistem Absensi - JNE</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('assets') ?>/img/icon/JNE.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url('assets') ?>/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('assets') ?>/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/atlantis.min.css">
</head>

<body class="bg-primary">

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">HALAMAN MASUK ADMIN</h1><br>
                        <div class="text-center">
                            <a href="<?= base_url('absensi') ?>">
                                <img src="<?= base_url('assets/img/icon/') ?>JNE.png" alt="" style="width: 300px;">
                            </a>
                        </div><br>
                        <form action="<?= base_url('login') ?>" autocomplete="off" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Ketikkan username ..." autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Ketikkan password ..." required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary col-12">MASUK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="<?= base_url('assets') ?>/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?= base_url('assets') ?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?= base_url('assets') ?>/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="<?= base_url('assets') ?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('assets') ?>/js/plugin/datatables/datatables.min.js"></script>
    <!-- Atlantis JS -->
    <script src="<?= base_url('assets') ?>/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="<?= base_url('assets') ?>/js/setting-demo2.js"></script>
    <?php
    if ($this->session->flashdata('success')) { ?>
        <script>
            var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
            $(document).ready(function() {
                swal("Selamat!", successMessage, "success");
            });
        </script>
    <?php } else if ($this->session->flashdata('warning')) { ?>
        <script>
            var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
            $(document).ready(function() {
                swal("Oops!", warningMessage, "warning");
            });
        </script>
    <?php } else if ($this->session->flashdata('error')) { ?>
        <script>
            var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
            $(document).ready(function() {

                swal("Gagal!", errorMessage, "error");
            });
        </script>
    <?php } ?>
</body>

</html>