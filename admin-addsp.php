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
	// $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
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
   <h1 class="data__title-text">Add Product - Thêm sản phẩm<span class="data__title-text-sub">Mode</span></h1>
 </div>
<div class="data__content">
	<form action="./quantri/getupadd.php" method="post" enctype="multipart/form-data">
	<table class="data__content__table">
	<tbody>
<tr>
<tr>
<td>Loại Sản phẩm</td>
<td>
	<select name="type" id="" class="data__info">
		<option value="laptop">Laptop</option>
		<option value="pc">PC</option>	
		<option value="sphot">Sản Phẩm Hot</option>
	</select>
</td>


</tr>

<td>Tên Sản Phẩm</td>
<td> <input type="text"  class='tensp' name="ten-sp"> </td>
</tr>

<tr>
<td>Mô Tả Sản Phẩm</td>
<td ><textarea class="data__info" name="mota-sp" id="" cols="30" rows="10"></textarea> </td>
</tr>

<tr>
<td>Giá Sản Phẩm</td>
<td><input type="text"   class='giasp' name="Gia-sp"></td>
</tr>

<!-- <tr>
<td>Ảnh Sản Phẩm</td>
<td><input type="text"   class='add anhsp'name="anh-sp"></td>
</tr> -->
	
<tr>
<td>Thêm Ảnh</td>
<td> <input type="file" name="image" ></td>
</tr>	
	
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