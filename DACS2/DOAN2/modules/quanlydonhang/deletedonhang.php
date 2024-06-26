<?php
 session_start();
  include ('../pages/connectdb.php');
  echo $uid =  $_SESSION['iduser'];
//    $bid = $_GET['id']; 
// $uid = $_GET['iduser'];
   if(isset($_GET['idsp'])){
    
    $idsp = filter_input(INPUT_GET,'idsp');
    $query = "DELETE  FROM wait ";
    
    mysqli_query($link,$query) or die("Xóa dữ liệu thất bại");
    //  echo "hâu";
    echo "<script> alert('Xóa khỏi giỏ hàng thành công'); </script>";
    // header('location:../pages/ttgiohang.php?iduser='.$uid.'');
   }
?>

