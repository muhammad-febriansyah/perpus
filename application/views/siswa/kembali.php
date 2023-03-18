<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="siswa">Home</a></li>
                <li>Pengembalian Buku</li>
            </ol>
            <h2>Pengembalian Buku</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-12">
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Form Pengembalian Buku</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Riwayat Pengembalian Buku</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="siswa/kembalikan">
                                        <table class="table">
                                            <tr>
                                                <td>Pilih buku</td>
                                                <td>
                                                    <select class="form-control" name="buku">
                                                        <option value="">Pilih</option>
                                                        <?php
  $id = $this->session->userdata("nama");
  $q = $this->db->query("select peminjaman.* from peminjaman where siswa='$id' and status='Pinjam'");
foreach($q->result() as $row){
?>
                          
                                                        <option value="<?php echo $row->buku ?>">
                                                            <?php echo $row->buku ?>
                                                        </option>
                                                        <?php }  ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kondisi Buku Saat Dikembalikan</td>
                                                <td>
                                                    <select class="form-control" name="kondisi">
                                                        <option selected disabled>-- Silahkan pilih kondisi buku saat
                                                            dikembalikan --</option>
                                                        <!-- -->
                                                        <option value="Baik">Baik ( Tidak terkena denda )</option>
                                                        <option value="Rusak">Rusak ( Denda 20.000 )</option>
                                                        <option value="Hilang">Hilang ( Denda 50.000 )</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary "><i
                                                            class="fa fa-paper-plane"></i> Kembalikan</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="card">
                                <div class="card-header bg-dark text-light">
                                    Data Pengembalian Buku <?php echo $this->session->userdata("nama"); ?>
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="dt" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama siswa</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pengembalian</th>
                                                <th>Kondisi Buku Saat Dikembalikan</th>
                                                <th>Denda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                $id = $this->session->userdata("nama");
                                $q = $this->db->query("select peminjaman.* from peminjaman where siswa='$id' and status='Kembali'");
                                foreach($q->result() as $row){
                            ?>
                                            <tr>
                                                <td scope="row"><?php echo $no ?></td>
                                                <td><?php echo $row->siswa ?></td>
                                                <td><?php echo $row->buku ?></td>
                                                <td><?php echo format_indo(date("Y-m-d H:i"),$row->tglkembali) ?></td>
                                                <td><?php echo $row->kondisikembali ?></td>
                                                <td><?php echo $row->denda ?></td>
                                            </tr>
                                            <?php $no++;}  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Tab 2 Content -->


                    </div>

                </div>



            </div><!-- End Feature Tabs -->


        </div>

    </section><!-- End Features Section -->

</main><!-- End #main -->