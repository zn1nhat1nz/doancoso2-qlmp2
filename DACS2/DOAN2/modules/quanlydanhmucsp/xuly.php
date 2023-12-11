<?php
include('../../pages/connectdb.php');
   if(isset($_POST['themdanhmuc'])){
     echo $hinhanh = $_FILES['hinhanh']['name'];
      $hinhanh = time().'_'.$hinhanh;
      $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
      echo $loaisp = $_POST['tendanhmuc'];
   echo $stt = $_POST['thutu'];
        $query_add = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu,hinhanhloai) VALUES ('".$loaisp."','".$stt."','".$hinhanh."') ";
        mysqli_query($link,$query_add) or die("Thêm thất bại");
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
         header('location:../index1.php?action=quanlydanhmucsp&query=them');
     //    
   }
   else if(isset($_POST['suadanhmuc'])){
       $loaisp = $_POST['tendanhmuc'];
       $stt = $_POST['thutu'];
       $hinhanh = $_FILES['hinhanhloai']['name'];
        $hinhanh1 = time().'_'.$hinhanh;
      $hinhanh_tmp = $_FILES['hinhanhloai']['tmp_name'];
      if(!empty($hinhanh)){
          $hinhanh; 
      $query_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$loaisp."',thutu = '".$stt."',hinhanhloai = '".$hinhanh."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
      
       }else { 
         
         $query_show = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
         $result = mysqli_query($link,$query_show);
         if(mysqli_num_rows($result)>0)
         {
             while($row = mysqli_fetch_array($result))
             {
                echo $hinhanh2 = $row['hinhanhloai'];   
             }
         } 
         $query_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$loaisp."',thutu = '".$stt."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      //    $query_update = "UPDATE tbl_danhmuc SET tendanhmuc='$loaisp',thutu = '$stt' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      // // move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
       }
      mysqli_query($link,$query_update) or die("Sửa thất bại");
       header('location:../index1.php?action=quanlydanhmucsp&query=them');
   }else {
      echo $id = $_GET['iddanhmuc'];
       $query_delete = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
       mysqli_query($link,$query_delete);
      header('location:../index1.php?action=quanlydanhmucsp&query=them');
   }
?>
<!-- <link rel="stylesheet" href="../"> -->á