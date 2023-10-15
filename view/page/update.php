<?php

if (isset($_GET['token'])) {
    $item = "token";
    $valor = $_GET['token'];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>

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

    <!--=========== Udate Section Here============= -->

    <div class="d-flex justify-content-center text-center">
        <form class="p-5 bg-light" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $usuario['nombre']; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" value="<?php echo $usuario['email']; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="actualizarPassword">
                    <input type="hidden" name="passwordActual" value="<?php echo $usuario['password']; ?>">
                    <input type="hidden" name="tokenUsuario" value="<?php echo $usuario['token']; ?>">
                </div>
            </div>
            <?php
            $actualizar = ControladorFormularios::ctrActualizarRegistro();
            if ($actualizar == "ok") {
                echo '
                        <script>
                            if(window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>
                ';
                echo '
                    <div class="alert alert-success">El usuario ha sido actualizado</div>
                    <script>
                        setTimeout(function(){
                            window.location = "index.php?page=data";
                        }, 1600);
                    </script>
                ';
            }
            ?>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <!--=========== Udate End Section Here ============= -->


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