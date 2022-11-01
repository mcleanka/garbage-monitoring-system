<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Garbage Monitoring System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('home/assets/img/favicon.png') }}) }}" rel="icon">
  <link href="{{ asset('home/assets/img/apple-touch-icon.png') }}) }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('home/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center">
        <span>+265 883 603 020</span>
      </i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center">
        <span>Mon-Sat: 11:00 AM - 23:00 PM</span>
      </i>
    </div>
  </section> 

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">GMS</a></h1>
       {{-- <a href="index.html"><img src="{{ asset('home/assets/img/logo.png') }} }}" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#our-team">Our Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @if (Auth::check())
         <a href="{{ route("dashboard.index") }}" class="book-a-table-btn scrollto">
          Dashboard
        </a>

        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-dropdown-link :href="route('logout')"
              onclick="event.preventDefault();
                    this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-dropdown-link>
        </form>
      @else
        <a href="{{ route("login") }}" class="book-a-table-btn scrollto">
          Login
        </a>
      @endif

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('home/assets/img/slide/bin.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Garbage</span> Monitoring System</h2>
                <p class="animate__animated animate__fadeInUp">This is an innovative project idea that is basically there to maintain clean environment around our cities. Through this system user (city council) will be furnished with real time data on various garbage levels of bins located in different locations, thus making it possible to plan more efficient routes for the trash collectors who empty the bins.</p>
                <div>
                  <a href="#about" class="btn-menu animate__animated animate__fadeInUp scrollto">About Us</a>
                  <a href="{{ route("login") }}" class="btn-book animate__animated animate__fadeInUp scrollto">Sign In</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{ asset('home/assets/img/slide/bin-2.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">GMS</h2>
                <p class="animate__animated animate__fadeInUp">
                  The system will also lower the chance of any bin being full for a long period of time without being attended to, thus reducing the garbage overflow which inturn ensures hygiene of the surrounding. 
                </p>
                <div>
                  <a href="#about" class="btn-menu animate__animated animate__fadeInUp scrollto">About Us</a>
                  <a href="{{ route("login") }}" class="btn-book animate__animated animate__fadeInUp scrollto">Sign In</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{ asset('home/assets/img/group.jpeg') }}" );'></div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>About Us</strong></h3>
              <p>
                We are a team of three (two boys and one girl) in our final year pursuing a bachelor's degree (HONS) in electrical and electronics engineering at Malawi University of Business and Applied Science (MUBAS) formally called Polytechnic
              </p>
              <p class="fst-italic">
                Our system was developed after observing that there was accumulation and overflowing of  garbage in various garbage bins  across our cities and towns. Upon doing research on some of the causes,we found that apart from waste management officials lacking enough resources to run their day-to-day operations, they lack real time information on status of various bins located in different locations and thus unable to effectively manage and collect wastes.This results in bins overflowing ,unhygienic environments and outbreak of various diseases.</p>

                <div>
                  <p class="strong">MAIN OBJECTIVE</p>
                    Our project's goal is to create and implement a garbage monitoring system that will prevent waste accumulation in cities, particularly densely populated townships.
                </div>
                
                <div class="mt-2">
                  <p class="strong">SPECIFIC OBJECTIVES</p>

              <ul>
                <li><i class="bx bx-check-double"></i> Develop a model that can detect trash levels in trash cans and send that data to the cloud, where it can be accessed by users.</li>
                <li><i class="bx bx-check-double"></i> Develop hardware that can be placed on top of trash cans to detect trash levels.</li>
                <li><i class="bx bx-check-double"></i> Write a code that will be utilized in a microcontroller to interpret data from a sensor built into the hardware and send that interpreted data to the cloud for users to read and use</li>
              </ul>
                </div>
              <p>
                We are optimistic for a future where people live healthier, and thus ably contribute to the development of our nation and we believe this system will act as a great tool in the management of wastes and improving the overall hygiene status.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    
  
    <!-- ======= Chefs Section ======= -->
    <section id="our-team" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our <span>Team</span></h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('home/assets/img/team/needy.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Levisonie Mphepo</h4>
                <span>Student</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('home/assets/img/team/kbanda.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elizabeth Banda</h4>
                <span>Student</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('home/assets/img/team/dish.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dalitso Sawati</h4>
                <span>Student</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.9826576088517!2d35.037427793683335!3d-15.804868434448714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd78d9ea42b2255a!2sPolytechnic%20(MUBAS)%2C%20Chichiri%20Campus%2C%20School%20Of%20Built%20Environment!5e0!3m2!1sen!2sbg!4v1667327056972!5m2!1sen!2sbg" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>beee16-lmphepo@poly.ac.mw{{-- <br>bece16-dsawati@poly.ac.mw --}}</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+265 9968 7 55<br>+265 994 645 6 84</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>GMS</h3>
      {{-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> --}}
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>GMS</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('home/assets/js/main.js') }}"></script>

</body>

</html>