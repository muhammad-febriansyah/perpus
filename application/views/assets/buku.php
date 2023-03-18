<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Buku
                        </div>
                        <div class="card-body table-responsive">
                            <a href="main/addbuku" class="btn mb-3 btn-primary">Tambah Buku</a>
                            <a href="main/kategori" class="btn mb-3 btn-success">Tambah Kategori</a>
                            <br>
                            <table id="dt" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cover</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Kondisi Buku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select buku.*,admin.nama from buku left join admin on admin.id = buku.idadmin");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td>
                                            <img src="image/<?php echo $row->cover ?>" class="img img-fluid img-thumbnail" width="300" alt="">
                                        </td>
                                        <td><?php echo $row->judul ?></td>
                                        <td><?php echo $row->kategori ?></td>
                                        <td><?php echo format_indo(date("Y-m-d"),$row->terbit) ?></td>
                                        <td>
                                            <?php if($row->jenis == "Baik"){ ?>
                                                <span class="badge badge-primary">Baik</span>
                                                <?php }else{ ?>
                                                    <span class="badge badge-danger">Rusak</span>
                                                    <?php } ?>
                                        </td>
                                        <td>
                                            <a href="main/hapusbuku/<?php echo $row->id ?>"
                                                class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                                            <a href="main/editbuku/<?php echo $row->id ?>"
                                                class="btn btn-sm btn-warning" >Edit</a>
                                            <a href="main/detailbuku/<?php echo $row->id ?>"
                                                class="btn btn-sm btn-info" >Lihat</a>
                                           
                                        </td>
                                    </tr>
                                    <?php $no++;}  ?>
                                </tbody>
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