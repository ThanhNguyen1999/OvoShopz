<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./Style/fromdanhnhap.css">
</head>
<body>
<?php
require_once "./module/header.php";
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// echo "<pre>";
// 	print_r($_POST);
// 	echo "</pre>";
// if(isset($_SESSION["errorLogin"])){
//         $error = $_SESSION["errorLogin"];
//         echo  $error;
//          }
// ?>
<div class="main">

<div class="wallpaper"></div>
  <div class="container">
    <div class="container__top"></div>
    <div class="container__content">
      <h1  class="tilter">Thông tin khách hàng đăng nhập hệ thống</h1>
      <h2>Đăng Nhập</h2>
      <form class="Login" action="./processLogin.php" method="post">
		  <table>
			  	<tbody>
				  	<tr>
					  	<td>
						  	<input class="input__login" type="text" name="username" id="hoten" placeholder="Tên Đăng Nhập" required>
					  	</td>
				  	</tr>
				  	<tr>
					  	<td>
					  		<input class="input__login" type="password" name="password" title="Phải nhâp nhiều kí tự hơn" placeholder="Mật Khẩu" required>
					  	</td>
			  		</tr>
			  		</tr>
             <?php
            if(isset($_SESSION["errorLogin"])){
              $error = $_SESSION["errorLogin"];
              echo '<div class="Login__Res__error">';
              echo  '<span class="Login__Res__error-title"><i class="Login__Res__error-icons fas fa-ban"></i>Lỗi đăng nhập</span>';
              echo  '<span class="Login__Res__error-text">'.$error.'</span>';
              echo '</div>';
            }
        
          ?>
			  	</tbody>
         <span></span>
		  	</table>
    <div class="OL__REG">
	    <?php
	      echo '<input type="submit" value="Đăng nhập" class="input__login hover">';
	    ?>
	    <?php
      	echo '<a class="signup__login"href="./formdangky.php">Đăng ký</a>';
    	?>
    </div>
   
    </div>
    </form>
   </div>
  </div>
</div>
<?php require_once "./module/footer.html"; ?>

</body>
</html>
<?php
    unset($_SESSION["errorLogin"]);
?>