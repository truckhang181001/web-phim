<?php
    require_once "./public/php/app/login/index.php";
?>
<form method="post" class="login-section">
    <div class="login">
        <div class="login__sub-title">
            HELLO
        </div>
        <div class="login__title">
            WELCOME BACK
        </div>
        <div class="login__input" style="margin-bottom: 30px;">
            <div class="login__input__title">
                EMAIL<span>*</span>
            </div>
            <input required type="email" name="user" class="login__input__email" style="color:white" placeholder="Nhập email">
        </div>
        <div class="login__input" style="margin-bottom: 15px;">
            <div class="login__input__title">
                MẬT KHẨU<span>*</span>
            </div>
            <input required type="password" name="password" class="login__input__psw" style="color:white" placeholder="Nhập mật khẩu">
        </div>
        <div class="login__option">
            <div class="login__option__save">
                <input type="checkbox" name="extendSession" class="login__option__save-psw">
                <div>Nhớ mật khẩu</div>
            </div>
            <a href="#" class="login__option__forget">Quên mật khẩu</a>
        </div>
        <button class="login__btn btnf" href="#">ĐĂNG NHẬP</button>
        <div class="login__sign-up">
            <div class="login__sign-up__text">Bạn chưa có tài khoản?</div>
            <a href="<?php echo PRONAME ?>/dang-ky" class="login__sign-up__btn">Đăng ký ngay</a>
        </div>
    </div>
</form>