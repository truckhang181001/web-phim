<?php
if (isset($_POST['deleteImg'])) {
    $controller = new controller();
    $tbl_image = $controller->getModel("tbl_image");
    $img = $tbl_image->getImage('id=' . $_POST['deleteImg'])[0];
    if ($img != null) {
        // Clear file
        if (is_file("./public/img/" . $img->name)) {
            unlink("./public/img/" . $img->name);
        }
        //Clear img on DB
        $tbl_image->deleteImage('id='.$img->id);
        // Clear POST
        header("Location: " . CURLINK);
        exit;
    }
}
