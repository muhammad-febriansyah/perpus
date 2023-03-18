<?php 
                                $q = $this->db->query("select buku.*,admin.nama from buku left join admin on admin.id = buku.idadmin where buku.id='$id'");
                                $row = $q->row();
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header text-light bg-dark">
                            Detail Data buku <?php echo $row->judul ?>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Cover</td>
                                    <td>
                                        <center>
                                            <?php if($row->cover != ""){ ?>
                                            <img id="blah" class='img-fluid mb-3' width='280'
                                                src="image/<?php echo $row->cover ?>" alt="your image" />
                                            <?php }else{ ?>
                                            <img id="blah" class='img-fluid mb-3' width='280' src="assets/nofoto.jpg"
                                                alt="your image" />
                                            <?php }  ?>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Buku</td>
                                    <td><?php echo $row->judul ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori Buku</td>
                                    <td><?php echo $row->kategori ?></td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td><?php echo $row->pengarang ?></td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td><?php echo $row->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Kondisi Buku</td>
                                    <td>
                                    <?php if($row->jenis == "Baik"){ ?>
                                                <span class="badge badge-primary">Baik</span>
                                                <?php }else{ ?>
                                                    <span class="badge badge-danger">Rusak</span>
                                                    <?php } ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Terbit</td>
                                    <td><?php echo format_indo(date("Y-m-d"),$row->terbit) ?></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td>

                                            <a href="main/buku" class="btn btn-danger "><i class="fa fa-sync-alt"></i>
                                                Kembali</a>
                                        </td>
                                    </tr>
                            </table>
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