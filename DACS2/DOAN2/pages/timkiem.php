<?php
    session_start();
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
<h1 style="margin-top: 2rem;">Từ khóa tìm kiếm: <?php echo $_GET['tukhoa'] ?></h1>
<section class="shop" id="shop">
        <h1>Sản phẩm</h1>
<div class="box-container">
    <?php 
    if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
    }else{
        $tukhoa= ' ';
    }
    $query = "SELECT * FROM product where ten_sp LIKE '%".$tukhoa."%'";
    $result = mysqli_query($link,$query);
      if(isset($_SESSION['iduser'])){
       $uid = $_SESSION['iduser'];;
      }
      if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_array($result)){
            $tensp = $row['ten_sp'];
            $hinhanh = $row['hinhanh'];
            $gia = $row['gia_sp'];
            $noidung = $row['noidung']; 
            $idsp = $row['id_sp'];
    ?>
            
           <!-- <form action="" method="post"> -->
           <div class="box">
               <div class="product">
               <?php 
                if(isset($_SESSION['iduser'])){
                    $uid = $_SESSION['iduser'];
                    ?>
              
                <a href="./chitietsp.php?iduser=<?php echo $uid; ?>&idsp=<?php echo $idsp; ?>" id="">
                     <?php      
                        } else {
                    ?>
                        <a href="./chitietsp.php?&idsp=<?php echo $idsp; ?>" id="">
                    <?php
                         }
                     ?>
                    <img src="../modules/quanlysp/uploads/<?php echo $hinhanh ?>" alt="" width="300px" height="300px">
                </a>
                <!-- <button class="fa-solid fa-cart-plus"></button> -->
               </div>
                <div class="content">
                     <h3><?php echo $tensp ?></h3>
                     <!-- <h4><?php echo $idsp ?></h4> -->
                    <div class="price"><span><?php echo $gia ?></span>VNĐ</div>
                </div>
            </div>
           <!-- </form> -->
            
         <?php
                }
            }else{
            ?>
            <h3>Hiện chưa có sản phẩm</h3>
            <?php
            }
          ?> 
</div>
</section>