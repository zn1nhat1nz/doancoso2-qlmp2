
<h3>Danh sách sản phẩm</h3>
    <table style="width: 100%; box-shadow: 2px 2px 2px black, -2px -2px 2px pink;" border="1" class="table table-hover">
           <tr>
                <th style="text-align: center;">ID sản phẩm</th>
                <th style="text-align: center;">Tên sản phẩm</th>
                <th style="text-align: center;">Mã sản phẩm</th>
                <th style="text-align: center;">Giá sản phẩm</th>
                <th style="text-align: center;">Giá sản phẩm giảm</th>
                <th style="text-align: center;">Số lượng</th>
                <th style="text-align: center;">Hình ảnh</th>
                <th style="text-align: center;">Tóm tắt</th>
                <th style="text-align: center;">Nội dung</th>
                <th style="text-align: center;">Loại sản phẩm</th>
                <th style="text-align: center;">Trạng thái</th>
                <th></th>
           </tr> 
    <?php 
   
    $query = "SELECT * FROM product ";

    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $idsp = $row['id_sp'];
            $tensp = $row['ten_sp'];
            $masp = $row['ma_sp'];
            $giasp = $row['gia_sp'];
            $giaspgiam = $row['gia_sp_giam'];
            $soluong = $row['soluong'];
            $hinhanh = $row['hinhanh'];
            $tomtat = $row['tomtat'];
            $noidung = $row['noidung'];
            $tinhtrang = "";
           if($row['tinhtrang']==1){
             $tinhtrang = "Kích hoạt";
           } else {$tinhtrang = "Ẩn";}
            // $loaisp = $row['danhmucsp'];
             echo "</tr>";
             echo "<tr>";
             echo "<td>$idsp</td>";
             echo "<td> $tensp </td>";
             echo "<td > $masp </td>";
             echo "<td > $giasp </td>";
             echo "<td > $giaspgiam </td>";
             echo "<td > $soluong </td>";
             echo '<td> <img src="../modules/quanlysp/uploads/'.$row['hinhanh'].'" width="100px"> </td>';
             echo "<td > $tomtat </td>";
             echo "<td> $noidung </td>"; 
             echo "<td >    </td>";
             echo "<td> $tinhtrang </td>";
            //  echo "<td>$idsp</td>";
             echo "<td style='text-align:center';> <a href='./quanlysp/xuly.php?idsanpham=$idsp'; class='xoabtn'>Xóa</a>||
                    <a href='?action=quanlysp&query=sua&idsanpham=$idsp' class='suabtn'>Sửa</a> </td>";
             echo "</tr>";
             
        }
    }
  
?>     
    </table>
    <!-- <link rel="stylesheet" href="./uploads/"> -->