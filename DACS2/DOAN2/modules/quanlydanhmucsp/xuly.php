<?php
include('../../pages/connectdb.php');
   echo $loaisp = $_POST['tendanhmuc'];
   echo $stt = $_POST['thutu'];
   if(isset($_POST['themdanhmuc'])){
        $query_add = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUES ('".$loaisp."','".$stt."') ";
        mysqli_query($link,$query_add) or die("Thêm thất bại");;
     //    header('location:../../web_dacs2/DACS2/DOAN2/modules/index1.php?action=quanlidanhmucsp');
     //    
   }
?>
<!-- <link rel="stylesheet" href="../index1.php"> -->