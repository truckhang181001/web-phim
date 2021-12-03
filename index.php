<?php
date_default_timezone_set('Asia/Saigon');
require_once "./app/core/controller.php";
require_once "./config.php";
require_once "./App/Core/Route.php";
$RouteUrl = new route();
$url = $RouteUrl->UrlProcess();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Boostrap | Owl Carousel | Jquery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <?php
    // Xử lý  css và title của trang
    $ctrl = [];
    if (isset($url[0]) && isset($RouteUrl->route[$url[0]])) {
        $ctrl = $RouteUrl->route[$url[0]];
    } else $ctrl = $RouteUrl->route["trang-chu"];
    //CSS Admin
    if (isset($url) && $url[0] == "admin-boys") {
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/admin/index.css'>";
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/admin/nav_bar_admin.css'>";
        if (isset($url[1])) {
            echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/admin/" . $url[1] . ".css'>";
        }
    }
    //CSS Customer
    else {
        //Base CSS
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/app/index.css'>";
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/app/navbar.css'>";
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/app/footer.css'>";
        // View CSS
        echo "<link rel='stylesheet' href='" . PRONAME . "/public/css/app/" . $ctrl[0] . ".css'>";
    }
    //Title
    echo "<title>BOYCINEMA | " . $ctrl[1] . "</title>"
    ?>

</head>

<body>
    <!-- Boostrap | Owl Carousel | Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- PHP CODE -->
    <?php
    // Kiểm tra session
    session_start();
    if(isset($_SESSION['endTime']) && $_SESSION['endTime'] < date("YmdHis")){
        session_unset();
        session_destroy();
        session_start();
    }
    // Hiện thị Nav
    if (!isset($url) || $url[0] != "admin-boys") {
        require_once __DIR__ . "/share/navBar.php";
    }
    // else require_once __DIR__ . "/share/navBarAdmin.php";
    //Hiện thị Views
    require_once __DIR__ . "/app/bridge.php";
    ?>
    <?php
    if (!isset($url) || $url[0] != "admin-boys") {
        require_once __DIR__ . "/share/footer.php";
    }
    ?>
</body>

</html>