<?php
require_once "./public/php/admin/room_edit/index.php";
?>

<head>
    <style>
        .seat-row {
            display: flex;
            width: 100%;
            flex-wrap: nowrap;
        }

        .seat-item {
            display: flex;
            flex-direction: column;
            float: left;
            margin: 10px;
        }

        /* Customize the label (the container) */
        .seat {
            display: inline-block;
            position: relative;
            height: 40px;
            width: 40px;
            font-size: 16px;

            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            border: 2px solid rgb(37, 37, 37);
            border-radius: 10%;
        }

        /* Hide the browser's default checkbox */
        .seat input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: white;
            border-radius: 10%;
        }

        .seat-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* On mouse-over, add a grey background color */
        .seat:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .seat input:checked~.checkmark {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="room-add row" style="width:100%">
        <?php
        require_once "./share/navBarAdmin.php";
        ?>
        <div class="col-12 col-md-10 container-right p-5">
            <h2 class="d-flex justify-content-center main-title">THÊM PHIM</h2>
            <form enctype="multipart/form-data" method="post" action="">
                <div class="row mb-3">
                    <label for="message-text" class="col-form-label">ID:</label>
                    <input readonly type="text" name="id" class="form-control" id="message-text" value="<?php echo $data["room"]->id?>">
                </div>
                <div class="row mb-3">
                    <label for="id_theater" class="col-form-label">Rạp:</label>
                    <select name="id_theater" class="form-select" id="id_theater" aria-label="Default select example">
                        <?php
                        foreach ($data["theater"] as $item) {
                            if ($item->id == $data["room"]->id_theater)
                                echo "
                                <option value='$item->id' selected>$item->address</option>";
                            else echo "
                                <option value='$item->id'>$item->address</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb-3">
                    <label for="message-text" class="col-form-label">Tên phòng chiếu:</label>
                    <input required type="text" name="name" class="form-control" id="message-text" value="<?php echo $data["room"]->name?>">
                </div>
                <div class="seat-choose" id="seat-generate">
                    <div class="row generate">
                        <input required name="seat-row" type="number" class="col-3 form-control" id="seat-row" value="<?php echo $data["room"]->seat_row?>">
                        <input required name="seat-col" type="number" class="col-3 form-control" id="seat-col" value="<?php echo $data["room"]->seat_col?>">
                        <button type="button" class="btn btn-danger col-3" onclick="seatGenerate()">Chọn ghế vip</button>
                    </div>
                    <div class="seat-container" id="seat-container">

                    </div>
                </div>
                <div class="row mb-3">
                    <button class="btn btn-primary" type="submit" name="editRoom" value="add">ADD</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function seatGenerate() {
            seat = document.getElementById('seat-generate');
            seatCol = document.getElementById('seat-col').value;
            seatRow = document.getElementById('seat-row').value;
            genCharArray(seatRow, seatCol)
        }

        function genCharArray(seatrow, seatcol) {
            const formSeat = document.getElementById('seat-container');
            formSeat.innerHTML = "";
            var fRow = 'A'.charCodeAt(0);
            var lRow = parseInt(seatrow) + fRow;


            for (let i = fRow; i < lRow; i++) {
                let seatItem = document.createElement("div");
                seatItem.className = "seat-row";
                for (let j = 1; j <= parseInt(seatcol); j++) {
                    seatItem.innerHTML += `
                            <div class="seat-item">
                                <label class="seat">
                                    <input type="checkbox" name="seatType[]" value="${String.fromCharCode(i)}${j}">
                                    <span class="checkmark"></span>
                                    <span class="seat-name">${String.fromCharCode(i)}${j}</span>
                                </label>
                            </div>`;
                }
                formSeat.appendChild(seatItem);
            }
        }
    </script>
</body>