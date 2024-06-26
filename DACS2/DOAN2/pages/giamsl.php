<?php
session_start();
include('./connectdb.php');
$uid = $_GET['iduser'];
 echo $id = $_GET['id'];
    $query = "SELECT *FROM cart where id_sp=$id";
              $result = mysqli_query($link,$query);
           if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){  
              $sl = $row['p_quantity'];  
              $query3 = "UPDATE cart SET p_quantity=$sl-1 WHERE id_sp=$id";
              $result3 = mysqli_query($link,$query3);         
             }
           } 
           else{           
           }
            header('location:./ttgiohang.php?iduser='.$uid.'');
?>

  
            
   