<?php

class HomeController extends Controller
{

    protected $viewnoidung = null;

    function __construct()
    {
    }

    public function index()
    {
        $titlePage ="Trang chủ";

        // $dienthoai = getAllOutstanding("listproducts", "category_brand", 1, 10);
        // $maytinh = getAllOutstanding("listproducts", "category_products", 2, 10);
        // $listCategory = getAllProducts("category_products");
        // $viewnoidung = 'app/views/users/layout/productHome.php';
        $viewnoidung = 'app/views/users/home/home.php';
        $this->view("users/layout.php", [
            "titlePage" => $titlePage,
            "viewnoidung" => $viewnoidung,
            // "dienthoai" => $dienthoai,
            // "maytinh" => $maytinh,
            // "listCategory" => $listCategory,

        ]);
    }





    public function shop()
    {
        $titlePage ="Cửa hàng";

        // $dienthoai = getAllOutstanding("listproducts", "category_brand", 1, 10);
        // $maytinh = getAllOutstanding("listproducts", "category_products", 2, 10);
        // $listCategory = getAllProducts("category_products");
        // $viewnoidung = 'app/views/users/layout/productHome.php';
        $viewnoidung = 'app/views/users/shop/shop.php';
        $this->view("users/layout.php", [
            "titlePage" => $titlePage,
            "viewnoidung" => $viewnoidung,
            // "dienthoai" => $dienthoai,
            // "maytinh" => $maytinh,
            // "listCategory" => $listCategory,

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


    
    public function errors()
    {
        $titlePage ="trang chủ không tồn tại";
        $viewnoidung = 'app/views/users/errors/404.php';
        $this->view("users/layout.php", [
            "titlePage" => $titlePage,
            "viewnoidung" => $viewnoidung,
            // "dienthoai" => $dienthoai,
            // "maytinh" => $maytinh,
            // "listCategory" => $listCategory,

        ]);
    }
}
