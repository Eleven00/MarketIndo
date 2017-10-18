<div class="container-fluid">
    <div class="row">
        <img src="<?php echo base_url('assets/img/login.png'); ?>" alt="" class="img-ban">
        <div class="d-flex align-self-center justify-content-center pro-img">
            <div class="pro-sell text-center">
                <img src="<?php echo base_url('assets/img/cm.png'); ?>" class="rounded-circle img-raised">
                <h6 class="pro-nm">Upin</h6>
                <span class="badge badge-success" style="background-color: rgba(5, 5, 5, 0.59);">Surabaya</span>
            </div>
        </div>
        <div class="d-flex justify-content-center in-sell" style="width: 100%;background-color: rgba(5, 5, 5, 0.59) !important;margin-top: -40px;">
            <div class="p-2">39 menit yang lalu</div>
            <div class="p-2">Surabaya</div>
            <div class="p-2">29 Desember 2017</div>
        </div>
        <div class="col-sm-12 col-md-12">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-3 border-0">
            <div class="card">
                <div class="card-header">
                    Kategori
                </div>
                <div class="card-body">
					
                    <?php 
                    $jum = 0;
						foreach ($kategori as $ink) {
							$jum =0;
							foreach ($barang as $bk) {
								if ($ink['nm_kategori'] == $bk['nm_kategori']) {
									$jum =$jum+1;
								}
							}
				    ?>
                    <ul class="treeview">
                        <li>
                            <a href="#">
                                <?php echo $ink['nm_kategori'].' ('.$jum.')' ?>
                            </a>                       
                        <?php 
								echo '<ul>';
								foreach ($anak as $ank) {
									$inak = $ink['id_kategori'];
									$inak_lekanak = $ank['id_kategori'];
									if ($inak == $inak_lekanak) {
										
										echo '<li class=""><a href="#">'.$ank['nm_child_kat'].'</a></li>';
									}
								}
								echo "</ul></li>";
						
				        ?>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9">
            <div class="row">
                <?php  
					foreach ($brng as $key) {
						?>
                <div class="col-sm-4 col-md-3">
                    <div class="card">
                       <span>Elekronik</span>
                        <img class="card-img-top" src="<?php echo base_url('assets/img/penjual')?><?php echo '/'.$key['nm_pelanggan'].'/'.$key['foto_cover']  ?>" alt="Card image cap">
                        
                        <div class="card-body re d">
                            <a href="<?php echo site_url('product') ?>" class="card-title">
                                <?php echo $key['nm_barang'] ?>
                            </a>
                        </div>
                        <!-- end of card-body -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="p-harga">Rp. <?php echo $key['harga'] ?></span></li>
                        </ul>
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col-md-2 -->
                <br>
                <?php } ?>

            </div>
            <!-- end of row -->
            <ul class="pagination pagination-primary float-right">
                <?php echo $this->pagination->create_links(); ?>
            </ul>
        </div>
    </div>

</div>
