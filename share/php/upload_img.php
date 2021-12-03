<?php
function insertImage($id_film, $name, $type)
{
    $controller = new controller();
    $tbl_image = $controller->getModel("tbl_image");
    $tbl_image->insertImage($id_film, $name, $type);
}
function uploadImage($itemID, $itemName = "untitle", $itemPOST, $itemType)
{
    $alert = "";
    $multi = count($_FILES[$itemPOST]['name']);
    if ($_FILES[$itemPOST]['name'][0] != "" && $multi <= 10) {
        for ($i = 0; $i < $multi; $i++) {
            //Variable
            $fileType = strtolower(pathinfo(basename($_FILES[$itemPOST]["name"][$i]), PATHINFO_EXTENSION));
            $fileID = "_" . round(microtime(true) * 1000);
            $target_dir = __DIR__ . "/../../public/img/";
            $target_file = $target_dir . $itemName . $fileID . "." . $fileType;

            $allowUpload = true;
            $allowType = ["jpg", "jpeg", "png", "gif"];
            $allowSize = 5 * 1000000;

            if (!in_array($fileType, $allowType)) {
                $alert .= "Không đúng định dạng \n";
                $allowUpload = false;
            }

            if ($_FILES[$itemPOST]["size"][$i] > $allowSize) {
                $alert .= "File kích thước quá lớn \n";
                $allowUpload = false;
            }

            if ($allowUpload == false) {
                $alert .= "File upload không thành công \n";
            } else {
                if (move_uploaded_file($_FILES[$itemPOST]["tmp_name"][$i], $target_file)) {
                    insertImage($itemID, basename($target_file), $itemPOST);
                } else {
                    $alert .= "File upload không thành công \n";
                }
            }
        }
    } else $alert .= "Chưa chọn file hoặc số lượng file > 10";
    return $alert;
}