<!-- <div class="clear"></div> -->
<div class="main">
    <?php 
            if(isset($_GET['action']) && isset($_GET['query'])){
                 $chon = $_GET['action'];
                 $query = $_GET['query'];
            } else{
                $chon ='';
                $query='';
            }
            if($chon =='quanlydanhmucsp' && $query=='them'){
                include("./quanlydanhmucsp/add.php");
                include("./quanlydanhmucsp/lietke.php");
            }
            else if($chon =='quanlydanhmucsp' && $query=='sua'){
                include("./quanlydanhmucsp/edit.php");
            }
            if($chon =='quanlysp' && $query=='them'){
                include("./quanlysp/add.php");
                include("./quanlysp/lietke.php");
            }
            else if($chon =='quanlysp' && $query=='sua'){
                include("./quanlysp/edit.php");
            }
            else {
                include("./dashboard.php");
            }
    ?>
</div>
