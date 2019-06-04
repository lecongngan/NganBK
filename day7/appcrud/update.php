<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
include_once "config.php";
if (isset($_POST['id']) && isset($_POST['ten']) && isset($_POST['giatien']) && isset($_POST['tonkho']) && isset($_POST['nhacungcap'])&& isset($_POST['ngaytao'])) {
    if ($_POST['ten'] && ($_POST['giatien'] > 0)  && $_POST['nhacungcap'] ) {
        $ten = $_POST['ten'];
        $giatien = $_POST['giatien'];
        $tonkho = $_POST['tonkho'];
        $nhacungcap = $_POST['nhacungcap'];
        $sqlInsert = "UPDATE product SET name='$name',gia='$giatien',tonkho='$tonkho' , nhacungcap='$nhacungcap' WHERE id = " . (int) $_POST['id'];
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Update thất bại";
        }
    }
}