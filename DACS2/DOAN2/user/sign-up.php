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
            <form action="" method="post">
            
            <h1 style="text-align: center;color: white;">Đăng kí</h1>
                <div class="inputBox">
                    <span></span>
                    <input type="text" name="user" placeholder="Tài khoản" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="password" name="password"  placeholder="Mật khẩu" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="password" name="repassword"  placeholder="Nhập lại mật khẩu" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="text" name="email"  placeholder="Email" required="required">
                </div> <br>
                <div class="links">
                    <a href="">Quên mật khẩu?</a>
                    <a href="./login.php">Đăng nhập</a>
                </div> <br>
                <input type="submit" value="Đăng kí" class="sign-in" name="addbtn">
            </form>
    </div>
    <?php
       
        $add = filter_input(INPUT_POST,'addbtn');
        if(!empty($add) && $add="Đăng kí"){
            include '../pages/connectdb.php';
                $username = filter_input(INPUT_POST,'user'); 
                $password = filter_input(INPUT_POST,'password');
                $repassword = filter_input(INPUT_POST,'repassword');
                $email = filter_input(INPUT_POST,'email');
                $role = 1;

                
            // if(empty($username)|| empty($sid)|| empty($cid)|| empty($grade)){
            //     echo "<script> alert('Vui lòng nhập đủ thông tin'); </script>";
            // } else{
            //     $query = "INSERT INTO enrollmenttable VALUES('$erid','$sid','$cid','$grade')";
            //     mysqli_query($link,$query) or die("Thêm dữ liệu thất bại");
            // }
            if($password != $repassword){
                echo "<script> alert('Mật khẩu không trùng khớp'); </script>";
            }
            else {
               
               
                $query2 = "INSERT INTO account VALUES('','$username','$password','$email','','','','')";
                mysqli_query($link,$query2) or die("Thêm dữ liệu thất bại");
            }
        }
    
    ?>
</body>
</html>