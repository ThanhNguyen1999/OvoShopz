<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	session_unset();
  // setcookie("money", "", time()-3600);
  
  if (isset($_SERVER['HTTP_COOKIE'])){ 
  $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
  foreach($cookies as $cookie) { 
    $parts = explode('=', $cookie); 
    $name = trim($parts[0]);
    setcookie($name, '', time()-1000);
    setcookie($name, '', time()-1000, '/'); 
  }
}
	header('Location:./index.php');
?>