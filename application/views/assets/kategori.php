<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-header text-light bg-dark text-light">
                                    <!-- <a class="btn btn-warning text-light mr-3"><i class="fa fa-user"></i> Profil Saya</a> -->
                                </div>
                                <div class="card-body table-responsive">
                                    <form method="POST" action="main/savekategori">
                                        <table class="table">
                                            <tr>
                                                <td>Kategori buku</td>
                                                <td><input type="text" name="kat" required
                                                        class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="main/buku" class="btn btn-warning"><i
                                                            class="fas fa-sync-alt    "></i> Kembali</a>
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-paper-plane    "></i> Simpan</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header bg-dark text-light">
                                    Data Kategori
                                </div>
                                <div class="card-body table-responsive">
                                    <br>
                                    <table id="dt" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                $q = $this->db->query("select * from kategori order by id desc ");
                                foreach($q->result() as $row){
                            ?>
                                            <tr>
                                                <td scope="row"><?php echo $no ?></td>
                                                <td><?php echo $row->kat ?></td>
                                                <td>
                                                    <a href="main/hapuskategori/<?php echo $row->id ?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Hapus data?')">Hapus</a>
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

</div>
</div>