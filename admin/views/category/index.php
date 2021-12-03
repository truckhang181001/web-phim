<?php
    require "./public/php/admin/category/index.php";
?>
<div class="category row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title mb-5">QUẢN LÝ </h2>

        <div class="search-and-button-gr mb-3">
            <div class="col-12 col-md-10 d-flex justify-content-between">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-around">
                    <a href="category/add" class="btn btn-primary" name="add">THÊM</a>
                    <button class="btn btn-primary" id="capnhat" onclick="checkPost()">Text</button>
                </div>

            </div>
        </div>
        <div class="table-sticky">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col-4">ID</th>
                        <th scope="col-4">Tên</th>
                        <th scope="col-4">##</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($data != null){
                            foreach ($data as $item) {
                                echo "
                                <tr>
                                  <td scope='col-4'>$item->id</td>
                                  <td class='name col-4'>$item->name</td>
                                  <td scope='col-4'>
                                    <form method='post'>
                                      <a href='category/edit?id=$item->id' class='btn btn-warning ' name='editCategory' value='edit'>Edit</a>
                                      <button type='submit' class='btn btn-danger' name='deleteItemCategory' value='$item->id'>Delete</button>
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