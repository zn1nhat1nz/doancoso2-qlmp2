<div class="account">
<?php 
        //  echo $un;
          // $_SESSION['username'];
        if(isset($_SESSION['username']) && $_SESSION['username']){
            echo '<a href="" style="font-size:1rem; text-shadow: 2px 2px 4px red">Xin chào:</a>' . $_SESSION['username'];
            // echo '<br>';
            echo '<a href="../user/logout.php" ">Đăng xuất</a>';
           }else {
            echo '<a href="../user/login.php" style="font-size:2rem; text-shadow: 2px 2px 4px red">Đăng nhập</a>';
           }
        
        ?> 
    
</div>
<?php  
         $_SESSION['iduser'];
    ?>
    <a style="float: left;" href="../pages/?iduser=<?php echo $_SESSION['iduser'];  ?>">Về trang chủ</a>
