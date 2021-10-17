<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Area</title>
  <link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./Style/formadmin.css">
</head>
<body>

<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
$connect = new database()
?>

  <div class="main__admin">
    
        <div class="main__admin__title-logo">
          <img src="./img/Logo-Text.png" alt="">
        </div>
        <div class="main__admin__title">
          <div class="main__admin__title-text">
            <a class="main__admin__title-link" href="">
            <i class="fas fa-home"></i>
            <span>Trang chủ admin</span></a>
          </div>
        </div>
    <div class="main__admin__content">
        <div class="main__admin__content-title">
          <i class="fas fa-tachometer-alt"></i>
          <span >Dashboard</span>
        </div>
      <div class="main__admin__list__wrap">
        <div class="main__admin__list-title">
          <i class="fab fa-buffer"></i>
          <span>Product</span>
        </div>
        
        <div class="main__admin__list-content">
          <div class="main__admin__list-items">
            <?php 
					    $sanpham = $connect->printData('SELECT * FROM laptop');
					    echo '<a href="./admin-sanpham.php?sp=laptop"><span>Laptop - Máy tính xách tay</span></a>';
					  ?>
          </div>
          <div class="main__admin__list-items">
            <?php 
					    $sanpham = $connect->printData('SELECT * FROM PC');
					    echo '<a href="./admin-sanpham.php?sp=pc"><span>Máy tính - Máy chủ PC</span></span></a>';
					  ?>
          </div>
          <div class="main__admin__list-items">
            <?php 
					    $sanpham = $connect->printData('SELECT * FROM sphot');
					    echo '<a href="./admin-sanpham.php?sp=sphot"><span>Sản phẩm bán chạy</span></a>';
					  ?>
          </div>
        </div>  
      </div>
      
      <div class="main__admin__list__wrap">
        <div class="main__admin__list-title">
          <i class="fas fa-box-open"></i>
          <span>Order</span>
        </div>
        
        <div class="main__admin__list-content">
          <div class="main__admin__list-items">
             <?php 
                 $sanpham = $connect->printData('SELECT * FROM khachhang');
                 echo '<a href="./admin-khachhang.php"><span>Đơn hàng</span></a>';
             ?>
          </div>
        </div>  
      </div>

    <div class="main__admin__list__wrap">
        <div class="main__admin__list-title">
          <i class="fas fa-users"></i>
          <span>User</span>
        </div>
        
        <div class="main__admin__list-content">
          <div class="main__admin__list-items">
             <?php 
                 $sanpham = $connect->printData('SELECT * FROM account');
                 echo '<a href="./admin-user.php"><span>Account</span></a>';
             ?>
          </div>
        </div>  
      </div>

    </div>
      <div class="main__admin__footer">
        <a class="main__admin__footer-link" href="index.php"><i class="main__admin__footer-icon fas fa-long-arrow-alt-left"></i><span class="main__admin__footer-text">Trở lại trang chủ</span></a>
      </div>
  </div>

</body>
</html>

