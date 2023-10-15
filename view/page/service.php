<?php
if (!isset($_SESSION['validarIngreso'])) {
   echo
   '
            <script>
                window.location = "index.php?page=login";
            </script>
        ';
   return;
} else {
   if ($_SESSION['validarIngreso'] != "ok") {
      echo
      '
                <script>
                    window.location = "index.php?page=login";
                </script>
            ';
      return;
   }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

   <!--==== Header Section Here ======= -->
   <header class="header-section">
      <div class="container">
         <div class="header-wrapper">
            <div class="logo-menu">
               <a href="index.php?page=inicio" class="logo">
                  <img src="assets/img/logo/logo1.png" alt="img">
               </a>
            </div>
            <div class="header-bar d-lg-none">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <ul class="main-menu">
               <li class="active">
                  <a href="index.php?page=inicio">Home</a>
               </li>
               <li>
                  <a href="index.php?page=about">About</a>
               </li>
               <li>
                  <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?page=service">
                           <span>Service</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?page=service-single">
                           <span>Service Single</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="index.php?page=story">Our story</a>
               </li>
               <li>
                  <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?page=event">
                           <span>Our event</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?page=gallery">
                           <span>Gallery</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?page=error">
                           <span>Error 404</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?page=blog">
                           <span>Blog</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?page=blog-single">
                           <span>Blog Single</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="index.php?page=contact">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <!--==== Header Section End ======= -->

   <!--==== Scroll-Up Section Here ======= -->
   <div class="scroll-up">
      <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!--==== Scroll-Up Section End ======= -->

   <!--=========== Breadcumd Section Here ========= -->
   <section class="breadcumd__banner">
      <div class="container">
         <div class="breadcumd__wrapper center">
            <h1 class="left__content">
               our Service
            </h1>
            <ul class="right__content">
               <li>
                  <a href="index.php?page=inicio">
                     Home
                  </a>
               </li>
               <li>
                  <i class="fa-solid fa-chevron-right"></i>
               </li>
               <li>
                  Service
               </li>
            </ul>
         </div>
      </div>
   </section>
   <!--=========== Breadcumd Section Here ========= -->

   <!--=========== Service Section Here ========= -->
   <section class="service__section pt-120 pb-120">
      <div class="left__shape">
         <img src="assets/img/testi/shape-left.png" alt="left__shape">
      </div>
      <div class="container">
         <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
               service
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
         </div>
         <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items">
                  <div class="service__thumb">
                     <a href="service-single.html">
                        <img src="assets/img/service/service1.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           Photography
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items">
                  <div class="service__thumb">
                     <a href="index.php?page=service-single">
                        <img src="assets/img/service/service2.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           reception
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items">
                  <div class="service__thumb">
                     <a href="index.php?page=service-single">
                        <img src="assets/img/party/wedding3.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           wedding cake
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items">
                  <div class="service__thumb">
                     <a href="index.php?page=service-single">
                        <img src="assets/img/service/service3.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           wedding post
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items style__service">
                  <div class="service__thumb">
                     <a href="index.php?page=service-single">
                        <img src="assets/img/service/service4.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           wedding ring
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
               <div class="service__items style__two">
                  <div class="service__thumb">
                     <a href="index.php?page=service-single">
                        <img src="assets/img/service/service5.jpg" alt="service__image">
                     </a>
                  </div>
                  <div class="service__content">
                     <h4>
                        <a href="index.php?page=service-single">
                           wedding dress
                        </a>
                     </h4>
                     <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                     </p>
                     <a href="index.php?page=service-single" class="party__btn">
                        read more
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--=========== Service Section End ========= -->

   <!--=========== Footer Section Here ========= -->
   <div class="footer__section">
      <div class="container">
         <div class="border__area">
            <div class="container">
               <div class="footer__logo center">
                  <a href="index.php?page=inicio">
                     <img src="assets/img/logo/logo.png" alt="footer__logo">
                  </a>
               </div>
               <div class="footer__bottom center">
                  <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                  <ul class="footer__icon">
                     <li>
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                     </li>
                     <li class="active">
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                     </li>
                     <li class="mr-none">
                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                     </li>
                  </ul>
                  <ul class="footer__menu">
                     <li><a href="index.php?page=inicio">home</a></li>
                     <li><a href="index.php?page=about">about</a></li>
                     <li><a href="index.php?page=service">service</a></li>
                     <li><a href="index.php?page=story">Story</a></li>
                     <li><a href="index.php?page=gallery">gallery</a></li>
                     <li><a href="index.php?page=blog">blog</a></li>
                     <li class="mr-none"><a href="index.php?page=contact">contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--=========== Footer Section End ========= -->


   <!--Jquery 3 6 0 Min Js-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--Wow min Js-->
   <script src="assets/js/wow.min.js"></script>
   <!--Owl Carousel min Js-->
   <script src="assets/js/owl.min.js"></script>
   <!--Swiper min Js-->
   <script src="assets/js/swiper-bundle.min.js"></script>
   <!--Magnific popup min Js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!--main Js-->
   <script src="assets/js/main.js"></script>
</body>

</html>