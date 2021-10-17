
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./module/main.css">
<link rel="stylesheet" href="./module/danhmucsp.css">
<?php
	require_once "./module/header.php";
  //  $name = $_GET['sp'];
?>
    <div class="map grid">
      <!-- Map Ver 1.0 -->
        <!-- <span>Bạn đang ở : </span>
        <a href="index.php">
          <span class="map-name">Trang chủ</span>
        </a>
        <i class="fas fa-angle-right"></i>
        <?php
        echo '<span class="map-name">'.$name.'</span>'
        ?> -->
        <!-- Map Ver 2.0 -->
         <a class="map__link" href="index.php">
          <i class="map__link-icons fas fa-home"></i>
        </a>
        <i class="map__link-icons fas fa-angle-right"></i>
        <?php
        switch ($_GET['sp']) {
          case 'laptop':
            echo '<a class="map__name" href="danhmucsp.php?sp=laptop">Laptop & Laptop Gaming</a>';
            break;
          case 'pc':
            echo  '<a class="map__name" href="danhmucsp.php?sp=pc">Máy tính - Máy Chủ PC</a>';
            break;
          case'sphot':
            echo	'<a class="map__name" href="danhmucsp.php?sp=sphot">Sản phẩm bán chạy</a>';
            break;
          default:
            # code...
            break;
          };
  
        ?>
      </div>
  <div class="content grid">
    <img class="grid"src="./img/banner-sanpham/background-banner.png" alt="">
    <!-- <img src="./img/banner-sanpham/banner-laptop-2.png" alt=""> -->

	<?php
	switch ($_GET['sp']) {
		case 'laptop':
			echo '<h1 class="title">Laptop & Laptop Gaming</h1>';
			break;
		case 'pc':
			echo  '<h1 class="title";">Máy tính - Máy Chủ PC </h1>';
			break;
			case'sphot':
			echo	'<h1 class="title">Sản phẩm bán chạy</h1>';
			break;
		default:
			# code...
			break;
	};
  ?>
    

  <div class="sort">
    <span>Sắp xếp theo</span>
    <div class="sort__option">
      <?php echo '<a class="sort-type" href="./danhmucsp.php?sp='.$_GET['sp'].'&sort=manual">Phổ biến</a>' ?>
      <?php echo '<a class="sort-type" href="./danhmucsp.php?sp='.$_GET['sp'].'&sort=new">Mới nhất</a>' ?>
      <?php echo '<a class="sort-type" href="./danhmucsp.php?sp='.$_GET['sp'].'&sort=price-asc">Giá tăng dần</a>' ?>
      <?php echo '<a class="sort-type" href="./danhmucsp.php?sp='.$_GET['sp'].'&sort=price-desc">Giá giảm dần</a>' ?>
    </div>
  </div>
    <?php
   
    if(isset($_GET['sort'])){
      $sort = $_GET['sort'];

      if($sort == 'price-asc'){ 
      $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' ORDER BY Gia ASC' );
      
      }
      if($sort == 'price-desc'){
      $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' ORDER BY Gia DESC' );
      
     }
      if($sort == 'new'){
      $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].' ORDER BY MaSP DESC' );
      }
      if($sort == 'manual'){
      $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'' );
      }
    }
    else{
      $sanpham = $connect->printData('SELECT * FROM '.$_GET['sp'].'' );
    }
    
	require_once "./script/connectdb.php";
	$connect = new database();
	
	echo '<div class="main__wrap-item stock">';
	for($i = 0; $i < count($sanpham); $i++) { 
		echo '<div class="sanpham col-2">';
		echo '<a class="main__wrap-img"  href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
		echo '<a class="main__wrap-name" href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
    echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a class="main__wrap-price" href="./detail2.php?sp='.$_GET['sp'].'&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
    echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
		echo '</div>';
	}
	echo '</div>';
	?>
</div>
	<?php
		require_once "./module/footer.html";
	?>
