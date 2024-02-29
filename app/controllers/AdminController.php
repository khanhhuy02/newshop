<?php
class AdminController extends Controller
{
    function __construct()
    {
    }


    public function index()
    {
        $viewnoidung = 'app/views/admins/layout/conten.php';


        $this->view("admins/layout.php", [
            'viewnoidung' => $viewnoidung

        ]);
    }

    public function lists()
    {
        $products = getAllProducts("listproducts");
        $listCategory = getAllProducts("category_products");
        $listCategoryPhone = getAllOutstanding("category_brand", "category_products", 1, 5);
        $listCategoryLaptop = getAllOutstanding("category_brand", "category_products", 2, 5);
        $listCategoryClock = getAllOutstanding("category_brand", "category_products", 7, 5);


        $nameAlias = isset($_GET['id']) ? $_GET['id'] : '';

        // thêm sản phẩm
        $postProduct = getALLPost();
        if (!empty($postProduct) && isset($postProduct)) {


            if (isset($postProduct['luu'])) {
                create('listproducts', $postProduct);
                goBack();
            }
        }
        if ($nameAlias) {
            rowDelete('listproducts', $nameAlias);
            goBack();
        }

        // print_r($postProduct);
        $viewnoidung = 'app/views/admins/product/list.php';
        $this->view("app/views/admins/layout.php", [
            'viewnoidung' => $viewnoidung,
            'products' => $products,
            'listCategory' => $listCategory,
            "listCategoryPhone" => $listCategoryPhone,
            "listCategoryLaptop" => $listCategoryLaptop,
            "listCategoryClock" => $listCategoryClock,
            

        ]);
    }


    public function brand()
    {
        $listBrand = getAllProducts("category_brand");
        $listCategory = getAllProducts("category_products");
        //    $listCategoryName = getAllOutstanding("category_brand","category_products",7,5);

        $postBrand = getALLPost();
        if (!empty($postBrand) && isset($postBrand)) {


            if (isset($postBrand['luu'])) {
                create('category_brand', $postBrand);
                goBack();
            }
        }
        $viewnoidung = 'app/views/admins/brands/list.php';




        $this->view("app/views/admins/layout.php", [
            'viewnoidung' => $viewnoidung,
            'listBrand' => $listBrand,
            'listCategory' => $listCategory,

        ]);
    }

    public function category()
    {
        $listBrand = getAllProducts("category_brand");
        $listCategory = getAllProducts("category_products");

        $postBrand = getALLPost();
        if (!empty($postBrand) && isset($postBrand)) {


            if (isset($postBrand['luu'])) {
                create('category_products', $postBrand);
                goBack();
            }
        }
        $viewnoidung = 'app/views/admins/category/list.php';



        $this->view("app/views/admins/layout.php", [
            'viewnoidung' => $viewnoidung,
            'listBrand' => $listBrand,
            'listCategory' => $listCategory,

        ]);
    }
}
