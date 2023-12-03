

    

<h3>Danh sách danh mục</h3>
    <table style="width: 100%; box-shadow: 2px 2px 2px black, -2px -2px 2px pink;" border="1" class="table table-hover">
           <tr>
           <th style="text-align: center;">ID danh mục</th>
             <th style="text-align: center;">Tên danh mục</th>
            <th style="text-align: center;">Thứ tự</th>
            <th></th>
           </tr> 
    <?php 
    // include('../../pages/connectdb.php');
    $query = "SELECT * FROM tbl_danhmuc ORDER BY thutu ";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
             $id_danhmuc = $row['id_danhmuc'];
             $tendanhmuc = $row['tendanhmuc'];
             $thutu = $row['thutu'];
             echo "</tr>";
             echo "<tr>";
             echo "<td > $id_danhmuc </td>";
             echo "<td > $tendanhmuc </td>";
             echo "<td> $thutu </td>";
             echo "<td style='text-align:center';> <a href='?action=quanlidanhmucsp&query=xoa' class='xoabtn'>Xóa</a> ||
                    <a href='?action=quanlidanhmucsp&query=sua' class='suabtn'>Sửa</a> </td>";
             echo "</tr>";
        }
    }
  
?>
       
    </table>