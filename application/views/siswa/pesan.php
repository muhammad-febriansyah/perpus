<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="siswa">Home</a></li>
                <li>Pesan Masuk</li>
            </ol>
            <h2>Pesan Masuk</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="card">
                <div class="card-header bg-dark text-light">
                    Data Pesan Masuk  <?php echo $this->session->userdata("nama"); ?>
                </div>
                <div class="card-body table-responsive">
                    <table id="dt" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Pengirim</th>
                                <th>Isi Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $id = $this->session->userdata("nama");
                                $q = $this->db->query("select pesan.* from pesan where penerima='$id'");
                                foreach($q->result() as $row){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $no ?></td>
                                <td><?php echo $row->judul ?></td>
                                <td><?php echo format_indo(date("Y-m-d"),$row->date) ?></td>
                                <td><?php echo $row->pengirim ?></td>
                                <td><?php echo $row->isi ?></td>
                            </tr>
                            <?php $no++;}  ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </section><!-- End Features Section -->

</main><!-- End #main -->