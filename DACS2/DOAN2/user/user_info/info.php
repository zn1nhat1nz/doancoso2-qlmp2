<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./user.css">
</head>
<body>
      <?php
            
            include('../../pages/connectdb.php');
            if(isset($_GET['iduser'])){
            $uid = $_GET['iduser'];
            }
            $query = "SELECT * FROM account where id_user=$uid" ; 
            $result = mysqli_query($link,$query);
            while($row = mysqli_fetch_array($result)){
                  $tennd = $row['user_name'];
                  $email= $row['user_email'];
                  $sdt = $row['user_phone'];
                  $addr = $row['user_address'];
           
      ?>
       <section class="header" style="min-height: 3rem;border-radius: 20px;">
            <a href="../../pages/?iduser=<?php echo $uid ?>" style=" margin-left: 2rem;font-size: 2rem;">Trang chủ</a> <span> >> </span> <a href=""> Thông tin chung</a>                                              
       </section> 
       <section class="main">
            <div class="options">
                  <h1>Tài khoản của: <?php echo $tennd ?> </h1>
                  <div class="select">
                        <a href="">Đổi thông tin</a> <br>
                        <a href="">Đổi mật khẩu</a> <br>
                        <a href="../logout.php">Đăng xuất</a> <br>
                  </div>
            </div>
            <div class="info">
                  <h1>Thông tin chung</h1>
                  <div class="info2">
                  <h3>Họ và tên: </h3><?php echo $tennd ?>
                  <h3>Email: </h3><?php echo $email ?>
                  <h3>Số điện thoại: </h3> <?php echo $sdt ?>
                  <h3>Địa chỉ:  </h3><?php echo $addr ?>
                  </div>
            </div>
            <div class="status">
                  <h1>Trạng thái:</h1> 
                  <div class="status2">
                  <span>Đã liên kết</span> <br>
                  <a href="">Thay đổi</a>
                  </div>
            </div>
            <?php 
                  }
            ?>
       </section>
       <!-- <section class="footer">This is footer</section> -->
</body>
</html>