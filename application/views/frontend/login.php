<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<main id="main">
    <!-- ======= About Section ======= -->
    <!-- ======= Values Section ======= -->
     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="home">Home</a></li>
                <li>Login Siswa</li>
            </ol>
            <h2>Login Siswa</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Login Siswa</p>
            </header>

            <div class="card">
                <div class="card-body table-responsive">
                    <form method="POST" action="home/cekuser">
                        <table class="table">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" placeholder="username" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" placeholder="Password" required class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane    "></i>
                                        Login</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- End Values Section -->


</main><!-- End #main -->
<br>
<br>
<br>
<br>
<?php if($this->session->flashdata("msg") == "error"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Username atau password anda salah!",
    "error"
);
</script>
<?php }  ?>