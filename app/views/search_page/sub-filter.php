<form method="post" class="sub-filter d-flex align-items-center">
    <h4 class="sub-filter__text">Sắp xếp theo:</h4>
    <select name="status" class="sub-filter__form" onchange="location = this.value;">
        <option value="<?php echo DOMAIN.PRONAME."/tim-kiem/PhimDangChieu"?>">Phim đang chiếu</option>
        <option value="<?php echo DOMAIN.PRONAME."/tim-kiem/PhimSapChieu"?>" <?php if($data['status']) echo "selected";?>>Phim sắp chiếu</option>
    </select>
</form>