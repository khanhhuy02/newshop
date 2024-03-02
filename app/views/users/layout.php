<?php

// include_once 'layout/playout.php';

switch ($titlePage) {
    case 'Trang chủ':
        require_once "./app/views/users/inc/header.php";
        if (file_exists($viewnoidung)) {
            require_once $viewnoidung;
        } else {
            echo 'Không tồn tại tệp giao diện';
        }
        require_once "./app/views/users/inc/footer.php";

        break;

        
    default:
        require_once "./app/views/users/inc/header.php";
        if (file_exists($viewnoidung)) {
            require_once $viewnoidung;
        } else {
            echo 'Không tồn tại tệp giao diện';
        }
        require_once "./app/views/users/inc/footer.php";

        break;
}
