<?php
include_once 'config.php';
// Cấu hình kết nối cơ sở dữ liệu
// $DB_HOST = "localhost"; //servername
// $username = "root";
// $password = "";
// $database = "ct_db";

// Hàm kết nối đến cơ sở dữ liệu
function connect()
{
    // global $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME;

    $dsn = "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME . ";charset=utf8";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    try {
        $conn = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $conn;
    } catch (PDOException $e) {
        die("Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage());
    }
}

// Hàm thực hiện truy vấn SELECT
function query($sql, $params = [])
{
    $conn = connect();

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll();
        return $result;
    } catch (PDOException $e) {
        die("Lỗi truy vấn: " . $e->getMessage());
    } finally {
        $conn = null;
    }
}

function queryOne($sql)
{ 
    $conn = connect();
    
    try {
        $stmt = $conn->query($sql);
        return $stmt->fetch();
    } catch (Exception $e) {
        die("Lỗi lấy record: " . $e->getMessage() . "<br>" . $sql);
    }
}

// Hàm thực hiện truy vấn INSERT, UPDATE, DELETE
function execute($sql, $params = [])
{
    $conn = connect();

    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $rowCount = $stmt->rowCount();
        return $rowCount;
    } catch (PDOException $e) {
        die("Lỗi truy vấn: " . $e->getMessage());
    } finally {
        $conn = null;
    }
}
?>