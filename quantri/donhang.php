<?php
require_once '../script/connectdb.php';
$database = new database();
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$connect = new database();
 echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

$username = $_SESSION['username'];
$ten=$_POST['name'];
$diachi=$_POST['address'];
$sodt=$_POST['phone'];
$email=$_POST['email'];
$donhang = "";
$total = $_SESSION['totalAll'];
$soluong = $_SESSION['totalQuality'];
/* echo $username;
echo $ten;
echo $diachi;
echo $sodt;
echo $email;
echo $_SESSION['total']; */

 switch ($_POST['type']) {
		    case 'online':
			    $type = "Thanh toán online";
		    	break;
	    	case 'cod':
		    	$type = "Thanh toán khi nhận hàng";
		    	break;
		  	case'order':
          $type = "Đặt trước";
		    	break;
	    	default:
			    # code...
		    	break;
	      };
echo $type;
foreach($_SESSION['cart'] as $key=>$value)
{
	$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
	$donhang .= $sanpham[0]['TenSP']. " | ";
}
// echo $donhang;
echo 'INSERT INTO `khachhang` VALUES ("'.$username.'", "'.$ten.'","'.$diachi.'","'.$sodt.'","'.$email.'","'.$donhang.'","'.$soluong.'","'.$total.'","'.$type.'");';


$database->insertData('INSERT INTO `khachhang` VALUES ("'.$username.'", "'.$ten.'","'.$diachi.'","'.$sodt.'","'.$email.'","'.$donhang.'","'.$soluong.'","'.$total.'","'.$type.'" );');
  unset($_SESSION['cart']);
  unset($_SESSION['total']);
  unset($_SESSION['price']);
  unset($_SESSION['soluongsp']);
  unset($_SESSION['tongsoluong']);
  unset($_SESSION['totalAll']);
  unset($_SESSION['soluongthem']);
  unset($_SESSION['totalQuality']);
	header('Location:../deleteCookie.php');
  ?>