<?php
session_start();
include_once "bootstrap.php";
include_once "config.php";


spl_autoload_register(function ($class) {
    require "app/controllers/" . $class . ".php";
});
$baseDir = "/newshop/";



$router = [
    'GET' => [
        //user
        '' => [new HomeController, "index"],
        'trangchitiet' => [new UserController, "pageDetail"],
        'sanpham' => [new UserController, "details"],
        
        // login 
        'dangnhap' => [new HomeController, 'login'],

        // admin
        'admin' => [new AdminController, "index"],
        'admin/product/list' => [new AdminController, "lists"],
        'admin/brand/list' => [new AdminController, "brand"],
        'admin/category/list' => [new AdminController, "category"]

    ],
    'POST' => [
        'dangnhap' => [new HomeController, 'login'],
        'sanpham' => [new UserController, "details"],

        'admin/product/list' => [new AdminController, "lists"],
        'admin/brand/list' => [new AdminController, "brand"],
        'admin/category/list' => [new AdminController, "category"]


    ]
];

// // $pos = strpos($_SERVER['REQUEST_URI'], $baseDir);

// $path = substr($_SERVER['REQUEST_URI'], strlen($baseDir)); //Loai?idloai=1&page=3
// // var_dump($pos);
// $arr = explode("?", $path);  // ['Loai', 'idloai=1&page=3]
// $route = strtolower($arr[0]);  //loai



// // echo $route ;
// if (count($arr) >= 2) parse_str($arr[1], $params);  // [idloai=>1, page=>3]
// else $params = [];
// $method = strtolower($_SERVER['REQUEST_METHOD']); //get
// if (!array_key_exists($method, $router)) die("Method khong phù hợp:" . $method);
// if (!array_key_exists($route, $router[$method])) die("Route đâu có:" . $route);
// $action = $router[$method][$route];  // [0 => SanphamController, 1 => detail]
// call_user_func($action);


$path = substr($_SERVER['REQUEST_URI'], strlen($baseDir));
$arr = explode("?", $path);
$route = strtolower(trim($arr[0], '/'));

if (count($arr) >= 2) {
    parse_str($arr[1], $query);
    $params = array_merge($_GET, $query);
} else {
    $params = $_GET;
}

$method = $_SERVER['REQUEST_METHOD'];


if (!array_key_exists($method, $router)) {
    die("Method không phù hợp: " . $method);
}
$action = $router[$method][$route];  // [0 => SanphamController, 1 => detail]
call_user_func($action);
