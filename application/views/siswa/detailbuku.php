<?php 
                                $q = $this->db->query("select buku.*,admin.nama from buku left join admin on admin.id = buku.idadmin where buku.id='$id'");
                                $row = $q->row();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="siswa/index">Home</a></li>
                <li>Detail Buku</li>
            </ol>
            <h2>Detail Buku</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <center>
                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <?php if($row->cover != ""){ ?>
                                <img id="blah" class='img-fluid mb-3'  src="image/<?php echo $row->cover ?>"
                                    alt="your image" />
                                <?php }else{ ?>
                                <img id="blah" class='img-fluid mb-3'  src="assets/nofoto.jpg"
                                    alt="your image" />
                                <?php }  ?>
                            </div>

                            <h2 class="entry-title">
                                <a href="siswa/detailbuku/<?php echo $id; ?>"><?php echo $row->judul ?></a>
                            </h2>

                            <div class="entry-meta">
                                <table class="table table-hover table-bordered">
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
                                   
                                </table>
                            </div>



                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                </center>
            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->