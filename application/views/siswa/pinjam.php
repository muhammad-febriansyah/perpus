<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="siswa">Home</a></li>
                <li>Peminjaman Buku</li>
            </ol>
            <h2>Peminjaman Buku</h2>

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
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Buku tersedia</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Riwayat peminjaman</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <?php
              $q = $this->db->query("select buku.*,admin.nama from buku left join admin on admin.id = buku.idadmin where buku.jenis='Baik'");
              foreach($q->result() as $row){
             ?>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="image/<?php echo $row->cover ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <table class="table table-bordered table-hover">
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
                                                    <td>Tanggal Terbit</td>
                                                    <td><?php echo format_indo(date("Y-m-d"),$row->terbit) ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="btn-group">

                                                            <a href="siswa/detailbuku/<?php echo $row->id ?>"
                                                                class="btn btn-success">Lihat
                                                                Selengkapnya</a>
                                                            <form method="POST" action="siswa/pinjambuku">
                                                                <input type="hidden" name="judul" value="<?php echo $row->judul ?>">
                                                                <button type="submit" onclick="return confirm('Apakah anda yakin ingin meminjam buku <?php echo $row->judul ?> ?')" class="btn btn-primary "><i
                                                                        class="fa fa-sync-alt"></i>
                                                                    Pinjam Buku</button>
                                                            </form>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <?php  } ?>
                            </div>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="card">
                                <div class="card-header bg-dark text-light">
                                    Data Peminjaman Buku <?php echo $this->session->userdata("nama"); ?>
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="dt" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama siswa</th>
                                                <th>Judul Buku</th>
                                                <th>Tanggal Pinjam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                $id = $this->session->userdata("nama");
                                $q = $this->db->query("select peminjaman.* from peminjaman where siswa='$id' and status='Pinjam'");
                                foreach($q->result() as $row){
                            ?>
                                            <tr>
                                                <td scope="row"><?php echo $no ?></td>
                                                <td><?php echo $row->siswa ?></td>
                                                <td><?php echo $row->buku ?></td>
                                                <td><?php echo format_indo(date("Y-m-d H:i"),$row->tglpinjam) ?></td>
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