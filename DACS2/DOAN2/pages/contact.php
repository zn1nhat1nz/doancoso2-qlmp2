<?php 
//    include 'connectdb.php'
        session_start();
        // include '../user/login.php';
        include('./connectdb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phong Minh Cosmectics</title>
   
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-6.4.2-web/css/all.min.css">

    <style>
        
        .contact {
  padding: 50px 0; /* Giảm khoảng cách giữa các phần tử trong section */
  text-align: center;
}

.row {
  display: flex;
  flex-wrap: wrap; /* Cho phép các phần tử con xuống dòng khi không đủ không gian */
  justify-content: space-between;
  align-items: center;
}

form {
    flex: 0 0 48%;
  margin-bottom: 20px;
  margin-right: 20px; /* Dịch sang bên phải */
  text-align: left;
  border: 2px solid #ddd; /* Thêm viền ngoài */
  border-radius: 8px; /* Góc bo tròn */
  padding: 20px; /* Tăng khoảng cách giữa viền và nội dung form */
  box-sizing: border-box;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
}

.box {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px; /* Giảm khoảng cách giữa các input */
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

textarea {
  resize: none;
}

.btn {
  background-color: #DC143C;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.images {
  flex: 0 0 48%;
}

.images img {
  width: 100%;
  border-radius: 5px;
}


    </style>
    
</head>
<body>
    
    <section id="header" class="header">
      <?php include('./header.php') ?>
    </section>

    <section class="contact">
        <h1 class="heading">
            <span style="color:#DC143C">Liên Hệ Chúng Tôi </span>
            
        </h1>
        <div class="row">
            <form action="">
                <input type="text" placeholder="Tên" class="box">
                <input type="email" placeholder="Email" class="box">
                <input type="number" placeholder="Số điện thoại" class="box">
                <textarea class="box"  cols="30" rows="10" placeholder=""Lời nhắn"></textarea>
                <input type="submit" value="Gửi phản hồi" class="btn">
            </form>
            <div class="images">
                <img src="../image/contact.jpg" alt="">
            </div>
        </div>



    </section>
   

    

    <section class="footer">
        <?php include('./banner.php'); ?>
    </section>
    <script src="../script/script.js"></script>
</body>
</html>