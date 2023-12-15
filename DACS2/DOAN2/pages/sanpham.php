<?php
        
     $query =  " SELECT * FROM product  ";
     //    $query1 =  "  SELECT * FROM product,tbl_danhmuc WHERE product.id_danhmuc=tbl_danhmuc.id_danhmuc AND product.id_danhmuc=$GET_[id]";
        $result = mysqli_query($link,$query);
        // while($row = mysqli_fetch_array($result)){
        //     echo  $tensp = $row['ten_sp'];
        // }
      
?>
<div class="box-container">
    <?php 
      if(isset($_SESSION['iduser'])){
       $uid = $_SESSION['iduser'];;
      }
          while($row = mysqli_fetch_array($result)){
            $tensp = $row['ten_sp'];
            $hinhanh = $row['hinhanh'];
            $gia = $row['gia_sp'];
            $noidung = $row['noidung']; 
            $idsp = $row['id_sp'];
    ?>
            
           <!-- <form action="" method="post"> -->
           <div class="box">
               <div class="product">
               <?php 
                if(isset($_SESSION['iduser'])){
                    $uid = $_SESSION['iduser'];
                    ?>
              
                <a href="./chitietsp.php?iduser=<?php echo $uid; ?>&idsp=<?php echo $idsp; ?>" id="">
                     <?php      
                        } else {
                    ?>
                        <a href="./chitietsp.php?&idsp=<?php echo $idsp; ?>" id="">
                    <?php
                         }
                     ?>
                    <img src="../modules/quanlysp/uploads/<?php echo $hinhanh ?>" alt="" width="300px" height="300px">
                </a>
                <!-- <button class="fa-solid fa-cart-plus"></button> -->
               </div>
                <div class="content">
                     <h3><?php echo $tensp ?></h3>
                     <!-- <h4><?php echo $idsp ?></h4> -->
                    <div class="price"><span><?php echo $gia ?></span>VNĐ</div>
                </div>
            </div>
           <!-- </form> -->
            
         <?php
                }
          ?>   
            <!-- <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product2.jpg" alt="">
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum dưỡng ẩm</h3>
                     <div class="price"><span>200.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 <a href="#shop" id="">
                     <img src="../image/product3.png" alt="">
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Chì kẻ mắt</h3>
                     <div class="price"><span>200.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product4.jpg" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Nước hoa Charme Beauty</h3>
                     <div class="price"><span>800.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product5.jpg" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Nước Hoa Chanel Chance Eau Tendre</h3>
                     <div class="price"><span>389.000</span>VNĐ</div>
                 </div>
             </div>

             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product6.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Son Kem Cathy Doll Lip & Cheek Nude Matte Tint</h3>
                     <div class="price"><span>139.000</span>VNĐ</div>
                 </div>
             </div>

             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product7.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum Thảo Dược Kiehl's Vital</h3>
                     <div class="price"><span>750.000 </span>VNĐ</div>
                 </div>
             </div> -->

             <!-- <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product7.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum Thảo Dược Kiehl's Vital</h3>
                     <div class="price"><span>1.750.000</span>VNĐ</div>
                 </div>
             </div> -->
        </div>
