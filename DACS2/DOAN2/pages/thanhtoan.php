<?php
//  session_start();
 include('./connectdb.php');
 $uid = $_GET['iduser'];
  $id = $_GET['id'];
 $query = "SELECT *FROM cart where id_user=$uid AND id_sp=$id";
 $result = mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
  $idc = $row['id_cart'];
 $idsp = $row['id_sp'];
 $tensp = $row['p_name'];
 $hinhanh = $row['p_image'];
 $gia = $row['p_price'];
 $sl = $row['p_quantity'];
 $idsp = $row['id_sp'];
 $iduser = $row['id_user'];
//  if($id==$idsp){
//     echo "<script> alert('Bạn đã gửi đơn này rồi'); </script>";
//  }
//  else{
//         echo "<script> alert('Gửi đơn thành công. Vui lòng chờ xác nhận'); </script>";
//         $query2 = "INSERT INTO wait(p_name,p_image,p_quantity,p_total,cart,id_user,statusz,id_sp) VALUES ('$tensp','$hinhanh','$sl','$total','$idc','$iduser','0','$idsp')";
//  $result2 = mysqli_query($link,$query2) or die("thêm thất bại");
//  }
}
}


?>