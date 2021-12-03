<?php
require_once "./public/php/admin/showtime/showtime_edit.php";
?>
<div class="showtime-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA SUẤT CHIẾU</h2>
        <form enctype="multipart/form-data" method="post" action="">
            <div class="row mb-3">
                <label for="id_schedule" class="col-form-label">ID Lịch chiếu:</label>
                <select name="id_schedule" class="form-select" id="id_schedule" aria-label="Default select example">
                <?php
                    foreach ($data["schedule"] as $item) {
                        if($data['showtime']->id_schedule==$item->id){
                            echo "
                            <option selected value='$item->id'>$item->id</option>";
                        }else{
                            echo "<option value='$item->id'>$item->id</option>";
                        }
                        
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-form-label">Hình thức:</label>
                <select name="type" class="form-select" id="type" aria-label="Default select example">
                    <option selected hidden value="<?php echo $data['showtime']->type?>"><?php echo $data['showtime']->type?></option>
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                    
                </select>
            </div>
        
            <div class="row mb-3">
                <div class="col-6">
                <label for="start_time" class="col-form-label">Giờ bắt đầu:</label>
                <input name="start_time" type="time" class="form-control" id="start_time" value="<?php echo $data['showtime']->start_time?>" required>
                </div>
                <div class="col-6">
                <label for="end_time" class="col-form-label">Giờ kết thúc:</label>
                <input name="end_time" type="time" class="form-control" id="end_time" value="<?php echo $data['showtime']->end_time?>" required>
                </div>
                
            </div>
            
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="editItemShowtime" value="<?php echo $data['showtime']->id?>">EDIT</button>
            </div>
        </form>
    </div>
</div>