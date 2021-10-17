<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Product</title>
	<link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./Style/formadmin.css">
</head>
<body>


<?php
	require_once "./script/vndFormat.php";
	require_once './script/connectdb.php';
	$connect = new database();
	$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
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
  <div class="data">
  <div class="data__title">
    <?php
	switch ($_GET['sp']) {
		case 'laptop':
			echo '<h1 class="data__title-text">Laptop - Máy tính xách tay<span class="data__title-text-sub">List</span></h1>';
			break;
		case 'pc':
			echo  '<h1 class="data__title-text";">Máy tính - Máy Chủ PC <span class="data__title-text-sub">List</span></h1>';
			break;
			case'sphot':
			echo	'<h1 class="data__title-text">Sản phẩm bán chạy<span class="data__title-text-sub">List</span></h1>';
			break;
		default:
			# code...
			break;
	};
  ?>
    
   <div class="data__add">
        <?php 
          echo '<a href="./admin-addsp.php?sp=" class="data__add-btn btn">Thêm Sản Phẩm</a>';
        ?>
        </div>
  </div>
  <div class="data__content">
	  <table class="data__content__table">
	  <thead>
		<tr>
			<th>Sản Phẩm</th>
			<th>Tên Sản Phẩm</th>
			<th>Mô Tả Sản Phẩm</th>
			<th>Giá Tiền</th>
			<th>Sửa</th>
			<th>Xoá</th>
		</tr>
  	</thead>
  	<tbody>
    <?php 
		// for($i = 0 ;$i <10 ; $i++)
		$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'');
		foreach ($sanpham as $key=>$value) 
		{ //$key = id sp ; value[id], value[sp]
			echo'<tr>';
			echo '<td class=anhmota>';
			echo '<img src="./img/Sanpham/'.$value['Anh'].'" class="item_img" style="width: 200px;" />';
			echo'</td>';
			echo '<td class="tensanpham">';
			echo $value['TenSP'];
			echo'</td>';

			echo '<td>';
			echo "<pre>";
			print_r($value['MoTa']);
			echo "</pre>";
			echo '</td>';
			echo '<td class="giasp>';
			$giasp = $value['Gia'];
				echo '<a href=""><h4 class="tien">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';

			echo'<td class="capnhat">';
			$_GET['id']=$value['MaSP'];
			echo '<a href="./admin-updatesp.php?sp='.$_GET['sp'].'&id='.$_GET['id'].'"><img src="./img/update.png" alt=""></a>';

			echo'</td>';
			echo '<td class="xoa">';
			$_GET['id']=$value['MaSP'];
			echo '<a href="./quantri/remove.php?sp='.$_GET['sp'].'&id='.$_GET['id'].'"><img src="./img/remove.png" alt=""></a>';

			echo'</td>';

			echo'</tr>';
		}

    ?>
    </tbody>
    </table>
  </div>
 </div>  
</div>
</body>
</html>
