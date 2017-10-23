<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets')?>/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Indonesia Muslim Store</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/font-awesome/css/font-awesome.min.css" />
    <!-- CSS Files -->
    
    <link href="<?php echo base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/bm.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets')?>/css/bootstrap-submenu.min.css">
    <link href="<?php echo base_url('assets')?>/js/bootstrap-submenu.js">
</head>

<body class="index-page sidebar-collapse" >
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-info fixed-top " style="z-index: 9999999;background-color: #117cd7 !important;background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(3, 154, 224, 0.6));padding-bottom: 0;padding-top: 0;">
        <div class="container-fluid">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo base_url();?>" rel="tooltip" title="Braja Market Indo" data-placement="bottom">
                    <img src="<?php echo base_url('assets/img/ims.png'); ?>" alt="IMS" style="margin-bottom: 0;margin-top:0;">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navigation" data-nav-image="<?php echo base_url('assets')?>/img/blurred-image-1.jpg">
                <ul class="navbar-nav mr-auto nl" style="padding-right: -10px;">
                    <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-expanded="true">
                                Kategori
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="container">
                                    <?php  
                                        $no = 0;
                                        foreach ($kategori as $kat) {
                                            
                                        }
                                    ?>
                                    <div class="d-flex flex-row">
                                        <div class="p-2 border">
                                            <a href="">Informasi Produk</a>
                                        </div>
                                        <div class="p-2 border">
                                            <a href="<?php site_url('user') ?>">Ulasan</a>
                                        </div>
                                        <div class="p-2 border">
                                            <a href="">Diskusi Produk (12)</a>
                                        </div>
                                        <div class="p-2 border">
                                            <a href="">Diskusi Produk (12)</a>
                                        </div>
                                        <div class="p-2 border">
                                            <a href="">Diskusi Produk (12)</a>
                                        </div>
                                        <div class="p-2 border">
                                            <a href="">Diskusi Produk (12)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <form action="" class="form-inline" style="">
                            <div class="input-group" style="margin-bottom: 0;margin-left: 25px;width: 100%;margin-right: 25px;">
                                <input class="form-control" placeholder="Cari Produk" type="text">
                                <span class="input-group-addon">
                                    <i class="fa fa-search" style="margin-left: 10px;"></i>
                                </span>
                            </div>
                        </form>
                    </ul>

                    <ul class="navbar-nav">
                        <?php  
                            if (($ses['id']!= null) && ($ses['user']!=null) && ($ses['pass'])) {
                        ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                               <i class="fa fa-bell"></i> Notifikasi
                            </a>
                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Pesan</a>
                                <a class="dropdown-item" href="#">Diskusi Produl</a>
                                <a class="dropdown-item" href="#">Ulasan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Layanan Pengguna</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Pusat Resolusi</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-home"></i> Toko</a>
                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink3">
                                <div class="dropdown-item">
                                    anda belum memiliki toko
                                    <button class="btn btn-primary btn-block">Buka Toko</button>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-opencart"></i> 0</a>
                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink3">
                                <div class="dropdown-item">
                                    anda belum memiliki toko
                                    <button class="btn btn-primary btn-block">Buka Toko</button>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url('assets/img/pelanggan').'/'.$pelanggan->nm_pelanggan.'/'.$pelanggan->foto_profil; ?>" alt="profil" style="max-width: 30px;" class="rounded-circle img-raised"></a>
                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink4">
                                <span class="dropdown-header">Profil Saya</span>
                                <a href="" class="dropdown-item"><b><?php echo $pelanggan->nm_pelanggan; ?></b></a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">Pembelian</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">Whishlist</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">Toko Favorite</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">Pengaturan</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item">Keluar</a>
                            </div>
                        </li>
                        <?php 
                        } 
                        else
                        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('login_u'); ?>">
                                <i class="fa fa-lock"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('login_u/register'); ?>">
                                <i class="fa fa-user"></i>
                                <p>Daftar</p>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="wrapper">

            <div class="main">
