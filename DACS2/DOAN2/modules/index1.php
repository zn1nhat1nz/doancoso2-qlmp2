<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang ADMIN</title>
   
    <link rel="stylesheet" href="npm i bootstrap@5.3.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background: url(../image/bg_admincp.jpg); background-size: cover;">
    <h3>Welcome to admincp</h3>
   <div class="account">
   <?php 
        //  echo $un;
        // echo $_SESSION['username'];
        if(isset($_SESSION['username']) && $_SESSION['username']){
            echo '<a href="" style="font-size:1rem; text-shadow: 2px 2px 4px red">Xin chào:</a>' . $_SESSION['username'];
            // echo '<br>';
            echo '<a href="../user/logout.php">Đăng xuất</a>';
           }else {
            echo '<a href="../user/login.php" style="font-size:2rem; text-shadow: 2px 2px 4px red">Đăng nhập</a>';
           }
        
        ?>
   </div>
   <br><br>
   <div class="wraper">
    <?php
            include '../pages/connectdb.php';
            include './header.php';
            include './menu.php'; echo '<br>';
            include './main.php'; echo '<br>';
            include './footer.php';
        ?>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
