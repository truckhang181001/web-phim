<div class="film-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA KHÁCH HÀNG</h2>
        <form enctype="multipart/form-data" method="post">
            <div class="row mb-3">
                <label for="name" class="col-form-label">Tên khách hàng:</label>
                <input name="name" type="text" class="form-control" id="name" value="">
            </div>
            <div class="row mb-3">
                <label for="sex" class="col-form-label">Thể loại:</label>
                <select name="sex" class="form-select" id="sex" aria-label="Default select example">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
            <div class="row mb-3">
                <label for="dob" class="col-form-label">Năm sinh:</label>
                <input name="dob" type="date" class="form-control" id="dob" value="">
            </div>
            <div class="row mb-3">
                <label for="address" class="col-form-label">Địa chỉ:</label>
                <input name="address" type="text" class="form-control" id="address" value="">
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-form-label">Số điện thoại:</label>
                <input name="phone" type="text" class="form-control" id="phone" value="">
            </div>
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="addItemFilm" value="add">LƯU</button>
                <button class="btn btn-primary" type="submit" name="addItemFilm" value="add">HỦY</button>
            </div>
        </form>
    </div>
</div>