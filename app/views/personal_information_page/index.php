<?php
    require_once "./public/php/app/personal_information/update_customer.php";
    require_once "./public/php/app/personal_information/signout.php";

?>
<form method="post">
    <section class="personal-info-section">
        <div class="personal-info">
            <div class="personal-info__sub-title">
                CHỈNH SỬA
            </div>
            <div class="personal-info__title">
                THÔNG TIN CÁ NHÂN
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            HỌ VÀ TÊN<span>*</span>
                        </div>
                        <input required type="text" name="userName" class="personal-info__input__username" style="color:white" value="<?php echo $data->name?>">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            EMAIL<span>*</span>
                        </div>
                        <input type="email" name="userEmail" class="personal-info__input__email" style="color:white" readonly value="<?php echo $data->email?>">
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            MẬT KHẨU<span>*</span>
                        </div>
                        <input required type="password" name="userPsw" class="personal-info__input__psw" style="color:white" value="<?php echo $data->password?>">
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            GIỚI TÍNH<span>*</span>
                        </div>
                        <select required name="userSex" class="form-select" aria-label="Default select example">
                            <?php
                                $sex=['Nam','Nữ','Khác'];
                                foreach ($sex as $item){
                                    if($item == $data->sex)
                                        echo "<option value='$item' selected>$item</option>";
                                    else echo "<option value='$item'>$item</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            NGÀY SINH<span>*</span>
                        </div>
                        <input required style="color: white" type="date" name="userYear" class="personal-info__input__psw-confirm" value="<?php echo $data->dob?>">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            SỐ ĐIỆN THOẠI<span>*</span>
                        </div>
                        <input required style="color: white" type="text" name="userPhone" class="personal-info__input__psw-confirm"  placeholder="Nhập số điện thoại" value="<?php echo "0".$data->phone?>">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            ĐỊA CHỈ<span>*</span>
                        </div>
                        <input required style="color: white" type="text" name="userAddress" class="personal-info__input__psw-confirm"  placeholder="Nhập địa chỉ" value="<?php echo $data->address?>">
                    </div>
                    <br>
                    <?php
                        //Tắt chức năng cập nhật khi là admin
                        if(!isset($_SESSION['admin']))
                        echo "<button type='button' class='personal-info__btn btnf' data-bs-toggle='modal' data-bs-target='#exampleModal'>Cập nhật</button>";
                    ?>
                    <button type="submit" class="personal-info__btn btnf" data-bs-toggle="modal" name='sign_out'>Đăng xuất</button>
                </div>   
            </div>
        </div>
    </section>
    <!-- Modal Confirm-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn cập nhật thông tin của mình?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-outline-success" name="updatePersonalInfo" value="1">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>
    
