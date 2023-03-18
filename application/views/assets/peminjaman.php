<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Peminjaman & Pengembalian Buku
                        </div>
                        <div class="card-body table-responsive">
                            <table id="dt" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Buku</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Kondisi Pinjam</th>
                                        <th>Kondisi Pengembalian</th>
                                        <th>Denda</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select * from peminjaman order by id desc");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td><?php echo $row->siswa ?></td>
                                        <td><?php echo $row->buku ?></td>
                                        <td><?php echo format_indo(date("Y-m-d H:i"),$row->tglpinjam) ?></td>
                                        <td><?php echo format_indo(date("Y-m-d H:i"),$row->tglkembali) ?></td>
                                        <td><?php echo $row->kondisipinjam ?></td>
                                        <td>
                                            <?php if($row->kondisikembali == "Baik"){ ?>
                                                <span class="badge badge-primary">Baik</span>
                                                <?php }elseif($row->kondisikembali == "Rusak"){ ?>
                                                    <span class="badge badge-warning">Rusak</span>
                                                <?php }elseif($row->kondisikembali == "Hilang"){ ?>
                                                    <span class="badge badge-warning">Hilang</span>
                                                    <?php }else{ ?>
                                                        <span class="badge badge-secondary">Dalam peminjaman</span>
                                                        <?php  } ?>
                                        </td>
                                       
                                        <td><?php echo $row->denda ?></td>
                                        <td>
                                            <?php if($row->status == "Pinjam"){ ?>
                                                <span class="badge badge-primary">Dalam Peminjaman</span>
                                                    <?php }else{ ?>
                                                        <span class="badge badge-success">Sudah dikembalikan</span>
                                                        <?php  } ?>
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