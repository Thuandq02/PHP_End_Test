<!doctype html>
<html lang="en">
<head>
    <title>E-Commerce</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/styles/bootstrap4/bootstrap.min.css">
    <link href="./assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/responsive.css">
    <link rel="stylesheet" href="./assets/css/Style.css">
</head>
<body>


<script src="./assets/js/jquery-3.2.1.min.js"></script>
<script src="./assets/styles/bootstrap4/popper.js"></script>
<script src="./assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="./assets/plugins/greensock/TweenMax.min.js"></script>
<script src="./assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="./assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="./assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="./assets/plugins/easing/easing.js"></script>
<script src="./assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="./assets/js/custom.js"></script>
</body>
</html>

<?php
require __DIR__ . "/vendor/autoload.php";
$productController = new \App\Controller\ProductController();
$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : NULL;

switch ($page) {
    case "add_product":
        $productController->addProduct();
        break;
    case "edit_product":
        $productController->editProduct();
        break;
    case "delete_product":
        $productController->deleteProduct();
        break;
    case "list_product":
        $productController->showListProduct();
        break;
    case "home":
        $productController->showProduct();
        break;
    default :
        $productController->showProduct();
}


?>