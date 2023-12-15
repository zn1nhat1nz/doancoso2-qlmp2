<?php
// include('./connectdb.php');
   $query =  " SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC ";
//    $query1 =  "  SELECT * FROM product,tbl_danhmuc WHERE product.id_danhmuc=tbl_danhmuc.id_danhmuc AND product.id_danhmuc=$GET_[id]";
   $result = mysqli_query($link,$query);
?>
    <div class="box-container">
            <!-- <a href="../pages?iddanhmuc=2" class="box">
                <img src="../image/category1.png" alt="" width="200px" height="200px">
                <h1>Serum</h1>
            </a>

            <a href="../pages?iddanhmuc=3" class="box">
                <img src="../image/category2.png" alt="" width="200px" height="200px">
                <h1>Son</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category3.png" alt="" width="200px" height="200px">
                <h1>Chì</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category4.png" alt="" width="200px" height="200px">
                <h1>Nước hoa</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category5.png" alt="" width="200px" height="200px">
                <h1>Kem nền</h1>
            </a> -->
            <?php
               
                    while($row = mysqli_fetch_array($result)){
                      $iddanhmuc = $row['id_danhmuc'];
                             $ten = $row['tendanhmuc'];
                             $hinhanh = $row['hinhanhloai']; 
                    if(isset($_SESSION['iduser']))  {
            ?>
            
                <a href="../pages/pageSP.php?iduser=<?php  echo $_SESSION['iduser'];  ?>&id=<?php echo $iddanhmuc; ?>" class="box">
                <?php
                    } else{
                    ?>
                    <a href="../pages/pageSP.php?id=<?php echo $iddanhmuc; ?>" class="box">
                    <?php 
                    }
                    ?>
                <img src="../modules/quanlydanhmucsp/uploads/<?php echo $hinhanh; ?>" alt="" width="200px" height="200px">
                <h1><?php echo $ten ?></h1>
            </a>
            <?php
                }
            ?>
        </div>