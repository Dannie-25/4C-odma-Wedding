<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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

    <?php
if (isset($_GET["page"])) {
    if (
        $_GET["page"] == "inicio" ||
        $_GET["page"] == "about" ||
        $_GET["page"] == "service" ||
        $_GET["page"] == "story" ||
        $_GET["page"] == "gallery" ||
        $_GET["page"] == "blog" ||
        $_GET["page"] == "blog-single" ||
        $_GET["page"] == "contact" ||
        $_GET["page"] == "event" ||
        $_GET["page"] == "service-single" ||
        $_GET["page"] == "login" ||
        $_GET["page"] == "register" ||
        $_GET["page"] == "update" ||
        $_GET["page"] == "data" ||
        $_GET["page"] == "exit"
    ) {

        include "page/" . $_GET["page"] . ".php";
    } else {
        include "page/error.php";
    }
} else {
    include "page/register.php";
}
?>    
</body>
</html>


