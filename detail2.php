<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="./module/main.css">
		<link rel="stylesheet" href="./module/detail.css" />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
		
		<title>Document</title>
	</head>
	<body>

	<?php
		require_once "./module/header.php";
		require_once "./script/connectdb.php";
		$connect = new database();
		$sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' WHERE MaSP="'.$_GET['id'].'"');
		if(!isset($_SESSION['total'])) {
			$_SESSION['total'] = 0;
		}
    
	?>
    <div class="detail__container grid">
      <div class="detail__map">
        <a class="detail__map-icon-link" href="index.php">
          <i class="detail__map-icons fas fa-home"></i>
        </a>
        <i class="detail__map-icons fas fa-angle-right"></i>
      	<?php
 	      switch ($_GET['sp']) {
		    case 'laptop':
			    echo '<a class="detail__map-title" href="danhmucsp.php?sp=laptop">Laptop & Laptop Gaming</a>';
		    	break;
	    	case 'pc':
		    	echo  '<a class="detail__map-title" href="danhmucsp.php?sp=pc">Máy tính - Máy Chủ PC</a>';
		    	break;
		  	case'sphot':
		    	echo	'<a class="detail__map-title" href="danhmucsp.php?sp=sphot">Sản phẩm bán chạy</a>';
		    	break;
	    	default:
			    # code...
		    	break;
	      };
       echo'<i class="detail__map-icons fas fa-angle-right"></i>';
        echo '<span class="detail__map-here">'.$sanpham[0]['TenSP'].'</span>';
         ?>
         
          

      </div>
      <div class="detail__content">
        <div class="detail__content__right">
          <div class="content__right">
            <div class="content__right-img">
              <?php 
					      echo '<img src="./img/Sanpham/'.$sanpham[0]['Anh'].'" class="content__right-img-primary"/>';
                echo '<a href=""><img src="./img/Sanpham/'.$sanpham[0]['Anh'].'" class="content__right-img-sub"/></a>';
				      ?>
            </div>
            <div class="content__right-info">
              <?php
					        echo '<pre>'.$sanpham[0]['MoTa'].'</pre>';
					    ?>
              
            </div>
          </div>
          <div class="content__left">
            <h1 class="content__left-title">
				    <?php echo $sanpham[0]['TenSP']; ?>
				    </h1>
            <div class="content__left__by_code">
              <span class="content__left-by">Thương hiệu: <a href="#">zOVOz</a>  |</span>
              <span class="content__left_code">Mã Sản phẩm:
                <?php
                  echo $sanpham[0]['MaSP'];
                ?>
              </span>
            </div>
            <div class="content__left__price">
              <?php 
				        $giasp = $sanpham[0]['Gia'];
				        echo '<h4>'.number_format("$giasp").' vnđ</h4>';
				      ?>
            </div>
            <div class="content__left__gift">
              <div class="content__left__gift-item">
                  <div class="gift-title">
                    <i class="fas fa-gift"></i>
                    <span>Mừng Sinh Nhật -  Bật Tung Ưu Đãi</span>
                  </div>
                    <span class="gift-text">Giảm trực tiếp : <b>700.000đ</b></span>
              </div>
              <div class="space__border"></div>
              <div class="content__left__gift-item">
                  <div class="gift-title">
                    <i class="fas fa-gift"></i>
                    <span>Quà tặng kèm</span>
                  </div>
                    <span class="gift-text"><img class="gift-img" src="./img/gift.jpg" alt="">x1 Lót chuột</span>
              </div>
            </div>

            <div class="content__left__btn">
              <?php
				
			      	if(!isset($_SESSION['isLogin'])){
				      	echo '<a href="./formdangnhap.php" class="btn regis">Vui lòng đăng nhập để đặt hàng</a>';
				      } else {
				        	// $_SESSION['total'] += $giasp;
			
				          	// $_SESSION['cart'][$_GET['id']]['quantity'] = 0;
						  	echo '<div class="btn-order">';
						  	echo '<a href="./module/addcart.php?sp='.$_GET['sp'].'&id='.$_GET['id'].'" class="btn order">Thêm vào giỏ hàng</a>';
						  	echo '</div>';
			    		} 
				    	?>

            </div>
            <div class="space__border"></div>
            
            <div class="content__voucher">
              <span class="content__voucher-title">
                Khuyễn mãi liên quan
              </span>
              <li class="content__voucher-text">Nhập Mã <b>KLMVCA</b> giảm thêm 1% tối đa <b>100.000đ</b> khi thanh  toán qua VNPAY-QR.</li>
            </div>

          </div>
        </div>
        <div class="detail__content__left">
        <div class="detail__content__left-main">

          <div class="left__ship">
            <i class="fas fa-shipping-fast"></i>
            <span>Sản phẩm được miễn phí giao hàng</span>
          </div>
          <div class="left__policy__services">
            <h3 class="left__policy__services-title">Chính sách bán hàng</h3>
              <div class="left__policy__services-item">
                <i class="fas fa-people-carry"></i>
                <span>Miễn phí giao hàng cho đơn hàng từ 500K</span>
              </div>
              <div class="left__policy__services-item">
                <i class="far fa-check-square"></i>
                <span>Cam kết hàng chính hãng 100%</span>
              </div>
              <div class="left__policy__services-item">
                <i class="fas fa-sync-alt"></i>
                <span>Đổi trả trong vòng 10 ngày</span>
              </div>
          </div>
          <div class="left__policy__services">
              <h3 class="left__policy__services-title">
                Dịch vụ khác
              </h3>
              <div class="left__policy__services-item">
                <i class="fas fa-tools"></i>
                <span>Sửa  chữa đồng giá 150.000đ</span>
              </div>
              <div class="left__policy__services-item">
                <i class="fas fa-laptop-medical"></i>
                <span>Vệ sinh máy tính, laptop</span>
              </div>
              <div class="left__policy__services-item">
                <i class="fas fa-laptop-house"></i>
                <span>Bảo hành tại nhà</span>
              </div>
          </div>
        </div>

          <div class=""></div>
        </div>

      </div>
      <div class="detail__info">

      </div>
      <div class="detail__more">
          <div class="detail__more-title">
              <h2>Sản phẩm tương tự</h2>
              <?php
               $stock = $_GET['sp'];
               echo '<a class="detail__more-title-link" href="danhmucsp.php?sp='.$stock.'">Xem tất cả <i class="fas fa-caret-right"></i></a>';
              ?>
              
          </div>
          <div class="detail__more_wrap">
              <?php
              $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'' );
              echo '<div id="style-1" class="main__wrap-item stock  detail__more__overflow">';
	            for($i = 0; $i < 10; $i++) { 
		            echo '<div class="sanpham col-2 detail__more__hover">';
		            echo '<a class="main__wrap-img"  href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
	            	echo '<a class="main__wrap-name" href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
                echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
		            $gia = $sanpham[$i]['Gia'];
		            echo '<a class="main__wrap-price" href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
                echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
		            echo '</div>';
	            }
	              echo '</div>';
              ?>
          </div>
      </div>
    </div>

	<?php require_once "./module/footer.html"; ?>;
	</body>
	</html>

