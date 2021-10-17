
<?php
setcookie('money');
// echo "<pre>";
//     print_r($_SERVER['HTTP_COOKIE']);
//     echo "</pre>";
//    echo "<pre>";
//   print_r($_COOKIE);
//   echo "</pre>";
// echo count($_COOKIE['quality']);
if(isset($_COOKIE['quality'])){
  for($i = 0 ; $i < count($_COOKIE['quality']); $i++){
      if (isset($_COOKIE['quality'])) {
      setcookie("quality[$i]", "", time()-7200);    
      } else {
      setcookie("quality[$i]", "", time() + (86400 * 365));    
      }
  
  }
  header('Location:paid.php');
}
else{
  header('Location:paid.php');
}
