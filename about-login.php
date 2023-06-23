<?php
require('config.php');
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY user_id DESC");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>maw institute</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/about1-login.css" rel="stylesheet">
  <style>
  #h4 {
    margin-top: 30px;
    margin-left: 20px;
    font-size: 17px;
  }

  #p {
    width: 80%;
    margin-left: 20px;
    font-size: 28px;
  }

  #p1 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img {
    width: 650px;
    height: 400px;
    margin-left: 50%;
    margin-top: -400px;
  }

  #h14 {
    margin-left: 50%;
    margin-top: 50px;
    font-weight: bold;
  }

  #p2 {
    margin-left: 50%;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img1 {
    width: 600px;
    height: 400px;
    margin-left: 20px;
    margin-top: -400px;
  }

  #h24 {
    margin-left: 20px;
    margin-top: 70px;
    font-weight: bold;
  }

  #span1 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p3 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #span3 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p4 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #span4 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p5 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img5 {
    width: 600px;
    height: 400px;
    margin-left: 50%;
    margin-top: -900px;
  }

  #img6 {
    width: 600px;
    height: 400px;
    margin-left: 50%;
    margin-top: -400px;
  }

  /* Media screen responsiveness */

  @media screen and (max-width: 960px) {
    #img,
    #img1,
    #img5,
    #img6 {
      width: 100%;
      height: auto;
      margin-left: 0;
      margin-top: 0;
    }

    #h14,
    #h24,
    #span1,
    #span3,
    #span4 {
      margin-left: 20px;
      margin-top: 20px;
      font-size:14px;
    }

    #p1,
    #p2,
    #p3,
    #p4,
    #p5 {
      margin-left: 20px;
      width: 100%;
      font-size:12px;
    }
  }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">maw@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+2547564645</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
           <li class="dropdown"><a href="#"><span>Our Courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="webApplicationCourses.php">Web Application develoment courses</a></li>
              <li><a href="databaseCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php"><span>Short Courses</span> 
                
              </li>
            </ul>
            <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/mylearning.php">My learning</a></li>
            <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/contact-login.php">Contact</a></li>
          </li>
          
          <li class="dropdown"><a href="#more"><span>more</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/career-login.php">Career</a></li>
              <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/blog-login.php">Blog</a></li>
              <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/faq-login.php">FAQs</a></li>
            </ul>
          </li>
          <img src="assets/img/mes.png" alt="" style="padding-left: 15px;" onclick="toggleMenu1()">
          <vr style="background: black;width: 2px;">
          <img src="assets/img/account.png" alt="" style="padding-left: 15px;" onclick="toggleMenu()">
        </ul>
        <div class="submenuwrap" id="subMenu">
          <div class="submenu">
            <div class="userInfo">
              <img src="assets/img/account.png" alt="" >
              <h3><?php //echo $_SESSION['uname']; ?></h3>
            </div>
            <hr>

            <a href="#" class="submenulinks">
              <p>My learning</p>
              <span>></span>
            </a>
            <hr>
            <a href="#" class="submenulinks">
              <p>Edit profile</p>
              <span>></span>
            </a>
            <hr>
            <a href=" https://9028-102-220-12-50.ngrok-free.app/maw/logout.php" class="submenulinks">
              <p>logout</p>
              <span>></span>
            </a>
          </div>
        </div>
        <!--notificatio-->
        <div class="submenuwrap1" id="subMenu1">
            <div class="submenu1">
              <div class="userInfo1">
                <h3>Notifications</h3>
              </div>
              <hr>
  
              <a href="#" class="submenulinks1">
                <p>No Notifications</p>
              </a>
              <a href="#" class="submenulinks1">
                <p>We'll let you know when deadlines<br> are approaching, or
                     there is a course update</p>
              </a>
            </div>
          </div>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="background-color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="background-color:black;"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  

  <main id="more">
      <div >
        <h4 id="h4">
        <span >
          <a href="" style="color:lightgrey">Home</a>
        </span>/About us</h4>

        <p id="p">
        The MAW Institute is driven by a shared purpose: to make a 
        better world through education, research, and innovation. 
        We are fun and real, inventive 
        and artistic, obsessed with numbers, and welcoming to talented 
        people regardless of where they come from.
        </p>

        <p id="p1">
         At Maw Institute, we are at the forefront of digital engineering education,
         equipping aspiring engineers with the skills and knowledge needed to thrive in 
         the fast-paced world of technology. With a relentless pursuit of innovation and 
         a deep-rooted passion for digital transformation, we are dedicated to shaping the 
         future of engineering. Our institute offers cutting-edge programs that blend 
         theoretical foundations with hands-on experiences, preparing students to tackle 
         complex challenges and create solutions in the digital realm. Through our professional
          tuitors, state-of-the-art facilities, and industry partnerships, we provide 
          a dynamic learning environment that fosters creativity, collaboration, and critical
          thinking. Join us as we empower the next generation of digital engineers, enabling
          them to revolutionize industries, drive technological advancements, and shape the
          digital landscape for a better tomorrow
        </p>
        <img src="assets/img/about.png" alt="" id="img">
      </div>
      <div>
        <h4 id="h14">Mission statement</h4>
        <p id="p2">
        At Maw Institute, we are committed to empowering individuals to unlock their full 
        potential and achieve excellence. With a visionary approach and a passion for
         knowledge, we strive to create an environment that fosters intellectual growth,
        innovation, and personal development. Our institute is dedicated to providing 
        exceptional educational programs and resources, coupled with personalized guidance,
        to cultivate the next generation of leaders, thinkers, and changemakers. Through our
        unwavering dedication to academic excellence, holistic learning experiences, and a
        vibrant community, we aim to shape minds, inspire creativity, and cultivate a 
        lifelong love for learning. Join us on this transformative journey as we empower
        individuals to embrace their unique talents, expand their horizons, and make a 
        lasting impact on the world.
        </p>
        <img src="assets/img/about.png" alt="" id="img1">
      </div>

      <div>
        <h4 id="h24">MAW's Values</h4>
        <span id="span1">Excellence and Curiosity</span>
        <br>
        <p id="p3"> 
