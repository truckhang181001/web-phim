<?php
    require_once "./public/php/admin/theater/theater_edit.php";
?>
<div class="row film-detail" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA PHIM</h2>
        <form enctype="multipart/form-data" method="post">
                <div class="row col-3">
                    <label for="id_location" class="col-form-label">Thành phố</label>
                    <select name="id_location" class="form-select" id="id_location" aria-label="Default select example">
                        <?php
                        foreach ($data["location"] as $item) {
                            
                            if ($item->id == $data["theater"]->id_location && $_GET['id']==$data["theater"]->id)
                                echo "
                                    <option value='$item->id' selected>$item->name</option>";
                            
                            else echo "
                                <option value='$item->id'>$item->name</option>";
                            
                        }
                        ?>
                    </select>
                </div>   
            <div class="row mb-3">
                <label for="address" class="col-form-label">Địa chỉ</label>
                <input type="text" name="address" class="form-control" id="address" value="<?php echo $data['theater']->address?>">
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="phone" value="<?php echo $data['theater']->phone?>">
            </div>          
            <div class="row mb-3">
                <button class="btn btn-primary col-3" type="submit" name="editItemTheater" value="<?php echo $data['theater']->id ?>">SAVE</button>
                <a href="#" class="btn btn-secondary col-3">CANCEL</a>
            </div>
        </form>
    </div>
</div>