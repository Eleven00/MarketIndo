<ol class="breadcrumb" data-background-color="black">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Produk</a></li>
    <li class="breadcrumb-item active">Detail</li>
</ol>
<div class="section no-m">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <?php echo($barang->nm_barang); ?>
                    </h4>
                    <span>100% transaksi sukses dari 10 transaksi</span>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block" src="<?php echo base_url('assets/img/penjual').'/'.$barang->nm_pelanggan.$barang->foto_cover?>" alt="First slide">
                                    </div>
                                    <?php 
                                        if($cover != null)
                                        {
                                            foreach($cover as $foto_cover)
                                            {
                                    ?>
                                    <div class="carousel-item ">
                                        <img class="d-block" src="<?php echo base_url('assets/img/penjual').'/'.$barang->nm_pelanggan.$foto_cover['foto'];?>" alt="<?php echo($barang->nm_barang); ?>">
                                    </div>
                                    <?php
                                            }
                                        }
                                    ?>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="d-flex flex-row">
                                <div class="p-2 border">
                                    <a href="">Informasi Produk</a>
                                </div>
                                <div class="p-2 border">
                                    <a href="">Ulasan</a>
                                </div>
                                <div class="p-2 border">
                                    <a href="">Diskusi Produk (12)</a>
                                </div>
                            </div><br>
                            <table class="table table-striped">
                                <tr>
                                    <td><i class="fa fa-eye"></i> Lihat</td>
                                    <td>
                                        <?php echo $barang->dilihat; ?>
                                    </td>
                                    <td>Berat</td>
                                    <td>
                                        <?php echo $barang->berat; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa  fa-shopping-cart"></i> Terjual</td>
                                    <td>
                                        <?php echo $barang->terjual; ?>
                                    </td>
                                    <td>Asuransi</td>
                                    <td>
                                        <?php echo $barang->asuransi; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-tag"></i> Kondisi</td>
                                    <td>
                                        <?php echo $barang->kondisi; ?>
                                    </td>
                                    <td>Pemesanan Min</td>
                                    <td>1</td>
                                </tr>

                            </table>
                            <?php echo $barang->deskripsi; ?>
                        </div>
                    </div>
                    <hr>
                    <h6>Tulis Komentar Anda dibawah ini :</h6>
                    <form class="form border" action="page.php " method="POST " enctype="multipart/form-data " role="form " style="margin-bottom:30px;padding:30px;">
                        <div class="form-group row ">
                            <label for="inputEmail3 " class="col-sm-2 form-control-label ">Email</label>
                            <div class="col-sm-10 ">
                                <input type="email " class="form-control " id="inputEmail3 " placeholder="Email ">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="inputPassword3 " class="col-sm-2 form-control-label ">Komentar</label>
                            <div class="col-sm-10 ">
                                <textarea class="form-control" placeholder="ketik komentar disini"></textarea>
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-sm-12 ">
                                <button type="button" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>

                    <div class="card no-bo">
                        <div class="card-body ">

                            <div class="d-flex flex-row ">
                                <div class="p-2 "> <img src="<?php echo base_url( 'assets'); ?>/img/cm.png" class="flex-left cm"></div>
                                <div class="p-2"><b>Dani</b><br><span><i class="meta-date">12 Oktober 2017</i></span>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, neque dignissimos! Quaerat eaque veniam at reiciendis ipsam earum doloremque voluptate, minima cum aperiam a quae. A molestias explicabo, harum inventore?
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            Apakah ulasan ini membantu ? <button class="btn btn-info "><i class="fa fa-thumbs-o-up"></i> Membantu</button>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card no-bo">
                        <div class="card-body">

                            <div class="d-flex flex-row">
                                <div class="p-2"> <img src="<?php echo base_url('assets'); ?>/img/cm.png" class="flex-left cm"></div>
                                <div class="p-2"><b>Dani</b><br><span><i class="meta-date">12 Oktober 2017</i></span>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, neque dignissimos! Quaerat eaque veniam at reiciendis ipsam earum doloremque voluptate, minima cum aperiam a quae. A molestias explicabo, harum inventore?
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            Apakah ulasan ini membantu ? <button class="btn btn-info "><i class="fa fa-thumbs-o-up"></i> Membantu</button>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="card m-0 no-bo">
                        <div class="card-body re">
                            <div class="harga text-center">
                                <h4 style="color: red;margin-bottom: 0;">Rp.
                                    <?php echo number_format($barang->harga,0,'','.'); ?>
                                </h4>
                                <i><small>Harga dapat beubah </small></i>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <a href="" class="btn btn-primary btn-block"><i class="fa fa-opencart"></i> Beli</a>
                    <div class="card no-bo">
                        <div class="card-header">
                            Informasi Penjual
                        </div>
                        <div class="card-body re">
                            <div class="harga text-center">
                                <div class="logo-seller">
                                    <img src="<?php echo base_url('assets')?>/img/lo.png">
                                </div>
                                <div class="nm-seller">
                                    <a href="<?php echo site_url('product/penjual/1') ?>"><b><?php echo $asa = ($barang->nm_toko == null) ? $barang->nm_pelanggan : $barang->nm_toko ; ?></b></a>
                                    <br><span><?php echo($penjual->kota); ?></span>
                                </div>

                                <button class="btn btn-default btn-round">Kirim Pesan</button>
                                <hr> Status : Online
                                <hr>
                                <h6>Dukungan Pengiriman</h6>
                                <div class="d-flex flex-row" style="margin: 0 -10px;">
                                    <div class="p-2">
                                        <img src="<?php echo base_url('assets/img/jne.png'); ?>" alt="">
                                    </div>
                                    <div class="p-2">
                                        <i class="fa fa-check">Regular</i>

                                    </div>
                                    <div class="p-2">
                                        <i class="fa fa-check">Yes</i>
                                    </div>
                                    <div class="p-2">
                                        <i class="fa fa-check">Oke</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h6>Kategori</h6>
                <?php
                    $kol = 0;
                    foreach($kategori as $kate)
                    {
                        if($kol==0)
                        {
                            echo '<div class="card-group">';
                        }
                        if($kol<4)
                        {
                ?>
                    <div class="card c">
                        <div class="card-body d d">
                            <img src="<?php echo base_url('assets/img/kategori').$kate['icon_kat'];?>" class="img img-thumbnail">
                            <a href=""><a href=""><?php echo $kate['nm_kategori']; ?></a></a>
                        </div>
                    </div>
                    <?php 
                            
                        }
                        else{
                            $kol = 0;
                            echo '</div>';
                        }
                        echo $kate['nm_kategori'];
                        $kol++;
                    }
                ?>
        </div>
    </div>
    <!-- end of container-fluid -->
</div>
<!-- end of section -->
