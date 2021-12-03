<?php
require_once "./public/php/admin/category/category_edit.php";
?>
<div class="row category-detail" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA THỂ LOẠI</h2>
        <form enctype="multipart/form-data" method="post">
            <div class="row mb-3">
                <label for="name" class="col-form-label">Tên thể loại:</label>
                <input name="name" type="text" class="form-control" id="name" value="<?php echo $data["category"]->name?>">
            </div>
            <div>
                <button class="btn btn-primary col-3" type="submit" name="editItemCategory" value="<?php echo $data["category"]->id?>">SAVE</button>
                <a href="#" class="btn btn-secondary col-3">CANCEL</a>
            </div>
        </form>
    </div>
</div>