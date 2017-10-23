<div class="section" style="margin-top:-50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img img-thumbnail" src="<?php echo base_url('assets/img/pelanggan').'/'.$pelanggan->nm_pelanggan.'/'.$pelanggan->foto_profil; ?>" alt="">
                	<button class="btn btn-primary btn-block grad">Ubah Foto</button>
            </div>
            <div class="col-md-9">
            	<button class="btn btn-primary"><i class="fa fa-gear"></i> Ubah</button>
            	<h6><?php echo $pelanggan->nm_pelanggan; ?></h6>
                <table class="table">
                	<tr>
                		<td><i class="fa fa-envelope"> <?php echo($pelanggan->email); ?></i></td>
                	</tr>
                	<tr>
                		<td><i class="fa fa-phone"></i> <?php echo($pelanggan->no_telp); ?></td>
                	</tr>
                	<tr>
                		<td><i class="fa fa-calendar"></i></td>
                	</tr>
                	<tr>
                		<td><i class="fa fa-home"></i></td>
                	</tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!--end of section-->