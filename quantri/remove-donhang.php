<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once '../script/connectdb.php';
	$database = new database();

	echo $_GET['id'];
	$database->insertData('DELETE FROM `khachhang` WHERE  username="'.$_GET['id'].'";');
	header('Location:../admin-khachhang.php');