<?php
$id = $this->session->userdata("id");
$q = $this->db->query("select * from siswa where id='$id'");
$row =  $q->row();
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="siswa">Home</a></li>
                <li>Profil Saya</li>
            </ol>
            <h2>Profil Saya</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header text-light bg-dark text-light">
                            <!-- <a class="btn btn-warning text-light mr-3"><i class="fa fa-user"></i> Profil Saya</a> -->
                        </div>
                        <div class="card-body table-responsive">
                            <center>
                                <img src="assets/pria.png" alt="" class="mb-3 img img-fluid rounded-circle" width="90">
                            </center>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nomor Induk Siswa</td>
                                    <td><?php echo $row->nis ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?php echo $row->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td><?php echo $row->username ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td><?php echo $row->kelas ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?php echo $row->alamat ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header text-light bg-dark text-light">
                            <!-- <a class="btn btn-warning"><i class="fa fa-edit"></i> Edit Profil</a> -->
                        </div>
                        <div class="card-body table-responsive">
                            <form action="siswa/updateprofil" id="editprofil" method="post">
                                <table class="table">
                                    <tr>
                                        <td>Nomor Induk Siswa</td>
                                        <td>
                                            <input type="number" placeholder="Nomor Induk Siswa" value="<?php echo $row->nis ?>" class="form-control"
                                                name="nis">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>
                                            <input type="text" placeholder="Nama Siswa" value="<?php echo $row->nama ?>" class="form-control"
                                                name="nama">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><input type="text" name="username" value="<?php echo $row->username ?>" placeholder="username" 
                                                class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password" placeholder="Kosongkan jika tidak diubah.." 
                                                class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td><input type="text" name="kelas" placeholder="Kelas" value="<?php echo $row->kelas ?>" 
                                                class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><input type="text" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat ?>" 
                                                class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fas fa-paper-plane    "></i>
                                                Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section><!-- End Features Section -->

</main><!-- End #main -->