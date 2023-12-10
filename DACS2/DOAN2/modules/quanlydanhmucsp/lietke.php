
<h3>Danh sách danh mục</h3>
    <table style="width: 100%; box-shadow: 2px 2px 2px black, -2px -2px 2px pink;" border="1" class="table table-hover">
           <tr>
           <th style="text-align: center;">ID danh mục</th>
             <th style="text-align: center;">Tên danh mục</th>
            <th style="text-align: center;">Thứ tự</th>
            <th>Hình ảnh</th>
            <th></th>
           </tr> 
    <?php 
    // include('../../pages/connectdb.php');
    $query = "SELECT * FROM tbl_danhmuc ORDER BY thutu ";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
             $iddanhmuc = $row['id_danhmuc'];
             $tendanhmuc = $row['tendanhmuc'];
             $thutu = $row['thutu'];
             $hinhanh = $row['hinhanhloai'];
             echo "</tr>";
             echo "<tr>";
             echo "<td > $iddanhmuc </td>";
             echo "<td > $tendanhmuc </td>";
             echo "<td> $thutu </td>";
             echo '<td> <img src="../modules/quanlydanhmucsp/uploads/'.$hinhanh.'" width="100px"> </td>';
             echo "<td style='text-align:center';> <a href='./quanlydanhmucsp/xuly.php?iddanhmuc=$iddanhmuc' class='xoabtn'>Xóa</a>
                 <br></br>
                    <a href='?action=quanlydanhmucsp&query=sua&iddanhmuc=$iddanhmuc' class='suabtn'>Sửa</a> </td>";
             echo "</tr>";
             
        }
    }
  
?>     
    </table>
    <link rel="stylesheet" href="">