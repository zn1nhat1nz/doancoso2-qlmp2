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
        
        <!-- <a href="../user/login.php" class="navbar-link user" data-nav-link style="font-weight: bold; color:red; text-shadow: 2px 2px 3px black;" >Đăng nhập</a> -->
          <?php  include('./header.php'); ?>
    </section>
    <section class="home" id="home">
        <div class="slide active" style="background: url(../image/home.jpg) no-repeat;background-size: cover; background-position: center;">
                <div class="content">
                    <h1>Tự tin khoe sắc</h1>
                    <h3>Chào mừng bạn đến với Phong Minh Cosmectics  <br>
                         Điểm đến hàng đầu cho sắc đẹp tự tin! <br>
                         Chúng tôi tự hào là địa chỉ mua sắm trực tuyến <br>
                         chuyên cung cấp các sản phẩm mỹ phẩm chất lượng hàng đầu <br>
                         mang đến cho bạn trải nghiệm mua sắm đẳng cấp và tiện lợi.
                        
                    </h3>
                </div>
        </div>
        <div class="slide" style="background: url(../image/banner2.png) no-repeat;background-size: cover; background-position: center;">
            <div class="content">
            <h1>Tự tin khoe sắc</h1>
                    <h3>Chào mừng bạn đến với Phong Minh Cosmectics  <br>
                         Điểm đến hàng đầu cho sắc đẹp tự tin! <br>
                         Chúng tôi tự hào là địa chỉ mua sắm trực tuyến <br>
                         chuyên cung cấp các sản phẩm mỹ phẩm chất lượng hàng đầu <br>
                         mang đến cho bạn trải nghiệm mua sắm đẳng cấp và tiện lợi.
            </div>
     </div>
     <div class="slide" style="background: url(../image/banner3.jpg) no-repeat; background-size: cover; background-position: center; ">
         <div class="content">
         <h1>Tự tin khoe sắc</h1>
                    <h3>Chào mừng bạn đến với Phong Minh Cosmectics  <br>
                         Điểm đến hàng đầu cho sắc đẹp tự tin! <br>
                         Chúng tôi tự hào là địa chỉ mua sắm trực tuyến <br>
                         chuyên cung cấp các sản phẩm mỹ phẩm chất lượng hàng đầu <br>
                         mang đến cho bạn trải nghiệm mua sắm đẳng cấp và tiện lợi.
            </div>
        </div>
        <div class="fa-solid fa-circle-chevron-left" id="pre-slide" onclick="prev()"></div>
        <div class="fa-solid fa-circle-chevron-right" id="next-slide" onclick="next()"></div>
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
         <?php include('./sanpham.php'); ?>
        </div>


    </section>

    <section class="cart">
       <!-- <?php echo  $_SESSION['iduser']; ?> -->
   <?php
            if(isset($_SESSION['username']) && $_SESSION['username']){
                $useracc = $_SESSION['username'];
                if(isset( $_SESSION['iduser'])){
                 $uid = $_GET['iduser'];
                }
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
    <section class="footer">
            <?php include('./banner.php'); ?>
    </section>
    

    <script src="../script/script.js"></script>
</body>
</html>