<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat Datang Di Aplikasi <?php echo $q->web ?></h1>
                <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $q->web ?> Aplikasi adalah peminjama buku dan
                    perpustakaan</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#main"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Daftar Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="image/<?php echo $q->logo ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Pendaftaran Siswa</p>
                <h2>Harap isikan biodata dengan valid</h2>
            </header>

            <div class="card">
                <div class="card-body table-responsive">
                    <form method="POST" action="home/regis">
                        <table class="table">
                            <tr>
                                <td>Nomor Induk Siswa</td>
                                <td>
                                    <input type="number" placeholder="Nomor Induk Siswa" class="form-control" name="nis">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Siswa</td>
                                <td>
                                    <input type="text" placeholder="Nama Siswa" class="form-control" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" placeholder="username" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" placeholder="Password" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td><input type="text" name="kelas" placeholder="Kelas" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="Alamat" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane    "></i>
                                        Daftar</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- End Values Section -->


</main><!-- End #main -->
<?php if($this->session->flashdata("msg") == "regis"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Selamat anda berhasil daftar di aplikasi <?php echo $q->web ?>!",
    "success"
);
</script>
<?php }  ?>