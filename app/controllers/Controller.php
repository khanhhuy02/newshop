<?php
include_once "app/helpers/Helpers.php";
include_once "app/models/model.php";
class Controller
{
    function __construct()
    {
    }

    public function view($contentPath, $data = [])
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
        $callingClass = isset($trace[1]['object']) ? get_class($trace[1]['object']) : null;

        if ($callingClass == 'HomeController') {
            if (isset($contentPath) && !empty($contentPath)) {
                extract($data);
                $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

                $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                $urls = $protocol . $_SERVER['HTTP_HOST'] . ROOT_URL;

                if ($url == $urls) {
                    require_once 'app/views/users/layout.php';
                } else {
                    require_once 'app/views/users/login/login.php';
                }
            } else
                echo 'Không tồn tại đường dẫn tệp giao diện';
        } else if ($callingClass == 'UserController') {
            if (isset($contentPath) && !empty($contentPath)) {
                extract($data);
                require_once 'app/views/users/layout.php';
            } else
                echo 'Không tồn tại đường dẫn tệp giao diện';
        } else if ($callingClass == 'AdminController') {
            if (isset($contentPath) && !empty($contentPath)) {
                extract($data);
                require_once 'app/views/admins/layout.php';
            } else
                echo 'Không tồn tại đường dẫn tệp giao diện';
        }
    }
}
