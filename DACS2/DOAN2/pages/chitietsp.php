



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
                    
                    <a href="../pages/" class="navbar-link" data-nav-link>Trang chủ</a>
                    <a href="#shop" class="navbar-link" data-nav-link>Cửa hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Mẫu hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Cộng tác</a>

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
    <section class="shop" id="shop">
    <h1>Sản phẩm</h1>
        <?php
        include('./connectdb.php');
        $idsp = $_GET['idsp']; 
        $query= "SELECT * FROM product WHERE id_sp=$idsp";  
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_array($result)){
             $tensp = $row['ten_sp'];
             $hinhanh = $row['hinhanh'];
             $gia = $row['gia_sp'];
             $noidung = $row['noidung'];   
        
        ?>
                <div class="box-container" style="height: 30rem;">
                            <div class="box">
                            <div class="product">
                                
                                <a href="#shop" id="">
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
        ?>
    </section>

    <script src="../script/script.js"></script>
</body>
</html>