<?
   include '../pages/connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="boxLogin">
        <div class="top"></div>
        <div class="right"></div>
        <div class="bot"></div>
        <div class="left"></div>
            <form action="<?php echo $_SERVER['PHP_SEFL'];?>" method="post">
            
            <h1 style="text-align: center;">Đăng nhập</h1>
                <div class="inputBox">
                    <span></span>
                    <input type="text" name="user" placeholder="Tài khoản" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="password" name="password"  placeholder="Mật khẩu" required="required">
                </div> <br>
                <div class="links">
                    <a href="">Quên mật khẩu?</a>
                    <a href="./sign-up.php">Đăng kí</a>
                </div> <br>
                <input type="submit" value="Đăng nhập" class="sign-in" name="sign-in">
            </form>
    </div>
     <?php
        $btn = filter_input(INPUT_POST,'sign-in');
        if(!empty($btn) && $btn="Đăng nhập"){
             $username = filter_input(INPUT_POST,'user'); 
             $password = filter_input(INPUT_POST,'password');
             $link = new mysqli('localhost','root','','dacs2_cosmetic');
            $query = "SELECT*FROM accounttb";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_array($result)){
                 $uid = $row['user_id'];
                 $un  = $row['user_name'];
                 $up = $row['user_password'];
                 $ue = $row['user_email'];
              }
            } 
            if($username== $un && $password==$up ){
                // echo "Đăng nhập thành công";
            }
            // else die("Thất bại");
        }
    ?> 
</body>
</html>