<?php
class UserController extends Controller
{

    function pageDetail()
    {



        $categoryAlias = isset($_GET['alias']) ? $_GET['alias'] : '';  // Lấy alias từ URL


        
        $whereListData = getWhereListProduct("listproducts", $categoryAlias);
        $listCategory = getAllProducts("category_products");

        $nameCategory = getOnes("listproducts", $categoryAlias);

        $viewnoidung = 'app/views/users/listProduct/pageDetail.php';

        $this->view("users/layout.php", [
            "viewnoidung" => $viewnoidung,
            "listCategory" => $listCategory,
            "whereListData" => $whereListData,
            "nameCategory" => $nameCategory,

        ]);
    }


    function details()
    {
        $nameAlias = isset($_GET['names']) ? $_GET['names'] : '';
    
        // $listCategory = getAllProducts("category_products");
        // $nameAlias = '';
        $whereDetail = getDetailName("listproducts", $nameAlias);

        $getAllPosts = getAllPost();



        if (!empty($getAllPosts) && isset($getAllPosts)) {
            if (isset($getAllPosts['luu'])) {
                evaluate('evaluate', $getAllPosts);
                goBack();
            }
        }

       
        $evaluates = evaluates('evaluate',$whereDetail['id']);

        $viewnoidung = 'app/views/users/listProduct/details.php';
        $this->view("users/layout.php", [
            "viewnoidung" => $viewnoidung,
            'whereDetail' => $whereDetail,
            // "listCategory" => $listCategory,
            "evaluates" => $evaluates,



        ]);
    }


    // public function details()
    // {
    //     $nameAlias = '';

    //     $whereDetail = getDetailName("listproducts", $nameAlias);

    //     $getAllPosts = getAllPost();

    //     if (!empty($getAllPosts) && isset($getAllPosts)) {
    //         if (isset($getAllPosts['luu'])) {
    //             create('evaluate', $getAllPosts);
    //             goBack();
    //         }
    //     }

    //     $viewnoidung = 'app/views/users/listProduct/details.php';
    //     $this->view("users/layout.php", [
    //         "viewnoidung" => $viewnoidung,
    //         'whereDetail' => $whereDetail,
    //     ]);
    // }


}
