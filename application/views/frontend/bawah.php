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