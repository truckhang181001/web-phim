
<?php
    require "./public/php/app/sign_up/signup.php";
?>
<form action="" method="post">
    <section class="login-section">
        <div class="login">
                <div class="login__sub-title">
                    WELCOME
                </div>
                <div class="login__title">
                    TO BOYSCINEMA
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                HỌ VÀ TÊN<span>*</span>
                            </div>
                            <input required style="color:white" type="text" name="userName" class="login__input__psw-confirm" placeholder="Nhập họ và tên">
                        </div>
                        <div class="login__input" style="margin-bottom: 30px;">
                            <div class="login__input__title">
                                EMAIL<span>*</span>
                            </div>
                            <input required style="color:white" type="email" name="userEmail" class="login__input__email" placeholder="Nhập email">
                        </div>
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                MẬT KHẨU<span>*</span>
                            </div>
                            <input required style="color:white" type="password" name="userPsw" class="login__input__psw" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                NHẬP LẠI MẬT KHẨU<span>*</span>
                            </div>
                            <input required style="color:white" type="password" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập lại mật khẩu">
                        </div>                
                    </div>
                    
                    <div class="col-12 col-md-6">
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                GIỚI TÍNH<span>*</span>
                            </div>
                            <select required name="userSex" class="form-select" aria-label="Default select example">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                NGÀY SINH<span>*</span>
                            </div>
                            <input required style="color:white"style="color: white" type="date" name="userYear" class="login__input__psw-confirm">
                        </div>
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                SỐ ĐIỆN THOẠI<span>*</span>
                            </div>
                            <input required style="color:white" type="tel" name="userPhone" class="login__input__psw-confirm" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="login__input mb-3">
                            <div class="login__input__title">
                                ĐỊA CHỈ<span>*</span>
                            </div>
                            <input required style="color:white" type="text" name="userAddress" class="login__input__psw-confirm" placeholder="Nhập địa chỉ">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="personal-info__btn btnf mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#signUpAccountModal" style="border:none">Đăng ký ngay</button>
                </div>
            <div class="login__sign-up">
                <div class="login__sign-up__text">Bạn đã có tài khoản?</div>
                <a href="<?php echo PRONAME ?>/dang-nhap" class="login__sign-up__btn">Đăng nhập ngay</a>
            </div>
        </section>
        <!-- Modal Confirm-->
        <div class="modal fade" id="signUpAccountModal" tabindex="-1" aria-labelledby="signUpAccountModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signUpAccountModalLabel">XÁC NHẬN ĐĂNG KÝ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn đăng ký tài khoản với thông tin này?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-outline-success" name="signUpAccount" value="1111">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
</form>

