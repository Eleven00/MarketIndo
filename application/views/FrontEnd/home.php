<div class="section" style="margin-top:-50px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h6 style="margin-top: 10px;">Produk Terlaris </h6>
            </div>
            <div class="col-sm-6 col-md-6">
                <a href="" class="btn btn-primary btn-sm float-right">Lihat Semua produk terlaris</a>
            </div>
        </div>
        <div class="row">
            <?php  
            foreach ($terlaris as $laris) {
                $no=0;
                if ($no <10) {
                    ?>
                    <div class="col-sm-4 col-md-2">
                        <div class="card hg-100">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/penjual').'/'.$laris['nm_pelanggan'].'/'.$laris['foto_cover'];?>" alt="Card image cap">
                            <div class="card-body re d">
                                <a href="" class="card-title"><?php 
                                if (strlen($laris['nm_barang']) > 30)
                                {
                                    echo substr($laris['nm_barang'], 0, 30)."..";
                                }
                                else
                                {
                                    echo $laris['nm_barang'];
                                }
                                ?></a>
                            </div>
                            <!-- end of card-body -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                            </ul>
                        </div>
                        <!-- end of card -->
                    </div>
                    <!-- end of col-md-2 -->
                    <?php
                }
            }
            ?>
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <h6 style="margin-top: 10px;">Produk Lainnya </h6>
            </div>
            <div class="col-sm-6 col-md-6">
                <a href="" class="btn btn-primary btn-sm float-right">Lihat Semua produk Lainnya</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
            <div class="col-sm-4 col-md-2">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets')?>/img/avatar.jpg" alt="Card image cap">
                    <div class="card-body re d">
                        <a href="" class="card-title">Card title</a>
                    </div>
                    <!-- end of card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="p-harga">Rp.15.000</span></li>
                    </ul>
                </div>
                <!-- end of card -->
            </div>
            <!-- end of col-md-2 -->
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-md-12">
                <h6>Kategori</h6>
                <div class="card-group">
                    <div class="card c">
                        <div class="card-body d d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                    <div class="card c">
                        <div class="card-body d">
                            <img src="<?php echo base_url('assets')?>/img/icon_fashion_woman.png" class="img img-thumbnail">
                            <a href=""><a href="">Fashion</a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of container-fluid -->
</div>
<!-- end of section -->
