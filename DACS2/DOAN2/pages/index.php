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
        <div class="spinner"></div>
        <div class="logo">
            <i class="fa-solid fa-wand-magic-sparkles"> 
                <!-- <span>
                <canvas id="myCanvas" width="200" height="40"></canvas>
            </span> -->
            Phong Minh Cosmectics
          
        </i>
            <!--  -->
           
        </div>
        
        <nav class="navbar">
                    
                    <a href="#" class="navbar-link" data-nav-link>Trang chủ</a>
                    <a href="#shop" class="navbar-link" data-nav-link>Cửa hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Mẫu hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Cộng tác</a>
                    <a href="../modules/index1.php">Đi đến trang quản trị</a>
        </nav>
        <div class="icons">
            <div class="fa-solid fa-bars" id="menu-btn"></div>
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="count">0</span>
        </div>
        <div class="xoay"></div>
        <!-- <a href="../user/login.php" class="navbar-link user" data-nav-link style="font-weight: bold; color:red; text-shadow: 2px 2px 3px black;" >Đăng nhập</a> -->
        <?php 
        //  echo $un;
        // echo $_SESSION['username'];
           if(isset($_SESSION['username']) && $_SESSION['username']){
            echo '<a href="../user/user_info/info.php" style="color:red">Xin chào:</a>' . $_SESSION['username'];
            echo '<a href="../user/logout.php">Đăng xuất</a>';
           }else {
            echo '<a href="../user/login.php" style="font-size:2rem; text-shadow: 2px 2px 4px red">Đăng nhập</a>';
           }
        ?>
    </section>
    <section class="home" id="home">
        <div class="slide active" style="background: url(../image/home.jpg) no-repeat;background-size: cover; background-position: center;">
                <div class="content">
                    <h1>CONTENT</h1>
                    <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                        sajfgsdgfjhgasfgasjhgajhsf <br>
                        sậhsfbajhsbfjasbfjasbfj
                    </h3>
                </div>
        </div>
        <div class="slide" style="background: url(../image/banner2.png) no-repeat;background-size: cover; background-position: center;">
            <div class="content">
                <span>CONTENT2</span>
                <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                    sajfgsdgfjhgasfgasjhgajhsf <br>
                    sậhsfbajhsbfjasbfjasbfj
                </h3>
            </div>
     </div>
     <div class="slide" style="background: url(../image/banner3.jpg) no-repeat; background-size: cover; background-position: center; ">
         <div class="content">
                <span>CONTENT3</span>
                 <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                sajfgsdgfjhgasfgasjhgajhsf <br>
                sậhsfbajhsbfjasbfjasbfj
                </h3>
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
        <form action="" method="post">
        <i class="fa-solid fa-xmark" style="cursor: pointer"></i>
            <h2>Giỏ hàng</h2>
            <table>
                <thead>
                    <tr>
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
           <button>Thanh toán</button>
           <div class="bot"></div>
                <div class="right"></div>
                    
                    <div class="left"></div>
            
            
           </div>
        </form>
    </section>

    <section class="message" style="background: url(../image/banner.jpg) no-repeat;">
        <div class="content">
            <span>Ưu đãi <span>đặc biệt</span></span>
        <h3>Giảm giá đến 30%</h3>
        <p>Chỉ riêng mùa giáng sinh này, ưu đãi cực sốc.</p>
        <a href="#" class="btn">Mua ngay</a>
        </div>
    </section>
    <section class="footer">
        <h1>Về chúng tôi</h1>
    </section>
    <script src="../script/script.js"></script>
</body>
</html>