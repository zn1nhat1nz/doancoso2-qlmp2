<link rel="stylesheet" href="">
<?php
    // include('../../pages/connectdb.php');
    $link = new mysqli('localhost','root','','dacs2_cosmetic');
    $query = "SELECT id_danhmuc,tendanhmuc FROM tbl_danhmuc" ;
    $result = mysqli_query($link,$query);
?>
<h3>Thêm sản phẩm</h3>
<table class="table table-hover" style="box-shadow: 2px 2px 2px pink, -2px -2px 2px black;">
    <form action="../../../../../web_dacs2/DACS2/DOAN2/modules/quanlysp/xuly.php" method="post" enctype="multipart/form-data">
        <tr >
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <th>Mã sản phẩm</th>
                <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <th>Giá sản phẩm</th>
                <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <th>Giá sản phẩm giảm giá</th>
                <td><input type="text" name="giaspgiam"></td>
        </tr>
        <tr>
            <th>Số lượng</th>
                <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <th>Hình ảnh</th>
                <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <th>Tóm tắt</th>
                <td><textarea name="tomtat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <th>Nội dung</th>
                <td><textarea name="noidung" id="" cols="30" rows="5"></textarea>></td>
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
           <th>Danh mục sản phẩm</th>
           <td>

                      
                    </select>
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
                                while($row = mysqli_fetch_array($result)){
                                 echo  $id =  $row['id_danhmuc']
                               ?>
                               <option value="<?php echo $id ?>"><?php echo $row['tendanhmuc'] ?></option>
                               <?php
                            }
                            ?>
                      
                    </select>
            </td> 
        </tr>
        <tr>
            <!-- <td colspan="5"> <input type="submit" value="Thêm danh mục" name="themdanhmuc"></td> -->
              <td colspan="5"><button type="submit" class="btn btn-success" name="themsanpham">Thêm</button></td>
        </tr>
    </form>
</table>