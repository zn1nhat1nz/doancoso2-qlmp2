<!-- <div class="clear"></div> -->
<div class="main">
    <?php 
        
            if(isset($_GET['action'])){
                 $chon = $_GET['action'];
            } else{
                $chon ='';
            }
            if($chon =='quanlidanhmucsp'){
                include("./quanlydanhmucsp/add.php");
                include("./quanlydanhmucsp/lietke.php");

            }
            else {
                include("./dashboard.php");
            }
    ?>
</div>
