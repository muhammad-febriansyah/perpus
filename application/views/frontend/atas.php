<?php
defined('BASEPATH') or exit('No direct script access allowed');
$q = $this->db->query("select * from setting")->row();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <base href="<?php echo base_url() ?>" target="">
    <title><?php echo $q->web ?></title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="image/<?php echo $q->logo ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: grey;
        border-radius: 5px;
    }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="image/<?php echo $q->logo ?>" alt="">
                <span><?php echo $q->web ?></span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?php if($this->uri->segment(2) == "index") echo "active" ?>"
                            href="home/index">Home</a></li>
                    <li><a class="nav-link scrollto <?php if($this->uri->segment(2) == "login") echo "active" ?>"
                            href="home/login">Login Siswa</a></li>

                    <li><a class="getstarted scrollto" href="welcome">Login Adminstrator</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->