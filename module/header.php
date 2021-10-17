<link rel="stylesheet" href="./assets/css/all.css">
<link rel="stylesheet" href="./module/header.css">
<link rel="stylesheet" href="./assets/css/base.css">

<?php
require_once "./script/connectdb.php";
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$connect = new database()
?>
<?php  

if(isset($_SESSION['cart']) ){
//  echo "<pre>";
// 	print_r($_SESSION['cart']);
// 	echo "</pre>";
  $soluongsp = 0;
  $tongsoluong = 0;
  foreach($_SESSION['cart'] as $key=>$value){
        $soluongsp +=  intval($value['quantity']);
          $tongsoluong  =  $soluongsp;
    //       echo "<pre>";
    // print_r($tongsoluong);
    //  echo "<pre>";

  }
  if(isset($_SESSION['count']) ||  isset($_SESSION['total'])) {
		$_SESSION['soluongsp'] = $soluongsp;
		$_SESSION['tongsoluong'] = $tongsoluong;
	} else {
		$_SESSION['soluongsp'] = 0;
		$_SESSION['tongsoluong'] = 0;
	}
}
 ?>

<div class="header__top">
  <div class="header__top-contain grid">
   <div class="header__top-content">
    <ul class="header__top-content-list">
      <li class="header__top-content-item">
                <a href="huongdanthanhtoan.php"><i class="fas fa-question"></i></i>Hướng dẫn mua Online</a>
      </li>
      <li class="header__top-content-item">
                <a href="#"><i class="fas fa-tags"></i>Chương trình khuyến mãi </a>
      </li>
      <li class="header__top-content-item">
                <a href="#"><i class="fas fa-phone-square-alt"></i>Tổng đài</a>
      </li>
      <li class="header__top-content-item">
                <a href="#"><i class="fas fa-shield-alt"></i>Thông tin bảo hành</a>
      </li>
    </ul>
    </div>
  
   <div class="header__top-login">
        	<?php
           if(empty($_SESSION['isLogin'])) {
	echo '<div class="dangnhap">';
  // echo '<i class="fas fa-user-circle"></i>';
	echo '<a href="formdangnhap.php"><i class="fas fa-user-circle"></i><h2>Đăng nhập</h2></a>';
	echo '</div>';
 } else {
	 echo '<h2 class="text-login">Xin chào, '.$_SESSION['username'].'</h2>';
	 echo '<a href="logout.php" class="logout">đăng xuất</a>';
 }
 if (isset($_SESSION['typeAccount']) && $_SESSION['typeAccount'] == 1) {
	echo '<a href="quantri/a.php" ><img src="img/admin.png" style="width: 32px;"></a>';
  }

          ?>
        
    </div>
  </div>
</div>

