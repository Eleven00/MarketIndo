<div class="section" style="margin-top:-50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img img-thumbnail" src="<?php echo base_url('assets/img/pelanggan').'/'.$pelanggan->nm_pelanggan.'/'.$pelanggan->foto_profil; ?>" alt="">
                <button class="btn btn-primary btn-block grad">Ubah Foto</button>
            </div>
            <div class="col-md-9">
                <form action="page.php " method="POST " enctype="multipart/form-data " role="form " style="margin-bottom:30px;padding:30px;">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <div class="input-group" style="margin-bottom: 0;">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                    <input class="form-control" placeholder="Left Font Awesome Icon" type="text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td>:</td>
                            <td>
                                <div class="input-group" style="margin-bottom: 0;">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input class="form-control" placeholder="Left Font Awesome Icon" type="text">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="form-group row text-right">
                        <div class="col-sm-12 ">
                            <button type="button" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end of section-->