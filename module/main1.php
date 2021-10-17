<link rel="stylesheet" href="./main.css">
<div class="main">
  <div class="main__container grid">
    <div class="main__container__title">
        <div class="main__title-primary">
            <h2>Top sản phẩm bán chạy</h2>
        </div>
        <div class="main__title-sub">
          <a href="./danhmucsp.php?sp=pc" class="main__title-sub-link">pc gaming</a>
          <a href="./danhmucsp.php?sp=laptop" class="main__title-sub-link">laptop gaming</a>
          <a href="" class="main__title-sub-link">gaming gear</a>
          <a href="" class="main__title-sub-link">màn hình máy tính</a>
          <a href="" class="main__title-sub-link">linh kiện</a>
        </div>
    </div>
    <div class="main__container__wrap">
      <?php $sanpham = $connect->printData('SELECT * FROM sphot');
      
      echo '<div class="main__wrap-item">';
        for($i = 0; $i < 6; $i++) { 
            echo '<div class="sanpham col-2">';
            echo '<a class="main__wrap-img"  href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
            echo '<a class="main__wrap-name" href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
      //echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
            echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
            $gia = $sanpham[$i]['Gia'];
            echo '<a class="main__wrap-price" href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
            echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
            echo '</div>';
          }
           echo '</div>';
        ?>
    </div>
    <div class="main__container__wrap">
      <?php $sanpham = $connect->printData('SELECT * FROM sphot');
      
      echo '<div class="main__wrap-item">';
        for($i = 6; $i < 12; $i++) { 
            echo '<div class="sanpham col-2">';
            echo '<a class="main__wrap-img"  href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
            echo '<a class="main__wrap-name" href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
      //echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
            echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
            $gia = $sanpham[$i]['Gia'];
            echo '<a class="main__wrap-price" href="./detail2.php?sp=sphot&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
            echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
            echo '</div>';
          }
           echo '</div>';
        ?>
    </div>
  </div>
  <div class="main__container grid">
    <div class="main__container__title">
        <div class="main__title-primary">
            <h2>Máy tính - PC gaming</h2>
        </div>
        <div class="main__title-sub hidden">
          <a href="" class="main__title-sub-link">pc gaming</a>
          <a href="" class="main__title-sub-link">laptop gaming</a>
          <a href="" class="main__title-sub-link">gaming gear</a>
          <a href="" class="main__title-sub-link">man hình máy tính</a>
          <a href="" class="main__title-sub-link">linh kiện</a>
        </div>
    </div>
    <div class="main__container__wrap">
      <?php $sanpham = $connect->printData('SELECT * FROM pc');
      
      echo '<div class="main__wrap-item">';
        for($i = 0; $i < 6; $i++) { 
            echo '<div class="sanpham col-2">';
            echo '<a class="main__wrap-img"  href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
            echo '<a class="main__wrap-name" href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
      //echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
            echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
            $gia = $sanpham[$i]['Gia'];
            echo '<a class="main__wrap-price" href="./detail2.php?sp=pc&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
            echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
            echo '</div>';
          }
           echo '</div>';
        ?>
    </div>
    <div class="main__container__more">
      <a class="main__container__more-link" href="./danhmucsp.php?sp=pc">Xem tất cả<i class="fas fa-angle-double-right"></i></a>
    </div>

  </div>
  <div class="main__advertise grid">
      <img src="./img/adv/adv2.jpg" alt="">
      <img src="./img/adv/adv1.webp" alt="">
      <img src="./img/adv/adv3.jpg" alt="">
      <img src="./img/adv/adv4.jpg" alt="">
  </div>
  <div class="main__container grid">
    <div class="main__container__title">
        <div class="main__title-primary">
            <h2>Laptop - Laptop gaming</h2>
        </div>
        <div class="main__title-sub hidden">
          <a href="" class="main__title-sub-link">pc gaming</a>
          <a href="" class="main__title-sub-link">laptop gaming</a>
          <a href="" class="main__title-sub-link">gaming gear</a>
          <a href="" class="main__title-sub-link">man hình máy tính</a>
          <a href="" class="main__title-sub-link">linh kiện</a>
        </div>
    </div>
    <div class="main__container__wrap">
      <?php $sanpham = $connect->printData('SELECT * FROM laptop');
      
      echo '<div class="main__wrap-item">';
        for($i = 0; $i < 6; $i++) { 
            echo '<div class="sanpham col-2">';
            echo '<a class="main__wrap-img"  href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
            echo '<a class="main__wrap-name" href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
      //echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
            echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
            $gia = $sanpham[$i]['Gia'];
            echo '<a class="main__wrap-price" href="./detail2.php?sp=laptop&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
            echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
            echo '</div>';
          }
           echo '</div>';
        ?>
    </div>
    <div class="main__container__more">
      <a class="main__container__more-link" href="./danhmucsp.php?sp=laptop">Xem tất cả<i class="fas fa-angle-double-right"></i></a>
    </div>

  </div>
</div>

