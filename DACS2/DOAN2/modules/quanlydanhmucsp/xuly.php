<?php
   echo $loaisp = $_POST['tendanhmuc'];
   echo $stt = $_POST['thutu'];
   if(isset($_POST['themdanhmuc'])){
        $query_add = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUES ('".$loaisp."','".$stt."') ";
   }
?>
