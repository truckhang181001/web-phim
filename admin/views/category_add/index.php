<?php
require_once "./public/php/admin/category_add/index.php";
?>
<div class="film-add row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">THÊM THỂ LOẠI</h2>
        <div class="modal-body">
          <form method="POST">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Tên thể loại:</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary" name="addItemCategory" value="add">Xác nhận</button>
              </div>
          </form>

        </div>
    </div>