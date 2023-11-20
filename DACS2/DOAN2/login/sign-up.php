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
            
            <h1 style="text-align: center;">Đăng kí</h1>
                <div class="inputBox">
                    <span></span>
                    <input type="text" name="user" placeholder="Tài khoản" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="text" name="password"  placeholder="Mật khẩu" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="text" name="password"  placeholder="Nhập lại mật khẩu" required="required">
                </div> <br>
                <div class="inputBox">
                    <!-- <span>Mật khẩu</span> -->
                    <input type="text" name="password"  placeholder="Email" required="required">
                </div> <br>
                <div class="links">
                    <a href="">Quên mật khẩu?</a>
                    <a href="./login.php">Đăng nhập</a>
                </div> <br>
                <input type="submit" value="Đăng kí" class="sign-in">
            </form>
    </div>
    
</body>
</html>