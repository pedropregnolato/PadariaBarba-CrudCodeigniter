<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padaria Barba</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>public/assets2/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>public/assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>public/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets2/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url(); ?>public/assets2/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets2/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="http://127.0.0.1/codeigniter/padaria/" class="logo d-flex align-items-center">
        <h1>Padaria Barba</h1><br>
      </a>
    
      <div class="position-relative">
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Procurar" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->
        <!-- ======= Botão login ======= -->
        <a type="button" class="btn btn-info" href="http://127.0.0.1/codeigniter/index.php/login">Login</a>
      </div>
    </div>

  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-6 border-start custom-border">
                <?php echo $col1; ?>
              </div>
              <div class="col-lg-6 border-start custom-border">
                <?php echo $col2; ?>
              </div>

            </div>
          </div>

        </div> <!-- End .row -->
        <?php echo $contents; ?>
      </div>
      
    </section> <!-- End Post Grid Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="color: linear-gradient(blue,red)">

    <div class="footer-content">
      <div class="container">
          <div class="col-lg-12 text-center">
            <h3>A padaria mais braba</h3>
            <br><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nAWHwvnO5SY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="row justify-content-between">
            <div class="social-links text-center">
              <h5>Siga-nos</h5>
              <a href="https://www.facebook.com/pedrolucas.nunespregnolato/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/pregs_/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>public/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets2/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>public/assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>public/assets2/js/main.js"></script>

</body>

</html>