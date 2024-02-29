<?php

class HomeController extends Controller
{

    protected $viewnoidung = null;

    function __construct()
    {
    }

    public function index()
    {

        $dienthoai = getAllOutstanding("listproducts", "category_brand", 1, 10);
        $maytinh = getAllOutstanding("listproducts", "category_products", 2, 10);
        $listCategory = getAllProducts("category_products");
        $viewnoidung = 'app/views/users/layout/productHome.php';
        $this->view("users/layout.php", [
            "viewnoidung" => $viewnoidung,
            "dienthoai" => $dienthoai,
            "maytinh" => $maytinh,
            "listCategory" => $listCategory,

        ]);
    }
    public function login()
    {


        $login = getALLPost();

        if (isset($_POST['login'])) {

            // Truy vấn cơ sở dữ liệu
            $result = checklogin('users', $login['names'], $login['password'], 1);
        
            // Kiểm tra kết quả
            if ($result) {
                // Đăng nhập thành công
                $_SESSION['id'] = $result[0]['id'];
                $_SESSION['names'] = $result[0]['names'];
                $_SESSION['password'] = $result[0]['password'];
                header('Location: /newshop/');
            } else {
                // Đăng nhập thất bại
                echo "Đăng nhập thất bại";
            }
        }

        $this->view(
            "users/login/login.php",
            []
        );
    }
}
