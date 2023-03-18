<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">



    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?php echo $q->web ?></span></strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->


<!-- Vendor JS Files -->
<script src="frontend/vendor/purecounter/purecounter.js"></script>
<script src="frontend/vendor/aos/aos.js"></script>
<script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="frontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="frontend/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="frontend/js/main.js"></script>

</body>

</html>
<script>
$(function() {
    $(document).ready(function() {
        //datatables
        table = $('#dt').DataTable({

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "aLengthMenu": [
                [5, 10, 30, 50, 100],
                [5, 10, 30, 50, 100]
            ],
            "language": {
                zeroRecords: "Maaf data tidak ditemukan",
                info: "_START_ s/d _END_ dari _TOTAL_ data",
                infoEmpty: "0 sampai 0 dari 0 data",
                infoFiltered: "(disaring dari _MAX_ total data)",
                searchPlaceholder: 'Cari...',
                search: '',
                lengthMenu: '_MENU_ Item/Halaman',
            },

        });

    });
});
</script>

<?php if($this->session->flashdata("msg") == "hapus"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil dihapus!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "success"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil disimpan!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "edit"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil diubah!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "profil"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Profil berhasil diperbarui!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "pinjam"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Buku berhasil dipinjam!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "sudahpinjam"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Buku ini sudah kamu pinjam!",
    "warning"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "kembali"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Buku berhasil dikembalikan!",
    "success"
);
</script>
<?php }  ?>