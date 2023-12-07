<?php
include('../../pages/connectdb.php');
        $tensp = $_POST['tensp'];
        $masp = $_POST['masp'];
        $giasp = $_POST['giasp'];
        $giaspgiam = $_POST['giaspgiam'];
        $soluong = $_POST['soluong'];
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        $tinhtrang = $_POST['tinhtrang'];
        $loaisp = $_POST['danhmucsp'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh = time().'_'.$hinhanh;
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        

   if(isset($_POST['themsanpham'])){
        $query_add = "INSERT INTO tbl_danhmuc(ten_sp,ma_sp,gia_sp,gia_sp_giam,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUES 
        ('".$tensp."','".$masp."','".$giasp."','".$giaspgiam."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','3') ";
        move_uploaded_file($hinhanh,'uploads/'.$hinhanh);
        mysqli_query($link,$query_add) or die("Thêm thất bại");
         header('location:../index1.php?action=quanlysp&query=them');
        
   }
   else if(isset($_POST['suadanhmuc'])){
      $query_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$loaisp."',thutu = '".$stt."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      mysqli_query($link,$query_update) or die("Sửa thất bại");
       header('location:../index1.php?action=quanlysp&query=them');
   }else {
      echo $id = $_GET['iddanhmuc'];
       $query_delete = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
       mysqli_query($link,$query_delete);
      header('location:../index1.php?action=quanlysp&query=them');
   }
?>
<!-- <link rel="stylesheet" href="../../image"> -->