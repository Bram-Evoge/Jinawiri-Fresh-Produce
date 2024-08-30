<html lang="en">

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jinawiri Fresh Produce</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="assets/img/favicon.png" rel="icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class=" logo-container">
        <div class="image">
          <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
        <div class="text">
          <h3><a href="index.php">Jinawiri Fresh Produce</a></h3>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#myCarousel">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Products</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>

  <!-- End Header -->

  <!-- slider section -->

  <style>
  .carousel-item {
    height: 100vh;
    background: #000;
    color: white;
    position: relative;

  }

  .carousel-container {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding-bottom: 50px;
  }

  .overlay-image {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    background-position: center;
    background-size: cover;
    opacity: 0.5;

  }

  .image1-text {
    display: block;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    font-size: 10vw;
    text-align: center;
  }

  .logo-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 0px;

  }

  .img {
    max-width: 100%;
    max-height: 100%;
    position: absolute;
  }

  .text {
    margin-top: 20px;
    font-size: 70px;
    padding-left: 20px;
    text-align: center;
  }

  .contact-header {
    text-align: center;
    top: 5px;
    font-weight: bold;
  }

  .contact-description {
    text-align: center;
    top: 5px;
  }
  </style>


  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="500">
        <div class="overlay-image" style="background-image:url(./assets/img/carouselimgimg2.jpg);"></div>
        <div class="carousel-container">

          <h1 class="image1-text">Jinawiri Fresh Produce</h1>
          <div class="col-md-12 text-center">
            <a href="#about" class="btn btn-lg btn-primary">
              More
            </a>
          </div>

        </div>
      </div>
      <div class="carousel-item" data-interval="500">
        <div class="overlay-image" style="background-image:url(./assets/img/portfolio/frontpage2.jpg);"></div>
        <div class="carousel-container">
          <h1 class="image1-text">Jinawiri Fresh Produce</h1>
          <div class="col-md-12 text-center">
            <a href="#about" class="btn btn-lg btn-primary">
              More
            </a>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-interval="500">
        <div class="overlay-image" style="background-image:url(./assets/img/carouselimg2.jpg);"></div>
        <div class="carousel-container">
          <h1 class="image1-text">Jinawiri Fresh Produce</h1>
          <div class="col-md-12 text-center">
            <a href="#about" class="btn btn-lg btn-primary">
              More
            </a>
          </div>
        </div>
      </div>
    </div>

    <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
      <span class="carousel-control-prev-icon" arial-hidden="true"></span>
    </a>

    <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="sr-only">Next</span>
      <span class="carousel-control-next-icon" arial-hidden="true"></span>
    </a>

  </div>



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title" style="text-align: center;">About Us</h2>
            <p>
              Jinawiri Fresh Produce prides itself on being the leading exporter in fruits and vegetables to markets in
              Europe and the Middle East since 2017.
            </p>
            <p>
              Our commitment to quality and consistency has helped us grow and retain our customers.
            </p>
            <p>
              Jinawiri Fresh Produce is a company whose main aim is to provide quality products to our customers. to do so
              we train and finance farmers in the community on how to grow and harvest quality fruits and vegetables.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Mission</a></h4>
              <p class="description">Our aim is to produce and supply quality fruits and vegetables and build good
                customer relations with our clients.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Vision</a></h4>
              <p class="description">To be the worlds leading suppliers of health fresh fruits and vegetables that are
                of great quality.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
          </div>
        </div>

      </div>
    </section>
    <!-- ======= End of About Us Section ======= -->

    <hr>

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque</p> -->
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#services"><i class="bi bi-p-circle"></i></a></div>
              <h4 class="title"><a href="#services">Production</a></h4>
              <p class="description">Jinawiri Fresh Produce train and finance farmers to grow and produce quality products.
                We also have our own farms to ensure flow of supply.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#services"><i class="bi bi-airplane-engines-fill"></i></a></div>
              <h4 class="title"><a href="#services">Transportation</a></h4>
              <p class="description">Jinawiri Fresh Produce uses the best means of transport to ensure that products reach
                our clients in the right condition and in good time.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="#services"><i class="bi bi-life-preserver"></i></a></div>
              <h4 class="title"><a href="#services">Preservation</a></h4>
              <p class="description">Some fruits and vegetables are perishable. Therefore, Jinawiri Fresh Produce uses right
                equipments to ensure our products does not get spoilt before they reach our clients</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= products Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Products</h3>
          <p class="section-description">GET READY FOR THE SWEETEST FRESH FRUITS</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
        require 'admin/database/dbconfig.php';

        $name = "";
        if(isset($_GET['name']))
        {
          $name = $_GET['name'];
        }

        $query = "SELECT * FROM products";
        $query_run = mysqli_query($connection, $query);
        $check_product = mysqli_num_rows($query_run) > 0;

        if($check_product)
        {
          while($row = mysqli_fetch_array($query_run))
          {
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="portfolio-details.php?id=<?php echo $row['id']; ?>">
              <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
            </a>
            <div class="portfolio-info">
              <h4><?php echo $row['name']; ?></h4>
              <p><?php echo $row['category']; ?></p>
              <a href="<?php echo $row['image']; ?>" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="<?php echo $row['name']; ?>"><i
                  class="bx bx-plus"></i></a>
              <a href="portfolio-details.php?id=<?php echo $row['id']; ?>" class="details-link" title="More Details"><i
                  class="bx bx-link"></i></a>
            </div>
          </div>
          <?php

          }
        }else{
          echo "No Product Found";
        }

        ?>

        </div>

      </div>
    </section>
    <!-- End products Section -->

    <hr>

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <!-- <h4 class="contact-header">We're here for you</h4>
          <p class="contact-description">Our Sales team are well trained experts with the knowledge you are looking for</p> -->
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d63820.732904952216!2d36.879235!3d-1.2971940000000002!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x182f13f95ee1457b%3A0xdc59ca719f084aa!2sKENFRU%20VEG%20PRODUCE%2C%20Airport%20North%2C%20Nairobi!3m2!1d-1.3175784!2d36.9049215!5e0!3m2!1sen!2ske!4v1675518811725!5m2!1sen!2ske"
        style="border:0;" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>


      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info mt-5">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>AIRPORT NORTH ROAD<br>NAIROBI, NRB 74847</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>ekorejack6@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+254705994104</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+254750901291</p>
              </div>

            </div>

          </div>
          <div class="col-lg-5 col-md-8" style="margin-left: 10px;">
            <div class="form">
              <form onsubmit="sendEmail(); reset(); return false;">
                <h4>Talk To Us</h4>
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3" style="display: none;">
                  <div class="loading" style="display: none;">Loading</div>
                  <div class="error-message" style="display: none;"></div>
                  <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                  <button class="btn btn-success mt-2" type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Jinawiri Producers</strong>. All Rights Reserved
      </div>
      <div class="credits" style="visibility: hidden">
        Designed by <a href="">BramTheDev</a>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
  function sendEmail() {
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "alexikombe@gmail.com",
      Password: "EC8635DEEA5E2FB3B71965D33B234BFFE3F4",
      To: document.getElementById("email").value,
      From: "alexikombe@gmail.com",
      To: "holymilton@gmail.com",
      Subject: document.getElementById("subject").value,
      Body: document.getElementById("body").value
    }).then(
      message => alert(message)
    );
  }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>