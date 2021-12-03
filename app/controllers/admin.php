<?php
    class admin extends Controller{
        function film($url="default"){
            require_once "./admin/controllers/film.php";
        }
        function customer($url="default"){
            require_once "./admin/controllers/customer.php";
        }
        function theater($url="default"){
            require_once "./admin/controllers/theater.php";
        }
        function room($url="default"){
            require_once "./admin/controllers/room.php";
        }
        function price($url="default"){
            require_once "./admin/controllers/price.php";
        }
        function category($url="default"){
            require_once "./admin/controllers/category.php";
        }
        function schedule($url="default"){
            require_once "./admin/controllers/schedule.php";
        }
        function showtime($url="default"){
            require_once "./admin/controllers/showtime.php";
        }
    }
    
?>