<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

require_once './script/connectdb.php';
$connect = new database();
$giasp = $connect->printData('SELECT Gia FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');

$_SESSION['total'] -= $giasp[0]['Gia'];
unset($_SESSION['cart'][$_GET['id']]);
if($_SESSION['cart'] == []) {
	unset($_SESSION['cart']);
  unset($_SESSION['total']);
  unset($_SESSION['price']);
  unset($_SESSION['soluongsp']);
  unset($_SESSION['tongsoluong']);
  setcookie("money", "", time()-3600);
  setcookie("quality", "", time()-3600);
}

header("Location: ./giohang.php");