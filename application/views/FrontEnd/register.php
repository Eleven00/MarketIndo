<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets')?>/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Indonesia Muslim Store | Register</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->

    <link href="<?php echo base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/bm.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">

    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(<?php echo base_url('assets');?>/img/login.png)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <div class="header header-primary text-center">
                            <h2>Registrasi <b>User</b></h2>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <input type="text" class="form-control" placeholder="Nama..." required oninvalid="this.setCustomValidity('Tolong masukan nama anda')" oninput="setCustomValidity('')">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <textarea class="form-control" placeholder="Alamat..." required oninvalid="this.setCustomValidity('Tolong masukan username anda')" oninput="setCustomValidity('')"></textarea>
                            </div>
                             <div class="input-group form-group-no-border input-lg">
                                <input type="text" class="form-control" placeholder="No.Telp..." required oninvalid="this.setCustomValidity('Tolong masukan no telpon anda')" oninput="setCustomValidity('')">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <input type="email" class="form-control" placeholder="Email..." required oninvalid="this.setCustomValidity('Tolong masukan email anda')" oninput="setCustomValidity('')">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <input type="text" class="form-control" placeholder="Username..." required oninvalid="this.setCustomValidity('Tolong masukan username anda')" oninput="setCustomValidity('')">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <input type="password" placeholder="Password..." class="form-control" required oninvalid="this.setCustomValidity('Tolong masukan password anda')" oninput="setCustomValidity('')" />
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                            </div>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="<?php echo site_url('login_u'); ?>" class="link">Login</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Bantuan</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets');?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url('assets');?>/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url('assets');?>/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo base_url('assets');?>/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url('assets');?>/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

    </script>
</body>

</html>
