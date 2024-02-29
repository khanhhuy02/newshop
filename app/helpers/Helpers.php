<?php
include_once '../newshop/app/helpers/PostHelpers.php';
include_once '../newshop/app/helpers/stringHelpers.php';

function getAllOutstanding($tableName, $columnName, $value, $quantity)
{
    $data = getAllRows($tableName, $columnName, $value, $quantity);
    return $data;
}
function getAllProducts($tableName)
{
    $data = getAllList($tableName);
    return $data;
}
function create($tableName, $data)
{


    if (isset($data['names'])) {
        $data['alias'] = generateAlias($data['names']);
    }
    $result = createRow($tableName, deleteKeyValuePairs($data, 'id', 'luu'));
    return $result;
}



function evaluate($tableName, $data)
{
    $result = createRow($tableName, deleteKeyValuePairs($data ,'luu'));
    return $result;
}

// binh luận 

function evaluates($tableName,$id){
    $data = getEvaluate($tableName,$id);
    return $data;

}


// login 
function checklogin($tableName, $names, $pass, $role ) {
    $data = getlogin($tableName, $names, $pass, $role );
    return $data ;
}



// xóa 
function rowDelete($tableName,$id) {
    $result = getRowDelete($tableName,$id);
    return $result;
}


// lấy danh sach 

function getWhereAllProducts($tableName, $category)
{
    $data = getWhereListProduct($tableName, $category);
    return $data;
}
// chi tiết danh sách

function getDetailName($tableName, $names)
{

    $data = getWhereDetails($tableName, $names);
    return $data;
}
function getOnes($tableName,$category) {
    $data = getOne($tableName,$category);
    return $data;

}
