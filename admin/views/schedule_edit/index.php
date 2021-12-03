<?php
require_once "./public/php/admin/schedule_edit/index.php";
require_once "./public/php/admin/showtime/index.php";
?>
<div class="schedule-detail row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA LỊCH CHIẾU</h2>
        <form enctype="multipart/form-data" method="post" action="">
            <div class="row mb-3">
                <label for="id_film" class="col-form-label">Tên Phim:</label>
                <select name="id_film" class="form-select" id="id_film" aria-label="Default select example">
                    <?php
                    foreach ($data["film"] as $item) {
                        if ($data['schedule']->id_film == $item->id) {
                            echo "
                            <option selected value='$item->id'>$item->name</option>";
                        } else {
                            echo "<option value='$item->id'>$item->name</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="id_theater" class="col-form-label">Địa chỉ rạp:</label>
                <select name="id_theater" class="form-select" id="id_theater" aria-label="Default select example">
                    <?php
                    foreach ($data["theater"] as $item) {
                        if ($data['schedule']->id_theater == $item->id) {
                            echo "
                            <option selected value='$item->id'>$item->address</option>";
                        } else {
                            echo "<option value='$item->id'>$item->address</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="date" class="col-form-label">Ngày chiếu:</label>
                <input name="date" type="date" class="form-control" id="date" value="<?php echo $data['schedule']->date ?>">
            </div>

            <div class="row mb-5">
                <button class="btn btn-primary" type="submit" name="editItemSchedule" value="<?php echo $data['schedule']->id ?>">LƯU THÔNG TIN MỚI</button>
            </div>
        </form>
        <!-- =======================THÊM SUẤT CHIẾU ====================== -->
        <h2 class="d-flex justify-content-center main-title">SUẤT CHIẾU</h2>
        <form class="row mb-3" method="post">
            <div class="row mb-3">
                <label for="id_room" class="col-form-label">Phòng:</label>
                <select name="id_room" class="form-select" id="id_room" aria-label="Default select example">
                    <?php
                    foreach ($data["room"] as $item) {
                        echo "<option value='$item->id'>$item->name</option>";
                    }
                    ?>
                </select>
            </div>
            <label for="start_time" class="col-form-label">Giờ bắt đầu:</label>
            <input name="start_time" type="time" class="form-control mb-3" id="start_time" required>
            <label for="type" class="col-form-label">Hình thức:</label>
            <select name="type" class="form-select mb-3" id="type" aria-label="Default select example">
                <option value="2D">2D</option>
                <?php
                // Kiểm tra Film có hình thức 3D hay không
                if ($data['item_film']->type == '3D')
                    echo "<option value=3D'>3D</option>";
                ?>
            </select>
            <button class="btn btn-primary col-3" type="submit" name="addShowtime" value="<?php echo $data['schedule']->id ?>">THÊM SUẤT CHIẾU</button>
        </form>
        <!-- =======================TABLE SUẤT CHIẾU ====================== -->
        <div class="table-sticky">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">ID Lịch chiếu</th>
                        <th scope="col">ID Phòng chiếu</th>
                        <th scope="col">HÌnh thức</th>
                        <th scope="col">Giờ bắt đâu</th>
                        <th scope="col">Giờ kết thúc</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($data['showtime'])) {
                        foreach ($data['showtime'] as $item) {
                            echo "
                          <tr>
                            <td></td>
                            <td>$item->id</td>
                            <td><p>" . $item->id_schedule . "</p></td>
                            <td><p>" . $item->id_room . "</p></td>
                            <td>" . $item->type . "</td>
                            <td>$item->start_time</td>
                            <td>$item->end_time</td>
                            <td>
                              <form method='post'>
                                <button name='deleteItemShowtime' value='$item->id' class='btn btn-danger'>Xóa</button>
                              </form>
                            </td>
                          </tr>
                          ";
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>