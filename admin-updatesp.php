<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./Style/formadmin.css">
	<link rel="stylesheet" href="./Style/admin-addsp.css">
</head>
<body>


<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');

?>
<div class="wrap">

<div class="main__admin">
    
        <div class="main__admin__title-logo">
          <img src="./img/Logo-Text.png" alt="">
        </div>
        <div class="main__admin__title">
          <div class="main__admin__title-text">
            <a class="main__admin__title-link" href="formadmin.php">
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
                 $sanpham = $connect->printData('SELECT * FROM khachhang');
                 echo '<a href="./admin-khachhang.php"><span>Account</span></a>';
             ?>
          </div>
        </div>  
      </div>

    </div>
      <div class="main__admin__footer">
        <a class="main__admin__footer-link" href="index.php"><i class="main__admin__footer-icon fas fa-long-arrow-alt-left"></i><span class="main__admin__footer-text">Trở lại trang chủ</span></a>
      </div>

      
 
    

</div>

<div class="data">
   <div class="data__title">
   <h1 class="data__title-text">Chỉnh sửa thông tin <span class="data__title-text-sub">Mode</span></h1>
   <?php
    $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');
    echo '<span class="data__update-title">Sản phẩm đang được chọn : '.$sanpham[0]['TenSP'].'</span>'; 
   ?>
   
 </div>
<div class="data__content">
	<form action="./quantri/update.php" method="post" enctype="multipart/form-data">
	<table class="data__content__table">
	<tbody>
		<?php

echo'<tr>';

echo'<tr>';
 echo'<td>Mã Sản Phẩm</td>';
echo'<td>';
echo'<input type="text" name="masp" placeholder="'.$_GET['id'].'" value="'.$_GET['id'].'" >';
echo'</td>';

echo'<tr>';
echo'<td>Loại Sản phẩm</td>';
echo'<td>';
// echo'<select name="type" id="" class="data__info" value="'.$_GET['sp'].'">';
// echo'<option value="'.$_GET['sp'].'">'.$_GET['sp'].'</option>';
// echo '</select>';
echo'<input type="text" name="type" placeholder="'.$_GET['sp'].'" value="'.$_GET['sp'].'" >';
echo'</td>';


echo'</tr>';

echo'<td>Tên Sản Phẩm</td>';
echo'<td>'; 
echo'<input type="text" name="ten-sp" style="width : 403px;" placeholder="'.$sanpham[0]['TenSP'].'" value="'.$sanpham[0]['TenSP'].'"></td>';
echo'</tr>';

echo'<tr>';
echo'<td>Mô Tả Sản Phẩm</td>';
echo'<td ><textarea class="data__info" name="mota-sp" id="" cols="30" rows="10" placeholder="'.$sanpham[0]['MoTa'].'" value="'.$sanpham[0]['MoTa'].'"></textarea> </td>';
echo'</tr>';

echo'<tr>';
echo'<td>Giá Sản Phẩm</td>';
echo'<td><input type="text" name="Gia-sp" placeholder="'.$sanpham[0]['Gia'].'" value="'.$sanpham[0]['Gia'].'"></td>';
echo'</tr>';

echo'<tr>';
echo'<td>Thêm Ảnh</td>';
echo'<td> <input type="file" name="image" value="'.$sanpham[0]['Anh'].'"></td>';
echo'</tr>';

	
	?>
	</tbody>
	</table>


<div class="addsp">
		 <input type="submit" value="Lưu" class="luu">
</div>
</form>
</div>
</div>
</div>

	
</body>
</html>