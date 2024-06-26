<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin Music</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/css1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"'); ?>
        rel=" stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css1/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css1/css/sb-admin-2.min.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="<?php echo base_url() ?>/gambar/LOGIN ADMIN.jpg">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Welcome</h1>
                                    </div>
                                    <form class="user" action="<?php echo site_url('login/process'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Centang</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/css1/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/css1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/css1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/css1/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/css1/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>/css1/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>/css1/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/css1/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>/css1/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url() ?>/css1/js/demo/datatables-demo.js"></script>

</body>

</html>