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
            <form action="login.php?do=login" method="post">
            
            <h1 style="text-align: center;color: white;">Đăng nhập</h1>
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
     include('../pages/connectdb.php');
       session_start();
        $btn = filter_input(INPUT_POST,'sign-in');
             $username = filter_input(INPUT_POST,'user'); 
             $password = filter_input(INPUT_POST,'password');
        if(!empty($btn) && $btn="Đăng nhập"){
             
            //  $link = new mysqli('localhost','root','','dacs2_cosmetic');
            $query = "SELECT*FROM account where useracc='$username'";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_array($result)){
                  $uid = $row['id_user'];
                 $uacc = $row['useracc'];
                //  $un2 = $row['Uname'];    
                 $up = $row['user_password'];
                 $un  = $row['user_name'];
                 $ue = $row['user_email'];
                 $uaddress = $row['user_address'];
                 $uimg = $row['user_image'];
                 $ur = $row['role'];
                 
              }
            } 
            if($username== $uacc && $password==$up ){
                  $_SESSION['username'] = $uacc;
                  $_SESSION['name'] = $un;
                  $_SESSION['iduser'] = $uid;
                  $_SESSION['role'] = $ur;
                  if($ur==0){
                    echo "<script> alert('Tài khoản đã bị cấm'); </script>";
                 } 
                    if($ur==1){
                        header("location:../pages?iduser=$uid");
                     }     
                     if($ur==2){
                        header("location:../modules/index1.php");
                     }  
            } else{
                echo "<script> alert('Đăng nhập thất bại. Vui lòng kiểm tra tài khoản hoặc mật khẩu'); </script>";
            }
            // else die("Thất bại");
        }
    ?> 
</body>
</html>