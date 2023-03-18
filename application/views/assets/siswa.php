<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Siswa
                        </div>
                        <div class="card-body table-responsive">
                            <table id="dt" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select * from siswa order by id desc ");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td><?php echo $row->nis ?></td>
                                        <td><?php echo $row->nama ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->kelas ?></td>
                                        <td><?php echo $row->alamat ?></td>
                                        <td><?php echo format_indo(date("Y-m-d H:i"),$row->date) ?></td>
                                        <td>
                                            <a href="main/hapussiswa/<?php echo $row->id ?>"
                                                class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                                           
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