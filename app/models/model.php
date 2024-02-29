<?php
include_once 'databases.php';

function getAllRows($tableName, $columnName, $value, $quantity)
{
    $sql = "SELECT * FROM $tableName where $columnName =  ? LIMIT $quantity";
    $params = [$value];
    return query($sql, $params);
}
function getAllList($tableName)
{
    $sql = "SELECT * FROM $tableName";
    return query($sql);
}

function getOne($tableName, $category)
{
    $sql = " SELECT *
    FROM $tableName JOIN category_products AS cp 
    ON $tableName.category_products = cp.id 
    WHERE cp.alias = '$category'";
    return queryOne($sql);
}


function getWhereListProduct($tableName, $category)
{
    $sql = " SELECT *
            FROM $tableName JOIN category_products AS cp 
            ON $tableName.category_products = cp.id 
            WHERE cp.alias = '$category'";

    return query($sql);
}


function getEvaluate($tableName, $id)
{
    $sql = " SELECT * FROM $tableName WHERE id_product = $id";

    return query($sql);
}

function getWhereDetails($tableName, $names)
{
    $sql = "SELECT * FROM $tableName Where alias_sp = '$names' ";
    return queryOne($sql);
}


// function getWhereListProduct($tableName, $category){
//     $sql = "SELECT *
//     FROM $tableName as namess
//     FULL OUTER JOIN category_products AS cp
//     ON namess.id = cp.id
//     WHERE names.category_products = `cp`.`id` and cp.alias = '$category' ";

//     return query($sql);

// }
// kiểm tra login 
function getlogin($tableName, $names, $pass, $role)
{
    $sql = "SELECT * FROM $tableName where names = ? AND password = ? AND role = ?";
    $params = [$names, $pass, $role];
    return query($sql, $params);
}


function createRow($tableName, $data)
{
    // $columns = implode(', ', array_keys($data));
    $columns = implode(', ', array_map(fn ($col) => "`{$col}`", array_keys($data))); //implode (nối lại thành 1 chuỗi// a,b,c , vòng lập array_map(lất cả giá trị, array_keys(lấy key)))

    //fn($col) => "{$col}" có một tham số duy nhất là $col, đại diện cho tên của một cột.
    // Biểu thức trả về của hàm lambda là "{$col}`", bao bọc tên cột trong dấu ngoặc kép.
    $placeholders = implode(', ', array_fill(0, count($data), '?'));                // array_fill(0, số lượng, lặp lại)  array_fill(0,3,'a) //[a,a,a]
    // Tham số thứ nhất là chỉ số bắt đầu của mảng.
    // Tham số thứ hai là số lượng phần tử của mảng.
    // Tham số thứ ba là giá trị được chỉ định cho các phần tử của mảng.
    $values = array_values($data);

    $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
    $result = execute($sql, $values);
    return $result;
}


function getRowDelete($tableName, $id)
{
    $sql = "DELETE FROM $tableName WHERE id = ?";
    $params = [$id];
    $result = execute($sql, $params);
    return $result;
}


// function createRow($tableName, $data)
// {$columns = implode(', ', array_map(fn($col) => "`{$col}`", array_keys($data)));
//   $placeholders = implode(', ', array_fill(0, count($data), '?'));
//   $values = array_values($data);

//   echo "\$placeholders: $placeholders\n";
//   echo "\$values: $values\n";

//   $sql = "INSERT INTO `$tableName` ($columns) VALUES ($placeholders)";
//   $result = execute($sql, $values);
//   return $result;
// }
