<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    // session_destroy();
    header("location:../pages");
}
?>
<!-- <a href="../pages/">HOME</a> -->