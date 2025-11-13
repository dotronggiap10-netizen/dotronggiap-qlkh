<?php
// config.php
$DB_HOST = 'dpg-d4a9bu1r0fns73fgi0mg-ast';
$port = '5432';
$DB_NAME = 'qlkhhoc';
$DB_USER = 'qlkh';
$DB_PASS = 'uC0DeaVBIuoanRkmyjOtryFEnf4ciJXc'; 

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
