<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Pesan
                        </div>
                        <div class="card-body table-responsive">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                data-target="#modelId">
                                Kirim Pesan
                            </button>
                            <br>

                            <table id="dt" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>
                                        <th>Isi Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select pesan.* from pesan ");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td><?php echo $row->judul ?></td>
                                        <td><?php echo format_indo(date("Y-m-d"),$row->date) ?></td>
                                        <td><?php echo $row->pengirim ?></td>
                                        <td><?php echo $row->penerima ?></td>
                                        <td><?php echo $row->isi ?></td>
                                        <td>
                                            <a href="main/hapuspesan/<?php echo $row->id ?>"
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



<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kirim Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="main/kirimpesan">
                    <div class="form-group">
                        <label>Nama Penerima <small style="color: red;">* Wajib diisi</small></label>
                        <select class="form-control" name="penerima">
                            <option selected disabled>-- Pilih Penerima --</option>
                            <?php
                                $q = $this->db->get("siswa");
                                foreach($q->result()as $row){
                            ?>
                            <option value="<?php echo $row->nama ?>"><?php echo $row->nis.'-'.$row->nama ?></option>

                            <?php   } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Pesan <small style="color: red;">* Wajib diisi</small></label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul Pesan" required>
                    </div>
                    <div class="form-group">
                        <label>Isi Pesan <small style="color: red;">* Wajib diisi</small></label>
                        <textarea name="isi" class="form-control" style="height: 100px; resize: none;"
                            required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>

        </div>
    </div>
</div>