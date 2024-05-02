<?php
session_start();
$display='block';
$dis='none';
$di='none';
?>
<style>
#login
{
display:<?php 
if(isset($_SESSION['Name']))
{
    echo $dis;
}
if(isset($_SESSION['admin']))
{
echo $dis;
}
?>;
}
#logout
{
display:<?php 
 if(isset($_SESSION['Name'])||isset($_SESSION['admin']))
 {
 echo $display;
 }
 echo $dis?>;
}
#admin{
display:<?php
if(isset($_SESSION['Name']))
{
echo $dis;

}
elseif(isset($_SESSION['admin']))
{
echo $display;
}
else
{
echo $di;
}?>;
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SoftWareHub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Software Hub</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
    
                <li><a class="nav-link scrollto" href="section.html">VSCode</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" id="login"href="signin.html">Login</a></li>
                      <li><a class="nav-link scrollto"id="logout" href="logout.php">Logout</a></li>
                                <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
                                              <li><a class="nav-link scrollto"id="Admin" href="admin.html">Admin</a></li>
                                
                      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Software Hub</strong></h3>
      <h1><!--We're Creative Agency-->A Complete Guide</h1>
      <h2><!--We are team of talented designers making websites with Bootstrap-->A comprehensive platform providing installation guidelines for
        various software tools and languages used in computer science
        engineering</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
          <p>A comprehensive platform providing guidelines for various software tools and languges used in computer science engineering.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Join us on a journey into the world of software intallations gain insights,tips,and tricks as we navigate challenges faced by CSE students.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>properly installing software tools and languges saves time and increases productivity for students. </li>
              <li><i class="ri-check-double-line"></i>Following installation guidelines reduces the chances of encountering errors and technical issues during development.  </li>
              <li><i class="ri-check-double-line"></i> intuitive insatllation processes build students's confidence in handling complex software systems.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             provides certain set of software and its Documentation and Data.it Also features The complete Details of software And how it works
                 Features the apps that are useful for future use.Apps That are used by a student For learning...
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>By mastering the art of software installation,you unlock endless possibilities in the world of computer science.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">convenience</a></h4>
              <p class="description">Students no longer need to search accorss different platforms.Our software hub is one-stop-shop for all software needs.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Easy to download</a></h4>
              <p class="description">Download software with the click of button straight from our software hub no need to search elsewhere.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Large library</a></h4>
              <p class="description">Our softwareHub boasts a vast selection of software, including popular favourites and lesser-known gems.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Regular updates</a></h4>
              <p class="description">Stay up to date with the latest software versions and insatllation best practices.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Explore different software tools
            and languages of Computer Science Engineering.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app" class="filter-active">E1</li>
              <li data-filter=".filter-sem">E2</li>
              <li data-filter=".filter-card">E3</li>
              <li data-filter=".filter-web">E4</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" id="div1">
               <a href="e1s1.html">
            <img src="sem1.png" class="img-fluid" alt="" id="sem">
            <div class="portfolio-info">
            <h4> Computer Science Engineering</h4>

              <p>E1 Semester1</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>
       <a href="e1s2.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="SEM2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
     
              <h4>Computer Science Engineering</h4></a>
              <p>E1 Semester2</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>
      <a href="e2s1.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-sem" id="div1">
            <img src="semester1.png" class="img-fluid" alt="">
            <div class="portfolio-info">

              <h4>Computer Science Engineering</h4></a>
              <p>E2 Semester1</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>
          
          <a href="e2s2.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-sem" >
            <img src="e4sem.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Computer Science Engineering</h4>
              <p>E2 SEMESTER2</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>
<a href="e3s1.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" id="div1">
            <img src="semester-1.png" class="img-fluid" alt="" id="sem">
            <div class="portfolio-info">
              <h4>Computer Science Engineering</h4>
              <p>E3 SEMESTER1</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
</a>
        <a href="e3s2.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="e3sem2.jpg" class="img-fluid" alt="" id="sem">
            <div class="portfolio-info">
              <h4>Computer Science Engineering</h4>
              <p>E3 SEMESTER2</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
</a>
<a href="e4s1.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" id="div1">
            <img src="DIGITAL LOGIC (1).jpg.1.jpg" class="img-fluid" alt="" id="sem">
            <div class="portfolio-info">
              <h4>Computer Science Engineering</h4>
              <p>E4 SEMESTER1</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
</a>
<a href="e4s2.html">
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="E2sem2.jpeg" class="img-fluid" alt="" id="sem">
            <div class="portfolio-info">
              <h4>Computer Science Engineering</h4>
              <p>E4 SEMESTER2</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
</a>
 </div>
 </section>

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What type of softwares will you provide? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                   All types of softwares that came in the Computer Science Engineering Labaratory and basic languages(C,Java,Python) running
                   softwares.We will provide all the extensions of VisualStudio Code.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Will you provide the softwares with downloading feature?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
             No.We will only provide the guidelines of installing a software but not the downloading feature.For download you have to visit the official website of required software. 
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Will you give the installation guidelines of softwares for windows os also?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
             No.Here the guidelines which we provide are only for Ubuntu softwares.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">What type of guidelines you provide? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              We will provide the guidelines of how to install a require software with clear step by step procedure with troubleshooting Screen shots.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Will you provide any information about the how to use the software? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
               Yes,Sure.Not only the installation guidelines but also we will provide complete description about the software and its usage.
               </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Will this SoftwareHub is only meant for CSE students?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
             Yes.Unfortunately at present our SoftwareHub is only about the CSE.But in future we will increase the scope of our SoftWareHub..
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>We, the team of SoftwareHub has developed this website,Contact us if you have any queries and technical issues.We will provide our best to solve them.</p>
        </div>

        <div style="margin-left:270px">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6546.289017743985!2d79.96448908378972!3d15.540072691603314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b017506bb9fed%3A0xc24a989ce5b955ae!2sSSN%20Degree%20College!5e0!3m2!1sen!2sin!4v1699711939370!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rajiv Gandhi University Of Knowledge and Technologies-Ongole,AP,Pin code-523225</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>seproject13hub@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="zip_verification/test.php" method="post" role="form" class="php-email-form">
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
              <div class="error-message">Your message has been sent. Thank you!</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SoftwareHub</h3>
            <p>Rajiv Gandhi University Of Knowledge and Technologies<br>Ongole,AP<br>Pin code-523225
              <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong>seproject13hub@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SoftwareHub</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="#">Team of Project13</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
