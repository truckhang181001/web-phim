<div class="date-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/date.png" alt="icon">
    </div>
    <select class="filter-item__form" name="date" onchange="this.form.submit()">
        <?php
        // Hàm in ngày (Tính từ ngày hiện tại)
        $date_day = date("d");
        for ($i = 0; $i < 5; $i++) {
            $dateShow = $date_day . "/" . date("m/Y");
            $dateValue = date("Y/m") . "/" . $date_day;
            echo "<option value='" . $dateValue . "' " . selectDate($date_day) . ">" . $dateShow . "</option>";
            $date_day += 1;
        }
        // Hàm kiểm tra item Selected
        function selectDate($date_day)
        {
            if (isset($_GET['date']))
                if ($_GET['date'] == date("Y/m")."/".$date_day) return "selected";
                else return " ";
        }
        ?>
    </select>
</div>
<div class="city-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/city.png" alt="ticket">
    </div>
    <select class="filter-item__form" name="location" onchange="this.form.submit()">
        <option selected disabled>Chọn thành phố</option>
        <?php
        if (isset($data["location"])) {
            foreach ($data["location"] as $item) {
                echo "<option value='" . $item->id . "' " . selectLocation($item->id) . ">" . $item->name . "</option>";
            }
        }
        function selectLocation($id)
        {
            if (isset($_GET['location']))
                if ($_GET['location'] == $id) return "selected";
                else return " ";
        }
        ?>
    </select>
</div>
<div class="theater-sort filter-item">
    <div class="filter-item__icon">
        <img src="http://pixner.net/boleto/demo/assets/images/ticket/cinema.png" alt="ticket">
    </div>
    <select class="filter-item__form" name="theater" onchange="this.form.submit()">
        <option selected disabled>Chọn rạp</option>
        <?php
        $check = false;
        if (isset($data["theater"])) {
            foreach ($data["theater"] as $item) {
                echo "<option value='" . $item->id . "' " . selectTheater($item->id, $check) . ">" . $item->address . "</option>";
            }
        }
        function selectTheater($id, &$bool)
        {
            if (isset($_GET['theater']))
                if ($_GET['theater'] == $id) {
                    $bool = true;
                    return "selected";
                } else return " ";
        }
        ?>
    </select>
</div>