<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
  $error = "Tài khoản hoặc mật khẩu không đúng";
  $errorUsername = "Tên tài khoản đã tồn tại";
	require_once './script/connectdb.php';
	$database = new database();

	if(isset($_GET['register'])) { //Nếu đăng ký
    $checked = $database->printData('SELECT * FROM `account` WHERE username="'.$_POST['username'].'"');
    if(!empty($checked)){
       $_SESSION["errorUsername"] = $errorUsername;
       header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
		elseif ($_POST['password'] == $_POST['repassword']) {
			$database->insertData('INSERT INTO `account` VALUES ("'.$_POST['username'].'", "'.$_POST['password'].'", "0")');
			header('Location:./index.php');
		}
	} else {
		$dataLogin = $database->printData('SELECT * FROM `account`');


		$data = $database->printData('SELECT * FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";');
		// echo 'SELECT * FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";';
		
		//Neu dang nhap
		if(empty($data)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
       $_SESSION["errorLogin"] = $error;
    
		} else {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['isLogin'] = 1;
			$typeAccount = $database->printTypeProduct('SELECT Type FROM `account` WHERE username="'.$_POST['username'].'" AND password = "'.$_POST['password'].'";', 'Type');
			$_SESSION['typeAccount'] = $typeAccount[0];
			header('Location:./index.php');
		}
		
	}