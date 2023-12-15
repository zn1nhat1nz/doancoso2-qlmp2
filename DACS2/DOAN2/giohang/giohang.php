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
                    <a href="#shop" class="navbar-link" data-nav-link>Sản phẩm</a>
                    <a href="../pages/contact.php" class="navbar-link" data-nav-link>Liên hệ</a>
                    <a href="../pages/cooperative.php" class="navbar-link" data-nav-link>Cộng tác</a>
                    <a href="../modules/index1.php">Quản trị</a>
        </nav>
        <!-- <div class="icons">
            <div class="fa-solid fa-bars" id="menu-btn"></div>
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="count">0</span>
        </div> -->
        <div class="xoay"></div>
        <!-- <a href="../user/login.php" class="navbar-link user" data-nav-link style="font-weight: bold; color:red; text-shadow: 2px 2px 3px black;" >Đăng nhập</a> -->
        <?php 
        //  echo $un;
          
           if(isset($_SESSION['username']) && $_SESSION['username']){
            echo '<a href="../user/user_info/info.php" style="color:red">Xin chào:</a>' . $_SESSION['username'];
            echo '<a href="../user/logout.php">Đăng xuất</a>';
           }else {
            echo '<a href="../user/login.php" style="font-size:2rem; text-shadow: 2px 2px 4px red">Đăng nhập</a>';
           }
        ?>
    </section>
    
<?php
 include('../pages/connectdb.php');
 session_start();
  //  
    //  $thanhtoan = filter_input(INPUT_POST,'thanhtoan');
     $addcart = filter_input(INPUT_POST,'themgiohang');
     $uid = $_GET['iduser'];
     if(isset($_GET['idsp'])){
       $idsp = $_GET['idsp'];
     }
    if(isset($addcart)){
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
                     }else{
               ?>       
                     <!-- <h1>Giỏ hàng của: <?php echo $un; ?></h1> -->
                     
                     <?php
                         $idsp;
                        $query2= "SELECT * FROM product WHERE id_sp='$idsp'";  
                        $result2 = mysqli_query($link,$query2);
                        if(mysqli_num_rows($result2)>0){
                        while($row = mysqli_fetch_array($result2)){
                            $idsp = $row['id_sp'];
                           $tensp = $row['ten_sp'];
                            $hinhanh = $row['hinhanh'];
                            $gia = $row['gia_sp'];
                            $noidung = $row['noidung'];   
                            $soluong = $row['soluong']; 
                         $query4 = "SELECT * FROM cart ";
                         $result4 = mysqli_query($link,$query4) ; 
                         while($row = mysqli_fetch_array($result4)){
                               $idspham = $row['id_sp'];
                         }
                          $idsp2 = $_GET['idsp'];
                         if($idspham == $idsp2){
                          
                          echo "<script> alert('Sản phẩm đã tồn tại trong giỏ hàng'); </script>";
                          
                         } else{
                          
                           $query3= "INSERT INTO cart (p_name,p_price,p_image,p_quantity,id_sp,id_user) VALUES ('$tensp','$gia','$hinhanh','1',$idsp,$uid)";  
                            mysqli_query($link,$query3) or die("Thêm dữ liệu thất bại");
                                echo "<script> alert('Thêm vào giỏ hàng thành công'); </script>";
                            // header('location:../pages?iduser='.$uid.'');
                              }
                          }
                        }
                        
                        // $query3= "INSERT INTO cart VALUES ('$tensp',$gia,$hinhanh,)";  
                        // $result3 = mysqli_query($link,$query3);
                     ?>
                     
                      <!-- <td><img src="../image/product1.jpg" alt="" style="width:70px; height:70px;">
                    Son môi ádsafsadfsd</td>
                    <td><p><span>320.000</span><sup>đ</sup></p></td>
                    <td><input type="number" value="1" min="0" style="width:30px; outline: none;text-align: center; border: 0.2rem solid black"> </td>
                    <td style="cursor: pointer;">Xóa</td> -->
                     <?php
                     }
              } 
            }
           }else {
                header('location:../user/login.php');
             
           }
    }else{
      header('location:../user/login.php');
    }
?>
<!-- <link rel="stylesheet" href="../user/log"> -->