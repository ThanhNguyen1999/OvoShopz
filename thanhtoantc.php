<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="./Style/giohangxoa.css"> -->
	<link rel="stylesheet" href="./Style/thanhtoantc.css">
</head>


<body>
<?php

  require_once "./script/vndFormat.php";
  require_once "./module/header.php";
  require_once './script/connectdb.php';
  $connect = new database();
  if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>
<div class="map grid">
         <a class="map__link" href="index.php">
          <i class="map__link-icons fas fa-home"></i>
        </a>
        <i class="map__link-icons fas fa-angle-right"></i>
        <span class="map__name">Giỏ hàng</span>
        <i class="map__link-icons fas fa-angle-right"></i>
        <span class="map__name">Thanh toán</span>
      </div>
<div class="main">
<div class="main__connect__wrap grid">
  <div class="main__connect__info">
    <form action="./quantri/donhang.php" method="post">
      <h3 class="main__connect__info-title">Thông tin thanh toán</h3>
      <div class="main__info__wrap">
        <div class="main__info__wrap-items">
          <span class="main__info__wrap-title">Họ và Tên:</span>
          <input class="main__info__wrap-input" type="text" name="name" id="name" placeholder="Nhập họ tên" required>
        </div>
        <div class="main__info__wrap-items">
          <span class="main__info__wrap-title">Địa chỉ cụ thể:</span>
          <input class="main__info__wrap-input" type="text" name="address" id="address" placeholder="Ví dụ: Ngõ 123,đường Trần Hưng Đạo" required>
        </div>
        <div class="main__info__wrap-items">
          <span class="main__info__wrap-title">Số điện thoại:</span>
          <input class="main__info__wrap-input" type="text" name="phone" id="phone" placeholder="Nhập số điện thoại" pattern="[0-9]*" required>
        </div>
        <div class="main__info__wrap-items">
          <span class="main__info__wrap-title">Địa chỉ Email:</span>
          <input class="main__info__wrap-input" type="email" name="email" id="email" placeholder="Nhập địa chỉ Email" required>
        </div>
      </div>
  </div>
  <div class="main__connect__order">
      <h3 class="main__connect__order-title">Đơn hàng của bạn</h3>
				<div class="main__order__wrap">
				<table class="main__order__wrap-table">
					<thead>
						<tr>
							<th class="main__order__wrap-title">Sản phẩm</th>
							<th class="main__order__wrap-title">Thành tiền</th>					
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($_SESSION['cart'] as $key=>$value){
								echo '<tr>';
								$sanpham = $connect->printData('SELECT * FROM '.$value['sp'].' WHERE MaSP="'.$value['id'].'"');
								echo '<td>';
								echo '<span class="main__order__wrap-name">'.$sanpham[0]['TenSP'].'</span>';
								echo'</td>';	
								echo '<td>';
								$giasp = $sanpham[0]['Gia'];
								echo '<h4 class="main__order__wrap-price tien2">'.vndFormat($giasp).'</h4>';
								echo'</td>';
								echo'</tr>';
							}
						?>
				</tbody>
        <span></span>
				<tfoot>
          	<tr>
						<th class="main__order__total">Số lượng sản phẩm :</th> 
					<td>			
						<?php
            
							if (isset($_COOKIE['quality'])){
                   
                    $s= 0;
                    for($i = 0 ; $i < sizeof($_COOKIE['quality']); $i++){
                      $s +=$_COOKIE['quality'][$i];

                    }
                    echo ' <span class="main__order__total-price main__order__total-quality">'.$s.'</span> ';
                    $_SESSION['totalQuality'] = $s;
                    
                } else{
                  echo ' <span class="main__order__total-price main__order__total-quality">'.$_SESSION['tongsoluong'].'</span> ';
                  $_SESSION['totalQuality'] = $_SESSION['tongsoluong'];
                }   
               
          	?>
				 </td>
			  </tr>
					<tr>
						<th class="main__order__total">Tổng đơn hàng :</th> 
					<td>			
						<?php
							$giasp = $sanpham[0]['Gia'];
              if( !isset($_COOKIE["money"]))
              {
                 echo '<span class="main__order__total-price tientong">'.$_SESSION['total'].'</span>';
                 $totalAll =$_SESSION['total'];
                $_SESSION["totalAll"] = $totalAll;
              }
             else
              {
                $totalAll =$_COOKIE["money"];
                $_SESSION["totalAll"] = $totalAll;
                echo '<span class="main__order__total-price tientong">'.$_COOKIE["money"].'</span>';
                
              }          
          	?>
				 </td>
			  </tr>

        <tr>
						<th class="main__order__total">Chọn hình thức thanh toán :</th> 
					<td>			
						
            <select name="type" id="" class="main__order__pay__type">
            <option value="online">Thanh toán online</option>
            <option value="cod">Thanh toán khi nhận hàng</option>
            <option value="order">Đặt trước</option>
            </select>

				 </td>
			  </tr>
				</tfoot>
				</table>
					<input class="main__order__btn btn" type="submit" value="Đặt hàng">
      </form>
  </div>
</div>
</div>
</div>
<script src="validateForm.js"></script>

<?php require_once "./module/footer.html"; ?>
</body>
</html>
