



<?php 
//    include 'connectdb.php'
        session_start();
        // include '../user/login.php';
        include('./connectdb.php');
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
<body>
    
    <section id="header" class="header">
        <?php include('./header.php'); ?>
    </section>
    <section class="category">
        <h1>Phân loại</h1>
         <?php 
            include('./phanloai.php');

            ?>
        <!-- <div class="box-container">
            <a href="../pages?iddanhmuc=2" class="box">
                <img src="../image/category1.png" alt="" width="200px" height="200px">
                <h1>Serum</h1>
            </a>

            <a href="../pages?iddanhmuc=3" class="box">
                <img src="../image/category2.png" alt="" width="200px" height="200px">
                <h1>Son</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category3.png" alt="" width="200px" height="200px">
                <h1>Chì</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category4.png" alt="" width="200px" height="200px">
                <h1>Nước hoa</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category5.png" alt="" width="200px" height="200px">
                <h1>Kem nền</h1>
            </a>
        </div> -->
        <?php

        ?>
    </section>
    <section class="shop" id="shop">
        <h1>Sản phẩm</h1>
        <?php
        include('./connectdb.php');
        $loaisp = $_GET['id']; 
        $query= "SELECT * FROM product WHERE id_danhmuc=$loaisp";  
        $result = mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
             $idsp = $row['id_sp'];
             $tensp = $row['ten_sp'];
             $hinhanh = $row['hinhanh'];
             $gia = $row['gia_sp'];
             $noidung = $row['noidung'];   
?>
<div class="box-container" style="height: 30rem;">
            <div class="box">
               <div class="product">
               
                <a href="./chitietsp.php?idsp=<?php echo $idsp; ?>" id="">
                    <img src="../modules/quanlysp/uploads/<?php echo $hinhanh; ?>" alt="" width="300px" height="300px">
                </a>

                <button class="fa-solid fa-cart-plus"></button>
               </div>
                        <div class="content">
                    <h3><?php echo $tensp ?></h3>
                    <div class="price"><span><?php echo $gia ?></span>VNĐ</div>
                </div>
            </div>
            <div class="contentsp" style=" margin-bottom: 24rem;">
               <form action="" method="post">
                        <h2 style="font-size: 3rem;">Về sản phẩm:</h2>
                        <p style="font-size: 2rem;"><?php echo $noidung ?></p>
                        <p style="font-size: 2rem;">Giá sản phẩm: <?php echo $gia ?><span> VND</span></p>
               </form>
            </div>
 </div>
 <?php
        } 
        }
        else{
            echo '<div class="box-container" style="height: 30rem;">';
            echo "<h2>Hiện chưa có sản phẩm</h2>";
            echo '</div>';
        }
 ?>
        </div>


    </section>

    <section class="cart">
       <!-- <?php echo  $_SESSION['iduser']; ?> -->
   <?php
            if(isset($_SESSION['username']) && $_SESSION['username']){
                $useracc = $_SESSION['username'];
                 $uid = $_GET['iduser'];
          ?>  
        <form action="./ttgiohang.php?iduser=<?php echo $uid ?> " method="post">
        <?php } else { ?>
            <form action="../giohang/giohang.php " method="post">
        <?php      
             }
            ?>
        
        <i class="fa-solid fa-xmark" style="cursor: pointer"></i>
            <h2>Giỏ hàng</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <td><img src="../image/product1.jpg" alt="" style="width:70px; height:70px;">
                    Son môi ádsafsadfsd</td>
                    <td><p><span>320.000</span><sup>đ</sup></p></td>
                    <td><input type="number" value="1" min="0" style="width:30px; outline: none;text-align: center; border: 0.2rem solid black"> </td>
                    <td style="cursor: pointer;">Xóa</td> -->
                </tbody>
            </table>
            <div class="total-price" style="text-align: right;">
                <p style="font-weight: bold;">Tổng tiền:<span>0</span><sup></sup></p>
            </div>
           <div class="box">
           <div class="top"></div>
           <input type="submit" value="Đi đến trang thanh toán" class="thanhtoan" name="thanhtoan">
           <div class="bot"></div>
                <div class="right"></div>
                    
                    <div class="left"></div>
            
            
           </div>
        </form>
       <?php 
        //  $query = "SELECT*FROM account where useracc='$useracc'";
        //  $result = mysqli_query($link,$query);
        //  if(mysqli_num_rows($result)>0){
        //    while($row = mysqli_fetch_array($result)){
        //      //  $uid = $row['user_id'];
        //       $uacc = $row['useracc'];
        //      //  $un2 = $row['Uname'];    
        //       $up = $row['user_password'];
        //       $un  = $row['user_name'];
        //       $ue = $row['user_email'];
        //       $uaddress = $row['user_address'];
        //       $uimg = $row['user_image'];
        //       $ur = $row['role'];
        //    } 
          // }
       include('./giohang.php'); ?>
    </section>

    <script src="../script/script.js"></script>
</body>
</html>