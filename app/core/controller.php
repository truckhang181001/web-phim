<?php
    class controller{
        function getModel($model){
            require_once "./app/models/".$model.".php";
            return new $model;
        }
        function getView($view,$data=[]){
            require_once "./app/views/".$view."/index.php";
        }
        function getViewAd($view,$data=[]){
            require_once "./admin/views/".$view."/index.php";
        }
    }
?>