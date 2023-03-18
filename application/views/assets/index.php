<script src="assets/chartjs/chart.min.js"></script>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<?php
    $buku = $this->db->query("select * from buku ")->num_rows();
    $siswa = $this->db->query("select * from siswa ")->num_rows();
    $pinjam = $this->db->query("select * from peminjaman where status='Pinjam' ")->num_rows();
    $kembali = $this->db->query("select * from peminjaman where status='kembali' ")->num_rows();
    $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    for($bulan = 1;$bulan < 13;$bulan++)
    {
      $query = $this->db->query("select count(*) as jml from peminjaman where MONTH(tglpinjam)='$bulan' and status='Pinjam'")->result();
      foreach($query as $query){
        $jml[] = $query->jml;
      }
      // $row = $query->fetch_array();
      // $jumlah_produk[] = $row['jumlah'];
    }
  
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="alert alert-primary" role="alert">
                        Selamat datang <strong><?php echo $this->session->userdata("nama") ?></strong> di
                        <?php echo $q->web ?>
                    </div>
                    <div class="row">
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-book bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-600">Data Buku</span>
                                    <h4><?php echo $buku ?></h4>

                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-users bg-c-pink card1-icon"></i>
                                    <span class="text-c-pink f-w-600">Data Siswa</span>
                                    <h4><?php echo $siswa ?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-book bg-c-green card1-icon"></i>
                                    <span class="text-c-green f-w-600">Data Peminjaman</span>
                                    <h4><?php echo $pinjam ?></h4>

                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- card1 start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-book bg-c-yellow card1-icon"></i>
                                    <span class="text-c-yellow f-w-600"> Data Kembali</span>
                                    <h4><?php echo $kembali ?></h4>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        <!-- Statestics Start -->
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Statistik</h5>
                                    <div class="card-header-left ">
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left "></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <canvas style="width: 600px; height: 400px;" id="ngadu"></canvas>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>


<script>
var ctx = document.getElementById("ngadu").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($label); ?>,
        datasets: [{
            label: 'Grafik Peminjaman Buku Perbulan',
            data: <?php echo json_encode($jml); ?>,
            borderWidth: 2,
            backgroundColor: '#6777ef',
            borderColor: '#6777ef',
            borderWidth: 2.5,
            pointBackgroundColor: '#ffffff',
            pointRadius: 4
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>