<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--=========== Header Section Here ========= -->
    <header class="header-section">
      <div class="container">
         <div class="header-wrapper">
            <div class="logo-menu">
               <a href="index.php?page=index" class="logo">
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
                  <a href="index.php?page=login">Login</a>
               </li>
               <li class="active">
                  <a href="index.php?page=inicio">Home</a>
               </li>
               <li>
               <li>
                  <a href="index.php?page=exit">Exit</a>
               </li>
            </ul>
         </div>
      </div>
   </header>

    <section class="breadcumd__banner">
        <div class="container">
            <div class="breadcumd__wrapper center">
                <h1 class="left__content">
                    Register
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
                        Register
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--=========== Header End Section Here ========= -->

    <!--=========== Register Section Here ========= -->
    <div class="d-flex justify-content-center text-center">
        <form class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="nombre">Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="registroNombre">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="registroEmail">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="password" class="form-control" placeholder="Password" id="pwd" name="registroPassword">
                </div>
                <?php
                $registro = ControladorFormularios::ctrRegistro();
                if ($registro == "ok") {
                    echo '
                <script>
                  if(window.history.replaceState){
                      window.history.replaceState(null, null, window.location.href);
                  }
                </script>
                ';
                    echo '<div class="alert alert-success">El usuario se ha registrado exitosamente</div>';
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <!--=========== Register End Section Here ========= -->

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
            <!--=========== Footer End Section Here ========= -->
        </form>
    </div>
</body>

</html>