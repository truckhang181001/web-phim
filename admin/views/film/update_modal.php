<!-- modal cập nhật phim -->
<div class="modal fade" id="ModalUpdateFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG CẬP NHẬT PHIM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tên phim:</label>
            <input type="text" class="form-control" id="update_name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Mô tả:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <select class="form-select" aria-label="Default select example">
                <option selected>Chọn thể loại</option>
                <option value="1">Tình cảm</option>
                <option value="2">Hành động</option>
                <option value="3">Hoạt hình</option>
              </select>
            </div>
            <div class="col-6 d-flex align-items-center">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2d" value="option1">
                <label class="form-check-label" for="inlineRadio2d">Phim 2D</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3d" value="option2">
                <label class="form-check-label" for="inlineRadio3d">Phim 3D</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-6">
              <label for="long-time" class="col-form-label">Thời lượng:</label>
              <input type="text" class="form-control" id="long-time">
            </div>
            <div class="col-6">
              <label for="release-time" class="col-form-label">Ngày phát hành:</label>
              <input type="date" class="form-control" id="release-time">
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh bìa của phim:</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh mô tả phim:</label>
            <input class="form-control" type="file" id="formFile">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary">Xác nhận</button>
      </div>
    </div>
  </div>
</div>
</div>