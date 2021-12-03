<?php        
    if(!isset($_POST['callajax'])){
        require __DIR__."/index.php";
    }
    else{
        if(isset($_GET['url'])){
            $ajaxUrl = UrlProcessAjax();
            require "./public/php/".$ajaxUrl[1]."/".$ajaxUrl[2]."/".$ajaxUrl[3];
        }
    }
    function UrlProcessAjax(){
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }