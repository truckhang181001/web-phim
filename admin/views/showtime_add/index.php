<?php
require_once "./public/php/admin/showtime_add/index.php";
?>
<div class="showtime-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">THÊM SUẤT CHIẾU</h2>
        <form enctype="multipart/form-data" method="post" action="">
            <div class="row mb-3">
                <label for="id_schedule" class="col-form-label">ID Lịch chiếu:</label>
                <select name="id_schedule" class="form-select" id="id_schedule" aria-label="Default select example">
                    <?php
                    foreach ($data["schedule"] as $item) {
                        echo "
                            <option value='$item->id'>$item->id</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-form-label">Hình thức:</label>
                <select name="type" class="form-select" id="type" aria-label="Default select example">
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                </select>
            </div>
        
            <div class="row mb-3">
                <div class="col-6">
                <label for="start_time" class="col-form-label">Giờ bắt đầu:</label>
                <input name="start_time" type="time" class="form-control" id="start_time" value="" required>
                </div>
                <div class="col-6">
                <label for="end_time" class="col-form-label">Giờ kết thúc:</label>
                <input name="end_time" type="time" class="form-control" id="end_time" value="" required>
                </div>
                
            </div>
            
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="addItemShowtime" value="add">ADD</button>
            </div>
        </form>
    </div>
</div>