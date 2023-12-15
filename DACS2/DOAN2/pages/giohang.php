<?php

     $thanhtoan = filter_input(INPUT_POST,'thanhtoan');
    if(isset($thanhtoan)){
        echo $_SESSION['username'];
        if(isset($_SESSION['username']) && $_SESSION['username']){
            echo "hí";
           }else {
                // header('location:../user/login.php');
            // echo 'gâu';
           }
    }
?>
<!-- <link rel="stylesheet" href="../user/login.php"> -->