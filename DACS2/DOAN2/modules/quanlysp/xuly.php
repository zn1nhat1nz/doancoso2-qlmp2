
<?php
include('../../pages/connectdb.php');
        
        
// echo $_POST['themsanpham'];
   if(isset($_POST['themsanpham'])){
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
        $query_add = "INSERT INTO product (ten_sp,ma_sp,gia_sp,gia_sp_giam,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUES 
        ('".$tensp."','".$masp."','".$giasp."','".$giaspgiam."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','3') ";
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        mysqli_query($link,$query_add) or die("Thêm thất bại");
         header('location:../index1.php?action=quanlysp&query=them');
        
   }
   else if(isset($_POST['suadanhmuc'])){
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
      $query_update = "UPDATE product SET ten_sp='".$tensp."',ma_sp = '".$masp."',gia_sp='".$giasp."',gia_sp_giam = '".$giaspgiamsp."',
      soluong='".$soluong."',hinhanh = '".$hinhanh."',tomtat='".$tomtat."',noidung = '".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc  = '15' WHERE id_sp='$_GET[idsanpham]' ";
      mysqli_query($link,$query_update) or die("Sửa thất bại");
       header('location:../index1.php?action=quanlysp&query=them');
   }else {
      echo $idsp = $_GET['idsanpham'];
      $query_delete = "DELETE FROM product WHERE id_sp='".$idsp."' LIMIT 1";
      // $result = mysqli_query($link,$query_delete);
      // while($row = mysqli_fetch_array($result)){
      //   unlink('uploads/'.$row['hinhanh']);
      // }
       mysqli_query($link,$query_delete) or die("Xóa thất bại");
      header('location:../index1.php?action=quanlysp&query=them');
   }
?>
<!-- <link rel="stylesheet" href="../../modules/quanlysp/up"> -->