<div class="customer row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title mb-5">QUẢN LÝ KHÁCH HÀNG</h2>

        <div class="row search-and-button-gr mb-3">
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <div class="table-sticky">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên khách</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Năm sinh</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($data != null){
                            foreach ($data as $item) {
                                echo "
                                <tr>
                                  <td>$item->id</td>
                                  <td class='name'>$item->name</td>
                                  <td class='sex'>$item->sex</td>
                                  <td class='dob'>$item->dob</td>
                                  <td class='address'>$item->address</td>
                                  <td class='phone'>$item->phone</td>
                                  <td>
                                    <form method='get'>
                                      <a href='film/detail?id=$item->id' class='btn btn-warning editFilm'>Edit</a>
                                      <a href='?detail=true&id=$item->id' class='btn btn-danger editFilm'>Delete</a>
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
