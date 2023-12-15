<?php
   include '../pages/connectdb.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="boxLogin">
        <div class="top"></div>
        <div class="right"></div>
        <div class="bot"></div>
        <div class="left"></div>
            <form action="" method="post">
            
            <h1 style="text-align: center;color: white;">Bổ sung thông tin</h1>
            <div class="inputBox">
                    <span></span>
                    <input type="text" name="username" placeholder="Họ tên người dùng" required="required">
                </div> <br>
                <div class="inputBox">
                    <span></span>
                    <input type="text" name="userphone" placeholder="Số điện thoại" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="text" name="address"  placeholder="Địa chỉ" required="required">
                </div> <br>
                <div class="links">
                    <a href="">Quay về trang giỏ hàng</a>
                    <a href="./sign-up.php">Đăng kí</a>
                </div> <br>
                <input type="submit" value="Bổ sung" class="bosung" name="bosung">
            </form>
    </div>
    <?php
     include('../pages/connectdb.php');
       session_start();
        $btn = filter_input(INPUT_POST,'bosung');
         $uid = $_GET['id'];
        if(!empty($btn) && $btn="Bổ sung"){
             $ten = filter_input(INPUT_POST,'username'); 
             $address = filter_input(INPUT_POST,'address'); 
             $sdt = filter_input(INPUT_POST,'userphone'); 
            // echo "gâu";
            //  $link = new mysqli('localhost','root','','dacs2_cosmetic');
            $query = "UPDATE account SET user_name='$ten',user_address='$address',user_phone='$sdt' where id_user='$uid'";
            $result = mysqli_query($link,$query) ;
            echo "<script> alert('Cập nhật thành công'); </script>";
        }
    ?>  
</body>
</html>