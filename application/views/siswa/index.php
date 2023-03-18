<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" data-aos-delay="400">
                    <?php
if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Asia/Jakarta');
}
?> <span id="clock">&nbsp;</span>
                </h2>
                <h1 data-aos="fade-up">Selamat Datang <?php echo $this->session->userdata("nama") ?> Di Aplikasi
                    <?php echo $q->web ?></h1>


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
<script>
var d = new Date();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();
var hari = d.getDay();
var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
hariIni = namaHari[hari];
var tanggal = ("0" + d.getDate()).slice(-2);
var month = new Array();
month[0] = "Januari";
month[1] = "Februari";
month[2] = "Maret";
month[3] = "April";
month[4] = "Mei";
month[5] = "Juni";
month[6] = "Juli";
month[7] = "Agustus";
month[8] = "September";
month[9] = "Oktober";
month[10] = "Nopember";
month[11] = "Desember";
var bulan = month[d.getMonth()];
var tahun = d.getFullYear();
var date = Date.now(),
    second = 1000;

function pad(num) {
    return ('0' + num).slice(-2);
}

function updateClock() {
    var clockEl = document.getElementById('clock'),
        dateObj;
    date += second;
    dateObj = new Date(date);
    clockEl.innerHTML = '' + hariIni + ',  ' + tanggal + ' ' + bulan + ' ' + tahun + ' | ' + pad(dateObj
        .getHours()) + ':' + pad(dateObj.getMinutes()) + ':' + pad(dateObj.getSeconds());
}
setInterval(updateClock, second);
</script>