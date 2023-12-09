<?php
//    include('../../pages/connectdb.php');
    // echo '$_GET[idsanpham]';
     $query_edit = "SELECT * FROM product WHERE id_sp='$_GET[idsanpham]' LIMIT 1";
     $result = mysqli_query($link,$query_edit);
    //  if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_array($result)){
    //         $tendanhmuc = $row['tendanhmuc'];
    //          $thutu = $row['thutu'];
    //     }
    //} 
?>
<h3>Sửa  sản phẩm</h3>
<table class="table table-hover" style="box-shadow: 2px 2px 2px pink, -2px -2px 2px black;">

    <form action="../../../../../web_dacs2/DACS2/DOAN2/modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" method="post" enctype="multipart/form-data">
        <?php
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $idsp = $row['id_sp'];
                            $tensp = $row['ten_sp'];
                            $masp = $row['ma_sp'];
                            $giasp = $row['gia_sp'];
                            $giaspgiam = $row['gia_sp_giam'];
                            $hinhanh = $row['hinhanh'];
                            $soluong = $row['soluong'];
                            $tomtat = $row['tomtat'];
                            $noidung = $row['noidung'];
                            $tinhtrang = $row['tinhtrang'];
                            $loaisp = $row['id_danhmuc'];
                            
                        }
                    } 
        ?>
        <tr >
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tensp" value="<?php echo "$tensp"; ?>"></td>
        </tr>
        <tr>
            <th>Mã sản phẩm</th>
                <td><input type="text" name="masp" value="<?php echo "$masp"; ?>"></td>
        </tr>
        <tr>
            <th>Giá sản phẩm</th>
                <td><input type="text" name="giasp" value="<?php echo "$giasp"; ?>"></td>
        </tr>
        <tr>
            <th>Giá sản phẩm giảm giá</th>
                <td><input type="text" name="giaspgiam" value="<?php echo "$giaspgiam"; ?>"></td>
        </tr>
        <tr>
            <th>Số lượng</th>
                <td><input type="text" name="soluong" value="<?php echo "$soluong"; ?>"></td>
        </tr>
        <tr>
            <th>Hình ảnh</th>
                <td> 
                    <input type="file" name="hinhanhsp">
                    <img src="../modules/quanlysp/uploads/<?php echo $hinhanh; ?>" alt="" width="100px">
                 </td>
        </tr>
        <tr>
            <th>Tóm tắt</th>
                <td><textarea name="tomtat" id="" cols="30" rows="5"><?php echo "$tomtat"; ?></textarea></td>
        </tr>
        <tr>
            <th>Nội dung</th>
                <td><textarea name="noidung" id="" cols="30" rows="5"><?php echo "$tomtat"; ?></textarea>></td>
        </tr>
        <tr>
            <th>Tình trạng</th>
                <td>
                    <select name="tinhtrang" id="">
                        <option value="0">Ẩn</option>
                        <option value="1">Kích hoạt</option>
                    </select>
                </td>
        </tr>
        <tr>
           <th>Loại sản phẩm</th>
                    <td>
              <select name="danhmucsp" id="">
                      <!-- <option value="0">Nước hoa</option>
                      <option value="1">Chì kẻ mắt</option>
                      <option value="2">Serum</option>
                      <option value="3">Kem nền</option>
                      <option value="4">Son môi</option> -->
                      <?php 
                        $query_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $result = mysqli_query($link,$query_danhmuc);
                            // if(mysqli_num_rows($result)>0){
                                while($row_danhmuc = mysqli_fetch_array($result)){
                                   $iddanhmuc = $row_danhmuc['id_danhmuc'] ;
                                    if($loaisp==$iddanhmuc){
                                    
                               ?>
                               <option selected value="<?php echo $iddanhmuc ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                               <?php
                                    }else{
                                 ?>   
                                 <option  value="<?php echo $iddanhmuc ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                 <?php 
                                }
                            } 
                            ?>
                    </select>
            </td> 
        </tr>
        <tr>
            <!-- <td colspan="5"> <input type="submit" value="Thêm danh mục" name="themdanhmuc"></td> -->
              <td colspan="5"><button type="submit" class="btn btn-success" name="suasp">Sửa</button></td>
        </tr>
    </form>
</table>