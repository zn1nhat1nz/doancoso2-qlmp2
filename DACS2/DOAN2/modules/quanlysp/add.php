<h3>Thêm sản phẩm</h3>
<table class="table table-hover" style="box-shadow: 2px 2px 2px pink, -2px -2px 2px black;">
    <form action="../../../../../web_dacs2/DACS2/DOAN2/modules/quanlydanhmucsp/xuly.php" method="post" enctype="multipart/form-data">
        <tr >
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
                <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
                <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm giảm giá</td>
                <td><input type="text" name="giaspgiam"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
                <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
                <td><textarea name="tomtat" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
                <td><textarea name="noidung" id="" cols="30" rows="5"></textarea>></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang" id="">
                        <option value="0">Ẩn</option>
                        <option value="1">Kích hoạt</option>
                    </select>
                </td>
        </tr>
        <tr>
           <td>Danh mục sản phẩm</td>
           <td>
              <select name="danhmucsp" id="">
                      <option value="0">Nước hoa</option>
                      <option value="1">Chì kẻ mắt</option>
                      <option value="2">Serum</option>
                      <option value="3">Kem nền</option><option value="0">Ẩn</option>
                      <option value="4">Son môi</option>
              </select>
            </td> 
        </tr>
        <tr>
            <!-- <td colspan="5"> <input type="submit" value="Thêm danh mục" name="themdanhmuc"></td> -->
              <td colspan="5"><button type="submit" class="btn btn-success" name="themsanpham">Thêm</button></td>
        </tr>
    </form>
</table>