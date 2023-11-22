<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Growth UMKM - USER REGISTER</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                            <img src="<?php echo base_url('assets/img/logoumkm.png'); ?>" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Buat Akun Anda !</h1>
                            </div>
                            <form class="user" action="<?php echo site_url('main/saveregisterUser'); ?>" method="post">
                                <div class="form-group">
                                    <label for="username">Nama Lengkap : </label>
                                    <input type="text" class="form-control form-control-user" id="namauser" name="namauser" required>
                                    <?php echo form_error('namauser', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username : </label>
                                    <input type="text" class="form-control form-control-user" id="usernameuser" name="usernameuser" required>
                                    <?php echo form_error('usernameuser', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email : </label>
                                    <input type="text" class="form-control form-control-user" id="emailuser" name="emailuser" required>
                                    <?php echo form_error('emailuser', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" id="id_paket" name="id_paket" value="1" hidden>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" id="tgldaftar" name="tgldaftar" value="<?php echo date('Y-m-d'); ?>" hidden>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password">Password : </label>
                                        <input type="password" class="form-control form-control-user"
                                            id="passuser" name="passuser" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="passwordrepeat">Ulangi Password : </label>
                                        <input type="password" class="form-control form-control-user"
                                            id="repeatpassuser" name="repeatpassuser" placeholder="Ulangi Password">
                                            <?php echo form_error('repeatpassuser', '<span class="text-danger">', '</span>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
                                
                                <?php if ($this->session->flashdata('success_message')): ?>
                                    <div class="alert alert-success mt-3">
                                        <?php echo $this->session->flashdata('success_message'); ?>
                                    </div>
                                    <script>
                                        setTimeout(function() {
                                            window.location.href = "<?php echo site_url('main/login'); ?>";
                                        }, 1500);
                                    </script>
                                <?php endif; ?>
                                <a class="btn btn-outline-danger btn-user btn-block" href="<?php echo base_url('main/login')?>">Login</a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>