<?php
 include('../pages/connectdb.php');
 session_cache_limiter('private_no_expire');
 session_start();
   $uid =  $_GET['iduser']; 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phong Minh Cosmectics</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-6.4.2-web/css/all.min.css">
    
</head>
<body background="../image/2575411035.jpg" style="background: linear-gradient(to right, pink,cyan, violet, rgb(228, 123, 123) );">
<section id="header" class="header">
        <?php include('./header.php') ?>
    </section>

  
<?php
        
        $_SESSION['iduser'];
   ?>
   <!-- <a href="../pages/?iduser=<?php echo $_SESSION['iduser'];  ?>">Về trang chủ</a> -->

            <h1 style="font-size: 4rem;">Giỏ hàng của bạn:</h1> <br><br>
 <?php
        $addcart = filter_input(INPUT_POST,'thanhtoan');
        $uid = $_GET['iduser'];
     if(isset($_GET['idsp'])){
       $idsp = $_GET['idsp'];
     }
    // if(isset($addcart)){
        // echo $_SESSION['username'];
        if(isset($_SESSION['username']) && $_SESSION['username']){
            $query = "SELECT*FROM account where id_user='$uid'";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_array($result)){
                     $uacc = $row['useracc'];   
                     $un  = $row['user_name'];
                     $ue = $row['user_email'];
                     $uaddress = $row['user_address'];
                     $uphone = $row['user_phone'];
                     $uimg = $row['user_image'];
                     if(empty($un) || empty($uaddress) || empty($uphone)){
                       header('location:../user/userbosung.php?id='.$uid.''); 
                     } else{
                      ?>
 <style>
      table{
        /* background: linear-gradient(to-right, blue,cyan); */
        width: 100%;
        /* text-align: center; */
        font-size: 2rem;
        box-shadow: 2px 2px 4px red,
                    -2px -2px 4px blue ;
      }
      a{
        text-decoration: none;
      }
      td{
        box-shadow: -2px -2px 2px black;
      }
      tr{
       height: 9rem;
      }
</style>
<table class="table" border="1" >
  <thead>
    <tr>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh sản phẩm</th>
      <th scope="col">Giá sản phẩm</th>
      <th scope="col">Số lượng</th>
      <!-- <th>Thành tiền</th> -->
      <th>Trạng thái</th>
    </tr>
  </thead>
  <tbody?>
        <form action="" method="post">
        <?php
              $query = "SELECT *FROM cart where id_user=$uid";
              $result = mysqli_query($link,$query);
           if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
              // $uid = $user_id ;
              $idsp = $row['id_sp'];
              $tensp = $row['p_name'];
              $hinhanh = $row['p_image'];
              $gia = $row['p_price'];
              // $noidung = $row['noidung'];   
              $sl = $row['p_quantity'];
                echo "<tr>";
                echo "<td>$tensp</td>";
                echo '<td style="text-align: center;"> <img src="../modules/quanlydanhmucsp/uploads/'.$hinhanh.'" width="100px"> </td>';
                echo '<td style="text-align: center;"><span> '.number_format($gia,0,',',',') .'</span><sup>VNĐ</sup></td>';
                echo '<td style="text-align: center;"><input name="quantity" type="number" value="'.$sl.'" min="0" style="width:30px; background:#ffffff1a;border: 0.2rem solid black"></td>';
                // $total = $gia*$sl;
                // echo '<td style="text-align: center;">'.$total.'</td>';
                echo '<td style="text-align: center;"> <a href="./delete.php?idsp='.$idsp.'" class="xoabtn">Xóa</a> <br></br>
                <a href="thanhtoan.php?id='.$idsp.'" class="ttbtn"><input type="submit" value="Thanh toán"></a> 
                 </td>';
            echo "</tr>";
            
             }
           } 
           
        ?>
        <!-- <input type="submit" value="Thanh toán"> -->
        </form>
        <?php echo $a=$_POST['quantity'] ?>
     </tbody>   
        </table>
                      <?php
                     }
                    }
                  }    
                }
  
            
          // include('./banner.php');        
 ?>     
 <br><br>
 <h1 style="font-size: 4rem;">Đang chờ xác nhận:</h1>
</body>
<!-- <link rel="stylesheet" href="./delete.php?idsp="> -->
<!-- <input type="text" > -->