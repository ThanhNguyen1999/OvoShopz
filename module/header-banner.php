<div class="header__wrap ">
  <div class="header__wrap__top grid ">
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
    <div class="header__wrap__banner">
        <div class="header__banner-primary">
          <img src="./img/banner1.jpg" alt=""class="banner_primary-img">
           <img src="./img/banner2.jpg" alt=""class="banner_primary-img">
            <img src="./img/banner3.jpg" alt=""class="banner_primary-img">

        </div>
        <div class="header__banner-sub">
          <img src="./img/mini-banner1.png" alt="">
          <img src="./img/mini-banner2.png" alt="">
          
        </div>
    </div>
  </div>
  
    <div class="header__wrap__end grid">
      <img src="./img/mini-banner3.jpg" alt="">
      <img src="./img/mini-banner4.jpg" alt="">
      <img src="./img/mini-banner5.jpg" alt="">
      <img src="./img/mini-banner7.jpg" alt=""> 
    </div>
</div>
<script src="./script/app.js"></script>