<div class="header__container ">
  <div class="header__container-search grid">
    <div class="header__logo">
      <a href="./index.php" class="header__logo-link">
      <img src="./img/Logo.png" alt="Logo" class="header__logo-img">
      <img src="./img/Logo-Text.png" alt="Logo-sub" class="header__logo-text">
    </a>
      
    </div>
    <div class="header__search">
       <div class="header__search-select">
         <form action="./search.php" method="get">
          <span class="header__search-select-label">Danh mục</span>
          <!-- <i class="header__search-select-icon fas fa-caret-down"></i> -->
          <select name="type" id="" class="header__search-select-choice">
		        <option value="laptop">Laptop</option>
		        <option value="pc">PC</option>	
		        <option value="sphot">Sản Phẩm Hot</option>
	        </select>
        </div>
        
        <div class="header__search-wrap">
          <input type="text" name="keySearch" class="header__search-input" placeholder="Tìm kiếm sản phẩm">
        </div>
         <button type="submit" class="header__search-btn">
          <i class="header__search-btn-icon fas fa-search"></i>
        </button>
        </form>
    </div>
    <div class="header__cart__info">
        <div class="header__cart__info-NumPhone">
            <i class="fas fa-phone-alt"></i>
            <div class="header__hotline">
              <span>Hotline mua hàng</span>
            <span>1900.1001</span>
            </div>
            
        </div>
        <div class="header__cart__info-support">
          <a href="#" class="header__cart__info-link">
            <i class="fas fa-balance-scale"></i>
            <span>CHÍNH SÁCH HỖ TRỢ</span>
          </a>
            
        </div>
        <div class="header__cart__info-cart">
        
 
          <a href="giohang.php"><i class="fas fa-shopping-cart">
            <span class="header__cart__info-cart-text">Giỏ hàng</span>
          <?php
          if(isset($_SESSION['tongsoluong'])){
            echo  '<span class="header__cart__info-cart-count">'.$_SESSION['tongsoluong'];'.</span>';
          }else{
            echo '<span class="header__cart__info-cart-count">0</span>';
          }

          ?>
          </i></a>
        </div>

    </div>

  </div>
  <div class="header__container-information grid">
    <div class="header__container-information-menu header__menu-hover">
      <i class="fas fa-stream"></i>
        <span>Danh mục sản phẩm</span>
        <div class="header__wrap__menu">
      <ul class="header__wrap__menu-list">
          <li class="header__wrap__menu-item">
          <?php
           $sanpham = $connect->printData('SELECT * FROM laptop');
                  echo'  <a href="./danhmucsp.php?sp=laptop">
            <img src="./img/icons/laptop.webp" alt="Laptop">
            <span>Máy tính xách tay - Laptop</span>
          </a>';
          ?>
        </li>
        <li class="header__wrap__menu-item">
          <?php
				$sanpham = $connect->printData('SELECT * FROM pc');
					
          echo '<a href="./danhmucsp.php?sp=pc">
          <img src="./img/icons/PC.webp" alt="PC">
          <span>Máy tính - Máy chủ PC</span>
        </a>';
				?>
        </li>
        <li class="header__wrap__menu-item">
          <?php
				$sanpham = $connect->printData('SELECT * FROM sphot');
					
         echo' <a href="./danhmucsp.php?sp=sphot">
            <i class="fab fa-hotjar"></i>
            <span>Sản phẩm đang Hot</span>
          </a>';
				?>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/Linhkien.webp" alt="linhkien">
            <span>Linh kiện PC</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/manhinh.webp" alt="manhinh">
            <span>Màn hình máy tính</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/banphim.webp" alt="banphim">
            <span>Bàn phím</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/chuot.webp" alt="mouse">
            <span>Chuột & Lót chuột</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/tainghe.webp" alt="headphone">
            <span>Tai nghe Gaming</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/ghegaming.webp" alt="">
            <span>Ghế Gaming</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/console.webp" alt="">
            <span>Console</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/audio.webp" alt="">
            <span>Thiết bị Audio</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/thietbimang.webp" alt="">
            <span>Thiết bị mạng</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/phukien.webp" alt="">
            <span>Phụ kiện</span>
          </a>
        </li>
        <li class="header__wrap__menu-item">
          <a href="#">
            <img src="./img/icons/PC.webp" alt="">
            <span>Thiết bị văn phòng</span>
          </a>
        </li>
      </ul>
    </div>
    </div>
    
    <ul class="header__container-information-list">
      <li class="header__container-information-item">
        <i class="fas fa-star-of-david"></i>
        <span>Hàng chính hãng</span>
      </li>
      <li class="header__container-information-item">
          <i class="fas fa-user-check"></i>
          <span>Đổi trả trong 3 ngày</span>
      <li class="header__container-information-item">
          <i class="fas fa-dollar-sign"></i>
          <span>Giá ưu đại nhất</span>
      </li>
      <li class="header__container-information-item">
          <i class="fas fa-shipping-fast"></i>
          <span>Miễn phí vận chuyển</span>
      </li>
      <li class="header__container-information-item">
          <i class="fas fa-tools"></i>
          <span>Bảo hành tại nhà</span>
      </li>
    </ul>
  </div>
</div>



