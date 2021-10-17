<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	$fileupload = $_FILES['image'];
	echo "<pre>";
	print_r($fileupload);
	echo "</pre>";
	if($fileupload['name'] != null){
		$filename= $fileupload['tmp_name'];
	
		$destination = '../img/Sanpham/'.$fileupload['name'];
		move_uploaded_file($filename, $destination);
	
	}

	$masp= $_POST['masp'];
	$type=$_POST['type'];
	$tensp= $_POST['ten-sp'];
	$motasp= $_POST['mota-sp'];
	$giasp= $_POST['Gia-sp'];
	$anhsp= $fileupload['name'];

	
	require_once '../script/connectdb.php';
	$database = new database();
echo 'UPDATE `'.$type.'` Set `TenSP`="'.$tensp.'",`MoTa` ="'.$motasp.'",`Anh`="'.$anhsp.'",`Gia`="'.$giasp.'" WHERE  `MaSP`="'.$masp.'";';
	$database->insertData('UPDATE `'.$type.'` Set `TenSP`="'.$tensp.'",`MoTa` ="'.$motasp.'",`Anh`="'.$anhsp.'",`Gia`="'.$giasp.'" WHERE  `MaSP`="'.$masp.'";');
	header('Location:../admin-sanpham.php?sp='.$type.'');

  