<?php
  require "./public/php/admin/film/delete.php";
?>

<div class="film row" style="width:100%">
  <?php require_once "./share/navBarAdmin.php"; ?>
  <div class="col-12 col-md-10 container-right p-5">
    <h2 class="d-flex justify-content-center main-title">QUẢN LÝ PHIM</h2>

    <div class="row search-and-button-gr">
      <div class="col-12 col-md-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
          <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <a href="film/add" class="btn btn-primary">THÊM</a>
        <button class="btn btn-primary" id="capnhat" onclick="checkPost()">Text</button>
      </div>
    </div>
    <div class="table-sticky">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">ID Phim</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thể loại</th>
            <th scope="col">Ngày phát hành</th>
            <th scope="col">Thời lượng</th>
            <th scope="col">Trải nghiệm</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($data as $item) {
            echo "
                        <tr>
                          <td>$item->id</td>
                          <td class='namefilm'><p>$item->name</p></td>
                          <td class='descript'><p>$item->desc</p></td>
                          <td class='category'>" . $item->GetCate() . "</td>
                          <td>$item->release</td>
                          <td>$item->time</td>
                          <td>$item->type</td>
                          <td>
                            <form method='post'>
                              <a href='film/edit?id=$item->id' class='btn btn-warning editFilm'>Edit</a>
                              <button type='submit' name='deleteItem' value='$item->id' class='btn btn-danger editFilm'>Delete</button>
                            </form>
                          </td>
                        </tr>
                        ";
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
<script>
//   $(document).ready(function(){
//   $("button").click(function(){
//     $.post("admin/film/capnhat.php",
//     {
//       callajax: "-",
//     },
//     function(data,status){
//       alert("Data: " + data + "\nStatus: " + status);
//     });
//   });
// });
</script>

