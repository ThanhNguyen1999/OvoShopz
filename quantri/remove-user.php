<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once '../script/connectdb.php';
	$database = new database();

	echo $_GET['id'];
  $notdo=1;
  

  $type = $_GET['type'];
  
  if($type == $notdo){
    echo 'khong the xoa';
  }
  else{
    echo 'DELETE FROM `account` WHERE  username="'.$_GET['id'].'"';
    $database->insertData('DELETE FROM `account` WHERE  username="'.$_GET['id'].'";');
    header('Location:../admin-user.php');
  }