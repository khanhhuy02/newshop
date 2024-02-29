<?php

function getAllPost()
{
    $postData = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($_POST as $key => $value) {
            $postData[$key] = $value;
        }
    }

    return $postData;
}


function deleteKeyValuePairs(&$array, ...$keys)
{
    foreach ($keys as $key) {
        if (array_key_exists($key, $array)) {
            unset($array[$key]);
        }
    }
    return $array;
}

function goBack()
{
       // Kiểm tra xem trang trước đó là trang nào
       $backUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

       // Chuyển hướng về trang trước đó
       header("Location: $backUrl");
       exit;
}
