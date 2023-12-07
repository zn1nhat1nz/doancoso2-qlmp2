<?php
//    include('../../pages/connectdb.php');
    
     $query_edit = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
     $result = mysqli_query($link,$query_edit);
    //  if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_array($result)){
    //         $tendanhmuc = $row['tendanhmuc'];
    //          $thutu = $row['thutu'];
    //     }
    //} 
?>
<h3>Sửa danh mục sản phẩm</h3>
<table class="table table-hover" style="box-shadow: 2px 2px 2px pink, -2px -2px 2px black;">

    <form action="../../../../../web_dacs2/DACS2/DOAN2/modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post">
        <?php
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $tensp = $row['tensp'];
                            $masp = $row['masp'];
                            $giasp = $row['giasp'];
                            $giaspgiam = $row['giaspgiam'];
                            $soluong = $row['soluong'];
                            $tomtat = $row['tomtat'];
                            $noidung = $row['noidung'];
                            $tinhtrang = $row['tinhtrang'];
                            $loaisp = $row['danhmucsp'];
                            
                        }
                    } 
        ?>
        <tr >
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tendanhmuc" value="<?php echo $tendanhmuc ?>"></td>
          
        </tr>
        <tr>
            <th>Thứ tự</th>
                <td><input type="text" name="thutu" value="<?php echo $thutu ?>"></td>
              
        </tr>
        <tr>
            <!-- <td colspan="5"> <input type="submit" value="Thêm danh mục" name="themdanhmuc"></td> -->
              <td colspan="5"><button type="submit" class="btn btn-success" name="suadanhmuc">Sửa</button></td>
        </tr>
    </form>
</table>