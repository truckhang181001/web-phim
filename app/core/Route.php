<?php
    class Route extends controller{
        public $route = [
            "trang-chu"=>["home","Trang chủ"],
            "thong-tin"=>["info","Thông tin"],
            "tim-kiem"=>["search","Tìm kiếm"],
            "lich-chieu"=>["ticket_plan","Lịch chiếu"],
            "dat-ve"=>["booking","Đặt vé"],
            "thanh-toan"=>["checkout","Thanh toán"],
            "dang-nhap"=>["login","Đăng nhập"],
            "dang-ky"=>["signup","Đăng ký"],
            "ERROR-404"=>["error404","Lỗi"],
            "lien-he" =>["contact","Liên hệ"],
            "admin-boys"=>["admin","Quản lý"],
            "xac-thuc-email" =>["email_verification","Xác thực"],
            "thong-tin-ca-nhan"=>["personal_information","Thông tin cá nhân"],
            "thanh-toan-thanh-cong"=>["checkout_succ","Thanh toán"],
            "hoan-tat-thanh-toan" =>["payment_success","Hoàn tất thanh toán"]
        ];
        protected $req = [
            "checkout",
            "booking",
            "admin",
            "personal_information",
            "checkout_succ"
        ];
        protected $controller = "Home";
        protected $action = "";
        protected $param = [];

        function routeDir()
        {
            //Controller
            $url = $this->UrlProcess();

            if(isset($url[0]) && isset($this->route[$url[0]]) && file_exists("./app/controllers/".$this->route[$url[0]][0].".php")){
                $this->controller = $this->route[$url[0]][0];
                unset($url[0]);
            }            
            //Phân quyền
            require_once "./app/core/decentral.php";
            require_once "./app/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            //Action
            if(isset($url[1]))
            {
                if(method_exists($this->controller,$url[1])){
                    $this->action = $url[1];
                    unset($url[1]);
                    //Xu li Param
                    $this->param = $url?array_values($url):[];
                    call_user_func_array([$this->controller,$this->action],$this->param);        
                }
            }

        }
        function UrlProcess(){
            if(isset($_GET["url"])){
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }
    }
?>