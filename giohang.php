<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/giohang.css">
	<link rel="stylesheet" href="./Style/giohangxoa.css">
</head>


<body>
<?php

require_once "./script/vndFormat.php";
require_once "./module/header.php";
require_once './script/connectdb.php';
$connect = new database();
// echo "<pre>";
//     print_r($_SESSION);
//     echo "</pre>";
//    echo "<pre>";
//   print_r($_COOKIE);
//   echo "</pre>"; 
?>
  <div class="map grid">
         <a class="map__link" href="index.php">
          <i class="map__link-icons fas fa-home"></i>
        </a>
        <i class="map__link-icons fas fa-angle-right"></i>
        <span class="map__name">Giỏ hàng</span>
      </div>
<div class="cart__wrap grid">
<h1 class="title-card ">Giỏ hàng</h1>
<?php
if(isset($_SESSION['cart']) )
{?>

<table width="100%">
	<thead>
		<tr class="row__table">
			<th>Sản Phẩm</th>
			<th>Tên sản phẩm</th>
			<th>Giá tiền</th>
			<th>Số lượng</th>
			<th>Tổng</th>
			<th>Xoá</th>
		</tr>
	</thead>
<tbody>
<?php 

		
		foreach ($_SESSION['cart'] as $key=>$value) { //$key = id sp ; value[id], value[sp]
			echo '<tr>';
			$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
			echo '<td>';
			echo '<img src="./img/Sanpham/'.$sanpham[0]['Anh'].'" class="item_img"  />';
			echo'</td>';

			echo '<td class="tensanpham">';
			echo $sanpham[0]['TenSP'];
			echo'</td>';

			echo '<td class="giasp>';
			$giasp = $sanpham[0]['Gia'];
				echo '<a href=""><h4 class="tien">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';

			echo '<td class="soluongsp">';
			echo '<input type="number" name="quantity" id="" value="'.$value['quantity'].'" min="1" class="slsp" onclick="updateTotal()">';
			echo'</td>';

			echo '<td class="giasp2>';
				$giasp = $sanpham[0]['Gia'];
				echo '<a href=""><h4 class="tien2">'.vndFormat($giasp).'</h4></a>';
			echo'</td>';
			

			echo '<td class="xoa">';
			echo '<a href="giohangxoa.php?id='.$value['id'].'&sp='.$value['sp'].'"><i class="remove fas fa-minus-circle"></i></a>';

			echo'</td>';
			
		echo '</tr>';
		}
	


?>
</tbody>
</table>
<div class="total__money">
<span class="total__money-title">Tổng tiền :</span>
<?php
$giasp = $sanpham[0]['Gia'];
echo '<span class="total__money-number tientong" id="demo" onclick="myFunction()">'.$_SESSION['total'].'</span>';
?>
</div>
<div class="decision" >
<?php 
echo '<a class="btn btn__decision_more" href="index.php"><span>Chọn thêm sản phẩm</span></a>';
echo '<a class="btn btn__decision_pay" href="thanhtoantc.php" ><span>Thanh toán</span></a>';
?>
<button class="btn btn__decision_update" onclick="myFunction()"><span>Cập nhật giỏ hàng </span><i class="fab fa-instalod"></i></button>
</div>
<?php
	}
	else{
		?>
		<h3 class="thongbao">Không có sản phẩm nào trong giỏ hàng</h3>
		<div class="back__home">
			<a class="back__home-link"href="index.php">
        <img src="./img/back.png" alt="">
        <span>Trở về trang chủ</span>
      </a>
    </div>
		<?php
	}
	?>
  </div>
<?php require_once "./module/footer.html"; ?>
<script src="script/updateTotal.js"></script>
<script>
    function myFunction() {
         var x = document.getElementById("demo").textContent ;
         console.log(x);
          console.log(typeof x);
          document.cookie = 'money='+x+'';
          
    }
    
</script>
</body>
</html>