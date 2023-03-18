<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Laporan
                                        Peminjaman</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Laporan
                                        Pengembalian</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Laporan
                                        Peminjaman & Pengembalian Siswa</a>
                                    <div class="slide"></div>
                                </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content card-block">
                                <div class="tab-pane active" id="home3" role="tabpanel">
                                    <form method="POST" target="_blank"  action="main/caripinjam">
                                        <table class="table">
                                            <tr>
                                                <td>Tanggal Peminjaman</td>
                                                <td><input type="date" name="pinjam" required class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>

                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-paper-plane    "></i> Cari</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="tab-pane" id="profile3" role="tabpanel">
                                    <form method="POST" target="_blank"  action="main/carikembali">
                                        <table class="table">
                                            <tr>
                                                <td>Tanggal Pengembalian</td>
                                                <td><input type="date" name="kembali" required class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>

                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-paper-plane    "></i> Cari</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="tab-pane" id="messages3" role="tabpanel">
                                    <form method="POST" target="_blank"  action="main/carisiswa">
                                        <table class="table">
                                            <tr>
                                                <td>Cari Siswa</td>
                                                <td>
                                                    <select class="form-control" name="siswa">
                                                        <option value="">Pilih</option>
                                                        <?php
$q = $this->db->get("siswa");
foreach($q->result() as $row){
?>
                                                        <option value="<?php echo $row->nama ?>"><?php echo $row->nis.' / '.$row->nama.' / '.$row->kelas ?>
                                                        </option>
                                                        <?php }  ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>

                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-paper-plane    "></i> Cari</button>
                                                </td>
                                            </tr>
                                        </table>
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