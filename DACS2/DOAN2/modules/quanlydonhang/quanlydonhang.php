<h1 style="font-size: 4rem;">Đơn hàng của bạn:</h1>

<table class="table" border="1" >
 <thead>
   <tr>
     <th scope="col">Tên sản phẩm</th>
     <th scope="col">Hình ảnh sản phẩm</th>
     <th scope="col">Số lượng</th>
     <th>Thành tiền</th>
     <th>Trạng thái</th>
   </tr>
 </thead>
 <tbody?>
       <form action="" method="post">
       <?php
    $query = "SELECT *FROM wait";
    $result = mysqli_query($link,$query);
   if(mysqli_num_rows($result)>0){
   while($row = mysqli_fetch_array($result)){
     // $idc = $row['id_cart'];
    $idsp = $row['id_sp'];
    $tensp = $row['p_name'];
    $hinhanh = $row['p_image'];
    $gia = $row['p_total'];
    $sl = $row['p_quantity'];
    $idsp = $row['id_sp'];
    $iduser = $row['id_user'];
    $status = $row['statusz'];
    echo "<tr>";
    echo "<td>$tensp</td>";
    echo '<td style="text-align: center;"> <img src="../modules/quanlydanhmucsp/uploads/'.$hinhanh.'" width="100px"> </td>';
    echo '<td style="text-align: center;">   
               <span>'.$sl.'</span>
         </td>';
    $total = $gia*$sl;
    echo '<td style="text-align: center;">'.number_format($total,0,',',',').'</td>';
    if($status==0){
     $st = 'Đang chờ xác nhận';
      }
   echo '<td style="text-align: center;" >
       '.$st.'
   </td>';
   echo '<td style="text-align: center;"> <a href="./delete.php?idsp='.$idsp.'" class="xoabtn">Xóa</a> <br></br>
                <a href="" class="ttbtn">Xác nhận đơn</a> 
                 </td>';
   }
 }else{
   echo "Đơn hàng rỗng";
 }