<?php
$query  = $this->db->query("select * from setting");
    $row = $query->row();
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header bg-dark bg-font">
                                    Konfigurasi Logo Website
                                </div>
                                <div class="card-body table-responsive">
                                    <form action="main/setlogo"  method="post" enctype="multipart/form-data">
                                        <div class="table-responsive">
                                            <table class='table table-sm'>

                                                <tr>
                                                    <td colspan="4">
                                                        <center> <img id="blah" class='img img-fluid mb-3' width='280'
                                                                src="image/<?php echo $row->logo ?>" alt="your image" />
                                                        </center>
                                                        <input type="file" name="gambar" class="form-control mb-3"
                                                            onchange="readURL(this);"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <span class="badge badge-warning"><strong>Informasi</strong>
                                                            Input Gambar
                                                            Hanya Bisa Bertype JPG,JPEG,PNG Dan Maksimal 3mb !</span>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-paper-plane" aria-hidden="true"></i>
                                                            Simpan</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>

                                </div>
                            </div>



                        </div>

                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header bg-dark bg-font">
                                    Konfigurasi Website
                                </div>
                                <div class="card-body table-responsive">

                                    <form method="post"  action="main/updatesetting/">
                                        <div class="table-responsive">
                                            <table class='table table-sm'>
                                                <tr>
                                                    <td>Nama Website</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="a"
                                                                value="<?php echo $row->web ?>" id=""
                                                                aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Keywords</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="b"
                                                                value="<?php echo $row->keyword ?>" id=""
                                                                aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Telepon</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="c"
                                                                value="<?php echo $row->telp ?>" id=""
                                                                aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Email</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="d"
                                                                value="<?php echo $row->email ?>" id=""
                                                                aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <textarea name="h" id="" cols="30" rows="2"
                                                                class="form-control"><?php echo $row->alamat ?></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-paper-plane" aria-hidden="true"></i>
                                                            Simpan</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>