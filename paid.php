<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OvoShopz</title>

  <link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./module/header.css">
	<link rel="stylesheet" href="./module/footer.css">
	<link rel="stylesheet" href="./module/main.css">
  <link rel="stylesheet" href="./Style/paid.css">
</head>
<body>
	<?php
require_once "./script/connectdb.php";
$connect = new database();
?>
	<?php include('./module/header.php'); ?>
  
	<div class="paid__wrap grid">
    <div class="paid">
      <div class="paid__title">
        <i class="paid__title-icon fas fa-check-circle"></i>
        <span class="paid__title--txt">Thanh toán thành công!</span>
    </div>
    <div class="paid__text">
      <span>Cảm ơn quý khách đã sử dụng dịch vụ của OVOShopz.</span>
    </div>
    <div class="paid__back">
      <a href="index.php"class="btn paid__btn">Quay về trang mua hàng</a>
    </div>
    </div>
    

  </div>




	<?php include('./module/footer.html'); ?>
</body>
</html>
