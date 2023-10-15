<?php

if (!isset($_SESSION['validarIngreso'])){
    echo '<script>window.location="index.php?pagina=ingreso";
    </script>';
    return;
} else {
    if ($_SESSION['validarIngreso'] != "ok"){
        echo '<script>window.location="index.php?pagina=ingreso";</script>';
        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>

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
                  <a href="index.php?page=register">Register</a>
               </li>
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
                    Update
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
                        Login
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--=========== Header End Section Here ========= -->

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

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $key => $value) : ?>
                <tr>
                    <td>
                        <?php echo ($key + 1); ?>
                    </td>
                    <td>
                        <?php echo $value['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $value['email']; ?>
                    </td>
                    <td>
                        <?php echo $value['fecha']; ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <div class="px-1">
                                <a href="index.php?page=update&token=<?php echo $value['token']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $value['token']; ?>" name="eliminarRegistro">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                <?php
                                $eliminar = new ControladorFormularios();
                                $eliminar->ctrEliminarRegistro();
                                ?>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


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