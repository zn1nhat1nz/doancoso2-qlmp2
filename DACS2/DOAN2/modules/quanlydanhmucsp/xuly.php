<?php
include('../../pages/connectdb.php');
   
   if(isset($_POST['themdanhmuc'])){
      echo $loaisp = $_POST['tendanhmuc'];
   echo $stt = $_POST['thutu'];
        $query_add = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUES ('".$loaisp."','".$stt."') ";
        mysqli_query($link,$query_add) or die("Thêm thất bại");
         header('location:../index1.php?action=quanlydanhmucsp&query=them');
     //    
   }
   else if(isset($_POST['suadanhmuc'])){
      echo $loaisp = $_POST['tendanhmuc'];
   echo $stt = $_POST['thutu'];
      $query_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$loaisp."',thutu = '".$stt."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      mysqli_query($link,$query_update) or die("Sửa thất bại");
       header('location:../index1.php?action=quanlydanhmucsp&query=them');
   }else {
      echo $id = $_GET['iddanhmuc'];
       $query_delete = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
       mysqli_query($link,$query_delete);
      header('location:../index1.php?action=quanlydanhmucsp&query=them');
   }
?>
<!-- <link rel="stylesheet" href="../"> -->