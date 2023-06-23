<?php

require('config.php');
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY user_id DESC");
?>
<?php
require_once "config.php";

$sql="SELECT * FROM course WHERE course_id IN(2,6,7,8,11,12,14)";
$all_courses=$conn->query($sql);
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
  <link href="assets/css/course-login1.css" rel="stylesheet">
  <!-- css-->
  <style>
#container {
  display: flex;
  flex-wrap: wrap;
  margin: 50px auto;
  max-width:95%;
  flex-direction: row;
}

#container1 {
  flex: 0 0 50%;
  max-width: 620px;
  margin: 10px;
  padding: 10px;
  box-sizing: border-box;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}


  #img {
    width: 190px;
    height: 190px;
  }

  #h4 {
    width: 400px;
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 20px;
    color: #37517e;
  }

  #p {
    width: 95%;
    margin: 10px 0 0 0;
    font-size: 14px;
    text-align:justify;
  }

  #member-info {
    padding-left: 30px;
  }

  #member:hover {
    transform: translateY(-10px);
  }

  #span {
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: 800;
  }

  #span::after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 1px;
    background: #cbd6e9;
    bottom: 0;
    left: 0;
  }

  #btn {
    margin-left: 200px;
    border: 0;
    border-radius: 10px;
    width: 100px;
    cursor: pointer;
  }
  #h5{
    font-size:16px;
    position:absolute;
    margin-top:-20px;
    color:blue;
  }
  #a1{
    color:grey;
  }

  /* Media query for screens with a maximum width of 600px */
  @media (max-width: 600px) {
    #container1 {
      flex: 1 1 100%;
    }

    #h4 {
      width: 90%;
      font-size: 14px;
    }

    #p {
      width: 90%;
      font-size: 10px;
      text-align:justify;
    }
    #span{
      width:90%;
      font-size: 10px;
    }

    #btn {
      margin-left: 0;
      margin-top: 10px;
    }
    #img {
    width: 95px;
    height: 95px;
  }
  }

  /* Media query for screens with a minimum width of 601px and maximum width of 900px */
  @media (min-width: 601px) and (max-width: 900px) {
    #container1 {
      flex: 1 1 calc(50% - 40px);
    }
  }

  /* Media query for screens with a minimum width of 901px */
  @media (min-width: 901px) {
    #container1 {
      flex: 1 1 calc(33.33% - 40px);
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
          <li class="dropdown"><a href="#container"><span>All courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="#">Web Application develoment courses</a></li>
              <li><a href="databaseCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php"><span>Short Courses</span> </a>
              </li>
            </ul>
          </li>
          <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/mylearning.php">My learning</a></li>
          <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/contact-login.php">Contact</a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/about-login.php">About Us</a></li>
              <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/career-login.php">Career</a></li>
              <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/blog-login.php">Blog</a></li>
              <li><a href="https://9028-102-220-12-50.ngrok-free.app/maw/faq-login.php">FAQs</a></li>
            </ul>
          </li>
          <img src="assets/img/mes.png" alt="" style="padding-left: 15px;" onclick="toggleMenu1()">
          
          <img src="assets/img/account.png" alt="" style="padding-left: 15px;" onclick="toggleMenu()">
        </ul>
        <div class="submenuwrap" id="subMenu">
          <div class="submenu">
            <div class="userInfo">
              <img src="assets/img/account.png" alt="" >
              
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
            <a href="https://9028-102-220-12-50.ngrok-free.app/maw/logout.php" class="submenulinks">
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
  <main id="main">
  <!-- ======= courses Section ======= -->
  
  <div id="container" data-aos="fade-up">
    <h4 id="h5">
        <span>
            <a href="#" id="a1">All courses/</a>
        </span>
        Web Application development courses.
    </h4>
      <?php
      while($row=mysqli_fetch_assoc($all_courses)){
      ?>
        <div id="container1">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="images/<?php echo $row['image'] ?>" id="img" alt=""></div>
              <div id="member-info">
                <h4 id="h4"><?php echo $row['course_name'] ?></h4>
                <span id="span"><?php echo $row['course_descrip'] ?></span>
                <p id="p"><?php echo $row['moreinfo'] ?></p>
                   <span id="span"><?php echo $row['course_fee'] ?></span>
                   <span id="span"><?php echo $row['duration'] ?></span>
                   <a href="course-application.php?id=<?php echo $row["course_id"] ?>">
                   <button id="btn">proceed
                   <i class="bi bi-arrow-right-short"></i></button>
                   </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
     
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