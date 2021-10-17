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
?>

<div class="main">

<div class="wallpaper"></div>
  <div class="container">
    <div class="container__top"></div>
    <div class="container__content width-content">
      <h1  class="tilter">Tạo tài khoản khách hàng cá nhân</h1>
      <h2>Đăng Ký</h2>
      		<form action="./processLogin.php?register=true" method="post">
			<table>
				<tbody>
					<tr>
						<td class="title">Tên đăng nhập:</td>
						<td>
							<input class="input__login" type="text" name="username" id="hoten">
						</td>
					</tr>
					<tr>
						<td class="title">Mật khẩu:</td>
						<td>
							<input class="input__login" type="password" required name="password" title="Phải nhập nhiều kí tự hơn"  id="password">
						</td>
					</tr>
					<tr>
						<td class="title">Nhập lại mật khẩu:</td>
						<td>
							<input class="input__login" type="password" required name="repassword" title="Phải nhập nhiều kí tự hơn"  id="confirm_password">
						</td>
					</tr>
					</tr>
           <?php
            if(isset($_SESSION["errorUsername"])){
              $errorUsername = $_SESSION["errorUsername"];
              echo '<div class="Login__Res__error">';
              echo  '<span class="Login__Res__error-title"><i class="Login__Res__error-icons fas fa-ban"></i>Lỗi đăng ký</span>';
              echo  '<span class="Login__Res__error-text">'.$errorUsername.'</span>';
              echo '</div>';
            }
        
          ?>
				</tbody>
				
			</table>
  <script src="./script/checkpass.js"></script>
	</div>

<div class="OL__REG">
	<?php
	echo '<input type="submit" value="Đăng ký" class="input__login hover">';
	?>
</div>
</form>
   </div>
  </div>
</div>


<?php require_once "./module/footer.html"; ?>
</body>
</html>
<?php
    unset($_SESSION["errorUsername"]);
?>