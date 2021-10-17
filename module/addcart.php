<?php
 /**
 *
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 *
 * @access    public
 * @param    string
 * @return    string
 */
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
// require_once "./script/vndFormat.php";
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if(!isset($_SESSION['price'])) {
			$_SESSION['price'] = 0;
		}
require_once '../script/connectdb.php';
$connect = new database();
$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');

$_SESSION['cart'][$_GET['id']]['id'] = $_GET['id'];
$_SESSION['cart'][$_GET['id']]['sp'] = $_GET['sp'];
$_SESSION['cart'][$_GET['id']]['quantity'] +=1;

$price = $connect->printData('SELECT * FROM '.$_GET['sp'].'' );
$gia = $sanpham[0]['Gia'];
$_SESSION['price'] += $gia;
$_SESSION['total'] = currency_format($_SESSION['price']);
header("Location: ../giohang.php");
?>