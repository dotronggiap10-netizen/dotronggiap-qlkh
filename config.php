<?php
// config.php
$DB_HOST = 'localhost';
$DB_NAME = 'quanly_khoahoc';
$DB_USER = 'root';
$DB_PASS = ''; // nếu bạn có password thì sửa lại

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    die('Kết nối DB lỗi: ' . $e->getMessage());
}
// also create mysqli connection for some legacy code

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
