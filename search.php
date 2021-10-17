
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./module/main.css">
<link rel="stylesheet" href="./module/danhmucsp.css">
<?php
	require_once "./module/header.php";
?>
    <div class="map grid">
         <a class="map__link" href="index.php">
          <i class="map__link-icons fas fa-home"></i>
        </a>
        <i class="map__link-icons fas fa-angle-right"></i>
        <?php
            echo '<a class="map__name" href="#">Tìm Kiếm </a>';
        ?>
      </div>
  <div class="content grid">
    <img class="grid"src="./img/banner-sanpham/background-banner.png" alt="">
	<?php
			echo '<h1 class="title">Kết quả tìm kiếm từ khoá : "'.$_GET['keySearch'].'"</h1>';
  ?>

  <div class="sort">
    <span>Sắp xếp theo</span>
    <div class="sort__option">
      <?php echo '<a class="sort-type" href="./search.php?type='.$_GET['type'].'&keySearch='.$_GET['keySearch'].'&sort=manual">Phổ biến</a>' ?>
      <?php echo '<a class="sort-type" href="./search.php?type='.$_GET['type'].'&keySearch='.$_GET['keySearch'].'&sort=new">Mới nhất</a>' ?>
      <?php echo '<a class="sort-type" href="./search.php?type='.$_GET['type'].'&keySearch='.$_GET['keySearch'].'&sort=price-asc">Giá tăng dần</a>' ?>
      <?php echo '<a class="sort-type" href="./search.php?type='.$_GET['type'].'&keySearch='.$_GET['keySearch'].'&sort=price-desc">Giá giảm dần</a>' ?>
    </div>
  </div>
    <?php
   
    if(isset($_GET['sort'])){
      $sort = $_GET['sort'];

      if($sort == 'price-asc'){ 
      $sanpham = $connect->printData('SELECT * FROM `'.$_GET['type'].'` WHERE TenSP LIKE "%'.$_GET['keySearch'].'%" OR MoTa LIKE "%'.$_GET['keySearch'].'%" ORDER BY Gia ASC' );
      
      }
      if($sort == 'price-desc'){
      $sanpham = $connect->printData('SELECT * FROM `'.$_GET['type'].'` WHERE TenSP LIKE "%'.$_GET['keySearch'].'%" OR MoTa LIKE "%'.$_GET['keySearch'].'%" ORDER BY Gia DESC' );
      
     }
      if($sort == 'new'){
      $sanpham = $connect->printData('SELECT * FROM `'.$_GET['type'].'` WHERE TenSP LIKE "%'.$_GET['keySearch'].'%" OR MoTa LIKE "%'.$_GET['keySearch'].'%" ORDER BY MaSP DESC' );
      }
      if($sort == 'manual'){
      $sanpham = $connect->printData('SELECT * FROM `'.$_GET['type'].'` WHERE TenSP LIKE "%'.$_GET['keySearch'].'%" OR MoTa LIKE "%'.$_GET['keySearch'].'%";' );
      }
    }
    else{
      $sanpham = $connect->printData('SELECT * FROM `'.$_GET['type'].'` WHERE TenSP LIKE "%'.$_GET['keySearch'].'%" OR MoTa LIKE "%'.$_GET['keySearch'].'%";' );
    }
    
	require_once "./script/connectdb.php";
	$connect = new database();
	
	echo '<div class="main__wrap-item stock">';
	for($i = 0; $i < count($sanpham); $i++) { 
		echo '<div class="sanpham col-2">';
		echo '<a class="main__wrap-img"  href="./detail2.php?sp='.$_GET['type'].'&id='.$sanpham[$i]['MaSP'].'"><img class="sanpham-img" src="./img/Sanpham/'.$sanpham[$i]['Anh'].'"/></a>';
		echo '<a class="main__wrap-name" href="./detail2.php?sp='.$_GET['type'].'&id='.$sanpham[$i]['MaSP'].'"><h3>'.$sanpham[$i]['TenSP'].'</h3></a>';
		//echo '<p>'.$sanpham[$i]['MoTa'].'</p>';
    echo '<div class="main__wrap-icon"><img src="./img/icons/new.png" alt=""></div>';
		$gia = $sanpham[$i]['Gia'];
		echo '<a class="main__wrap-price" href="./detail2.php?sp='.$_GET['type'].'&id='.$sanpham[$i]['MaSP'].'"><h4>'.number_format("$gia").' vnđ</h4></a>';
    echo '<div class="main__wrap-stock"><span><i class="fas fa-check"></i>Còn hàng</span><i class="far fa-eye"><span style="margin-left: 5px;">Chi tiết</span></i></div>';
		echo '</div>';
	}
	echo '</div>';
	?>
</div>
	<?php
		require_once "./module/footer.html";
	?>
