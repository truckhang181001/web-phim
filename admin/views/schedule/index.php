<div class="schedule row" style="width:100%">
  <?php require_once "./share/navBarAdmin.php";
  require_once "./public/php/admin/schedule/index.php" ?>
  <div class="col-12 col-md-10 container-right p-5">
    <h2 class="d-flex justify-content-center main-title">QUẢN LÝ LỊCH CHIẾU</h2>

    <div class="row search-and-button-gr">
      <div class="col-12 col-md-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
          <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <a href="schedule/add" class="btn btn-primary">THÊM</a>
      </div>
    </div>
    <div class="table-sticky">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">ID</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Địa chỉ rạp</th>
            <th scope="col">Ngày chiếu</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($data)){
            foreach ($data as $item) {
              echo "
                          <tr>
                            <td></td>
                            <td>$item->id</td>
                            <td><p>".$item->GetFilm()->name."</p></td>
                            <td>".$item->GetTheater()->address."</td>
                            <td>$item->date</td>
                            <td>
                              <form method='get'>
                                <a href='schedule/edit?id=$item->id' class='btn btn-warning'>Chỉnh sửa</a>
                              </form>
                              <form method='post'>
                                <button name='deleteItemSchedule' value='$item->id' class='btn btn-danger'>Xóa</button>
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
    <!-- Pagination -->
    <nav aria-label="Page navigation example" style="margin:40px 0">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Trước</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Sau</a>
        </li>
      </ul>
    </nav>
  </div>
</div>