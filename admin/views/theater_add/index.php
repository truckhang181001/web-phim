<?php
require_once "./public/php/admin/theater_add/index.php";
?>
<div class="theater-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">THÊM RẠP</h2>
        <form enctype="multipart/form-data" method="post" action="">
            <div class="row mb-3">
                <label for="id_location" class="col-form-label">Tỉnh:</label>
                <select name="id_location" class="form-select" id="id_location" aria-label="Default select example">
                    <?php
                    foreach ($data["location"] as $item) {
                        echo "
                            <option value='$item->id'>$item->name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-form-label">Địa chỉ:</label>
                <input name="address" type="text" class="form-control" id="address" value="">
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-form-label">Số điện thoại:</label>
                <input name="phone" type="number" class="form-control" id="phone" value="">
            </div>
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="addItemTheater" value="add">THÊM</button>
            </div>
        </form>

    </div>
</div>