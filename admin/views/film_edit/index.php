<head>
    <style>
        .img-container {
            display: flex;
            flex-wrap: wrap;
        }

        .img-item {
            position: relative;
            margin: 10px;
        }

        .img-item img {
            height: 200px;
        }

        .img-item .btn {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <?php
    require_once "./public/php/admin/film_edit/index.php";
    ?>
    <div class="row film-detail" style="width:100%">
        <?php
        require_once "./share/navBarAdmin.php";
        ?>
        <div class="col-12 col-md-10 container-right p-5">
            <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA PHIM</h2>
            <!-- ============================= CHỈNH SỬA THÔNG TIN ========================= -->
            <form enctype="multipart/form-data" method="post">
                <div class="row mb-3">
                    <label for="id" class="col-form-label">ID phim:</label>
                    <input readonly name="id_film" type="text" class="form-control" id="id" value="<?php echo $data["film"]->id ?>">
                </div>
                <div class="row mb-3">
                    <label for="recipient-name" class="col-form-label">Tên phim:</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?php echo $data["film"]->name ?>">
                </div>
                <div class="row mb-3">
                    <label for="message-text" class="col-form-label">Mô tả:</label>
                    <textarea name="desc" class="form-control" id="message-text"><?php echo $data["film"]->desc ?></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="id_category" class="col-form-label">Thể loại:</label>
                        <select name="id_category" class="form-select" id="id_category" aria-label="Default select example">
                            <?php
                            foreach ($data["category"] as $item) {
                                if ($item->id == $data["film"]->id_category)
                                    echo "
                                <option value='$item->id' selected>$item->name</option>";
                                else echo "
                                <option value='$item->id'>$item->name</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="release" class="col-form-label">Ngày công chiếu:</label>
                        <input name="release" type="date" class="form-control" id="release" value="<?php echo $data["film"]->release ?>">
                    </div>
                    <div class="col-3">
                        <label for="companyFilm" class="col-form-label">Hãng sản xuất:</label>
                        <input name="studio" type="text" class="form-control" id="studio" value="<?php echo $data["film"]->studio ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="director" class="col-form-label">Đạo diễn:</label>
                        <input name="director" type="text" class="form-control" id="director" value="<?php echo $data["film"]->director ?>">
                    </div>
                    <div class="col-3">
                        <label for="actor" class="col-form-label">Diễn viên:</label>
                        <input name="actor" type="text" class="form-control" id="actor" value="<?php echo $data["film"]->actor ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="time" class="col-form-label">Thời lượng:</label>
                        <input name="time" type="number" class="form-control" id="time" value="<?php echo $data["film"]->time ?>">
                    </div>
                    <div class="col-3">
                        <label for="type" class="col-form-label">Hình thức:</label>
                        <select name="type" class="form-select" id="type" aria-label="Default select example">
                            <option value="<?php echo $data["film"]->type ?>" selected><?php echo $data["film"]->type ?></option>
                            <?php
                            if ($data["film"]->type == "2D")
                                echo "<option value='3D'>3D</option>";
                            else echo "<option value='2D'>2D</option>";
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <button class="btn btn-primary col-3" type="submit" name="changeFilm" value="add">SAVE</button>
                    <a href="<?php echo CURLINK;?>" class="btn btn-secondary col-3">CANCEL</a>
                </div>
            </form>
            <!-- ================ ẢNH POSTER ===================== -->
            <form enctype="multipart/form-data" method="post">
                <div class="row mb-3">
                    <label for="poster" class="col-form-label">Poster:</label>
                    <?php
                    if ($data['img'] != null) {
                        foreach ($data['img'] as $item) {
                            if ($item->type == "poster") {
                                echo "<img style='height: 250px; width: auto;' src='" . PRONAME . "/public/img/$item->name' alt='photo_$item->id'>";
                                echo "<input type='hidden' name='nameImg' value='$item->name'></input>";
                                break;
                            }
                        }
                    }
                    ?>
                    <div class="input-group mt-3 mb-3">
                        <label class="input-group-text" for="poster">Thay đổi ảnh poster</label>
                        <input class="form-control" name="poster[]" type="file" />
                    </div>
                    <input required type='hidden' name='nameFilm' value="<?php echo $data['film']->name ?>"></input>
                    <button class="btn btn-primary" type="sumbit" name='changePoster' value="<?php echo $data["film"]->id ?>">THAY ĐỔI ẢNH</button>
                </div>
            </form>
            <!-- ================ ẢNH BANNER ===================== -->
            <form enctype="multipart/form-data" method="post">
                <div class="row mb-3">
                    <label class="col-form-label">Poster:</label>
                    <?php
                    if ($data['img'] != null) {
                        foreach ($data['img'] as $item) {
                            if ($item->type == "banner") {
                                echo "<img style='height: 250px; width: auto;' src='" . PRONAME . "/public/img/$item->name' alt='photo_$item->id'>";
                                echo "<input type='hidden' name='nameImg' value='$item->name'></input>";
                                break;
                            }
                        }
                    }
                    ?>
                    <div class="input-group mt-3 mb-3">
                        <label class="input-group-text" for="banner">Thay đổi ảnh banner</label>
                        <input class="form-control" name="banner[]" type="file" />
                    </div>
                    <input required type='hidden' name='nameFilm' value="<?php echo $data['film']->name ?>"></input>
                    <button class="btn btn-primary" type="sumbit" name='changeBanner' value="<?php echo $data["film"]->id ?>">THAY ĐỔI ẢNH</button>
                </div>
            </form>
            <!-- ================ ẢNH DETAIL ===================== -->
            <form enctype="multipart/form-data" method="post">
                <div class="row mb-3">
                    <label for="detail[]" class="col-form-label">Hình ảnh:</label>
                    <div class="img-container">
                        <?php
                        if ($data['img'] != null) {
                            foreach ($data['img'] as $item) {
                                if ($item->type == "detail") {
                                    echo "
                                        <div class='img-item'>
                                            <img src='" . PRONAME . "/public/img/$item->name' alt='photo_$item->id' class='img-item__src'>
                                            <button type='submit' name='deleteImg' value='$item->id' class='btn btn-danger'>XÓA</button>
                                        </div>
                                    ";
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="detail[]">Upload ảnh chi tiết</label>
                        <input required class="form-control" name="detail[]" type="file" multiple="multiple" />
                    </div>
                    <input style="display: none;" name='nameDetail' value="<?php echo $data['film']->name ?>"></input>
                    <button class="btn btn-primary" type="sumbit" name='addDetail' value="<?php echo $data["film"]->id ?>">THÊM ẢNH CHI TIẾT</button>
                </div>
            </form>
            <!-- ================ VIDEO ===================== -->
            <form method="post">
                <div class="row mb-3">
                    <label for="video" class="col-form-label">Trailer:</label>
                    <div class="input-group mb-3">
                        <label for="video" class="input-group-text">Trailer:</label>
                        <?php
                        if ($data['img'] != null) {
                            foreach ($data['img'] as $item) {
                                if ($item->type == "video") {
                                    $name = $item->name;
                                    echo "<input class='form-control' name='video' type='url' value='$name' required/>";
                                    echo "</div><div>";
                                    echo "<iframe height='240' width='380' src='https://www.youtube.com/embed/" . substr($name, strpos($name, '=') + 1) . "' title='Video trailer'></iframe>";
                                    echo "<input type='hidden' name='idVideo' value='$item->id'></input>";
                                    break;
                                }
                            }
                        }
                        ?>
                    </div>
                    <button class="btn btn-primary" type="sumbit" name='changeVideo' value="<?php echo $data["film"]->id ?>">THAY ĐỔI VIDEO</button>
                </div>
            </form>
        </div>
    </div>
</body>