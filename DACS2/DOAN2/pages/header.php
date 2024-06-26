
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
       
          <?php
                if(isset($_SESSION['role'])){
                  $ur =  $_SESSION['role'];
                }
                if(isset($_SESSION['username'])){
                     $_SESSION['name'];
          ?>
          
                    <a href="../pages?iduser=<?php  echo $_SESSION['iduser']; ?>" class="navbar-link" data-nav-link>Trang chủ</a>
              <?php 
                } else {
              ?>  
                    <a href="../pages/" class="navbar-link" data-nav-link>Trang chủ</a> 
               <?php 
                } 
              ?>   
                    <a href="#shop" class="navbar-link" data-nav-link>Sản phẩm</a>
                    <a href="../pages/contact.php" class="navbar-link" data-nav-link>Liên hệ</a>
                    <a href="../pages/cooperative.php" class="navbar-link" data-nav-link>Cộng tác</a>
                    
                    <?php
                            if(isset($_SESSION['role'])){
                                $ur =  $_SESSION['role'];
                              
                                if($ur==2){
                                    ?>
                                        <a href="../modules/index1.php">Quản trị</a>
                                <?php
                                        }  
                        }
                            ?>
                    
                    <form action="timkiem.php" method="GET">
                       <input type="text" placeholder="Tìm kiếm..." name="tukhoa" required>
                       <input type="submit" name="Timkiem" value="Tìm kiếm"></input>
                    </form> 
        </nav>
        <div class="icons">
            <div class="fa-solid fa-bars" id="menu-btn"></div>
            <a class="fa-solid fa-cart-shopping"></a>
            <!-- <span class="count">0</span> -->
        </div>
        <div class="xoay"></div>
        <?php 
        //  echo $un;
          
           if(isset($_SESSION['username']) && $_SESSION['username']){

            ?>
            <!-- echo '<a href="../user/user_info/info.php  " style="color:red">Xin chào:</a>' . $_SESSION['name'];
            echo '<a href="../user/logout.php">Đăng xuất</a>'; -->

            <a href="../user/user_info/info.php?iduser=<?php echo $_SESSION['iduser']; ?> " style="color:red">Xin chào:</a> <?php echo $_SESSION['name'] ?>
           <a href="../user/logout.php">Đăng xuất</a>

            <?php
           }else {
            echo '<a href="../user/login.php" style="font-size:2rem; text-shadow: 2px 2px 4px red">Đăng nhập</a>';
           }
        ?>