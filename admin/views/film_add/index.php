<?php
require_once "./public/php/admin/film_add/index.php";
?>
<div class="film-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">THÊM PHIM</h2>
        <form enctype="multipart/form-data" method="post" action="">
            <div class="row mb-3">
                <label for="recipient-name" class="col-form-label">Tên phim:</label>
                <input name="name" type="text" class="form-control" id="update_name" value="" required>
            </div>
            <div class="row mb-3">
                <label for="message-text" class="col-form-label">Mô tả:</label>
                <textarea name="desc" class="form-control" id="message-text" required></textarea>
            </div>
            <div class="row mb-3">
                <label for="id_category" class="col-form-label">Thể loại:</label>
                <select name="id_category" class="form-select" id="id_category" aria-label="Default select example">
                    <?php
                    foreach ($data["category"] as $item) {
                        echo "
                            <option value='$item->id'>$item->name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="release" class="col-form-label">Ngày công chiếu:</label>
                <input name="release" type="date" class="form-control" id="release" required>
            </div>
            <div class="row mb-3">
                <label for="studio" class="col-form-label">Hãng sản xuất:</label>
                <input name="studio" type="text" class="form-control" id="studio" required>
            </div>
            <div class="row mb-3">
                <label for="director" class="col-form-label">Đạo diễn:</label>
                <input name="director" type="text" class="form-control" id="director" required>
            </div>
            <div class="row mb-3">
                <label for="actor" class="col-form-label">Diễn viên:</label>
                <input name="actor" type="text" class="form-control" id="actor" required>
            </div>
            <div class="row mb-3">
                <label for="time" class="col-form-label">Thời lượng:</label>
                <input name="time" type="number" class="form-control" id="time" required>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-form-label">Hình thức:</label>
                <select name="type" class="form-select" id="type" aria-label="Default select example">
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                </select>
            </div>
            <div class="row mb-3">
                <label for="poster" class="col-form-label">Poster:</label>
                <input class="form-control" name="poster[]" type="file" />
            </div>
            <div class="row mb-3">
                <label for="banner" class="col-form-label">Banner:</label>
                <input class="form-control" name="banner[]" type="file" />
            </div>
            <div class="row mb-3">
                <label for="detail[]" class="col-form-label">Hình ảnh chi tiết:</label>
                <input class="form-control" name="detail[]" type="file" multiple="multiple" />
            </div>
            <div class="row mb-3">
                <label for="video[]" class="col-form-label">Trailer:</label>
                <input class="form-control" name="video" type="url" required />
            </div>
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="addItemFilm" value="add">ADD</button>
            </div>
        </form>
    </div>
</div>