We strive for the highest standards of integrity, and intellectual and creative excellence. We seek new knowledge and practical impact, in service to the nation and the world.

We prize originality, ingenuity, honesty, and boldness. We love discovery and exploration, invention and making. We delight in the full spectrum of human wisdom.

Drawing strength from MAW’s distinctive roots, we believe in learning by doing, and we blur the boundaries between disciplines as we seek to solve hard problems. Embracing the unconventional, we welcome quirkiness, nerdiness, creative irreverence, and play.

We accept the risk of failing as a rung on the ladder of growth. With fearless curiosity, we question our assumptions, look outward, and learn from others.
        </p>

        <span id="span3">Transparency and Respect</span>
        <br>
        <p id="p4">
        We champion the open sharing of information and ideas.

Because learning is nourished by a diversity of views, we cherish free expression, debate, and dialogue in pursuit of truth – and we commit to using these tools with respect for each other and our community.

We strive to be transparent and worthy of each other’s trust – and we challenge ourselves to face difficult facts, speak plainly about failings in our systems, and work to overcome them. 

We take special care not to overlook bad behavior or disrespect on the grounds of great accomplishment, talent, or power. 
        </p>

        <span id="span4">Networking and Community</span>
        <br>
        <p id="p5">
        We strive to make our community a humane and welcoming place where people from a diverse range of backgrounds can grow and thrive – and where we all feel that we belong.

We know that attending to our own and each other’s wellbeing in mind, body, and spirit is essential. We believe that decency, kindness, respect, and compassion for each other as human beings are signs of strength.

Valuing potential over pedigree, we know that talent and good ideas can come from anywhere – and we value one another’s contributions in every role.

Together we possess uncommon strengths, and we shoulder the responsibility to use them with wisdom and care for humanity and the natural world.
        </p>
        <img src="assets/img/about.png" alt="" id="img5">
        <img src="assets/img/about.png" alt="" id="img6">
      </div>



       <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Leadership</h2>
         
          </div><!-- End Team Member -->
        </div>
        <br>
        <br>
        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/jael.jpg" class="img-fluid" alt="">
              <h4>Jael Ong'asia</h4>
              <span>Head Human Capital</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/abiud.jpg" class="img-fluid" alt="">
              <h4>Timothy Maruti</h4>
              <span>Tuitor</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/abiud.jpg" class="img-fluid" alt="">
              <h4>Manu</h4>
              <span>Tuitor</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/daggy.jpg" class="img-fluid" alt="">
              <h4>Douglas Otunga</h4>
              <span>Project Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/clint1.jpg" class="img-fluid" alt="">
              <h4>Clinton Toves</h4>
              <span>IT Specialist</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/abiud.jpg" class="img-fluid" alt="">
              <h4>Manu</h4>
              <span>Tuitor</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Maw Institute</span>
          </a>
          <p>Unlock your programming potential at Maw institute.Here, we transform aspiring developers into industry-ready professionals</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Courses</h4>
          <ul>
            <li><a href="#">Short Programming Courses</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">IOS App Development</a></li>
            <li><a href="#">Hybrid App Development</a></li>
            <li><a href="#">Database Programming</a></li>
            <li><a href="#">Android App Development</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Nairobi <br>
            Utali house<br>
            Kenya <br><br>
            <strong>Phone:</strong> +254757561782<br>
            <strong>Email:</strong>maw@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Maw</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Daggy and clinto</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script>
    let subMenu=document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
      
    }
  </script>

<script>
    let subMenu1=document.getElementById("subMenu1");
    function toggleMenu1(){
      subMenu1.classList.toggle("open-menu1");
      
    }
  </script>
  <script src="assets/js/main.js"></script>

</body>

</html>