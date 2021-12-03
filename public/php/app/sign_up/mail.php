<?php
if (isset($_POST['sign-up'])) {
    $to      = "khangnguyen.31191025686@st.ueh.edu.vn";
    $subject = "[BOYSCINEMA][XÁC NHẬN ĐĂNG KÝ TÀI KHOẢN]";
    $message = "<h1>Đây là Email có chứa HTML</h1>
                <p>Đoạn văn trong Email</p>";       //MỚI
    $header  =  "From:boyscinema@gmail.com \r\n";

    $header .= "MIME-Version: 1.0\r\n";             //MỚI
    $header .= "Content-type: text/html\r\n";       //MỚI

    $success = mail($to, $subject, $message, $header);

    if ($success == true) {
        echo "<script>alert('Vui lòng kiểm tra email!')</script>";
    } else {
        echo "<script>alert('Lỗi!!!')</script>";
    }
}
