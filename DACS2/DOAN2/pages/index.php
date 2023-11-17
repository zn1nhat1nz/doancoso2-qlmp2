<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../asset/fontawesome-free-6.4.2-web/css/all.min.css">
</head>
<body>
    
    <section id="header" class="header">
        <div class="spinner"></div>
        <div class="logo">
            <i class="fa-solid fa-wand-magic-sparkles"> 
                <!-- <span>
                <canvas id="myCanvas" width="200" height="40"></canvas>
            </span> -->
            Phong Minh Comectics
          
        </i>
            <!--  -->
           
        </div>
        
        <nav class="navbar">
            
                    <a href="#" class="navbar-link" data-nav-link>Trang chủ</a>
                    <a href="#" class="navbar-link" data-nav-link>Cửa hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Mẫu hàng</a>
                    <a href="#" class="navbar-link" data-nav-link>Cộng tác</a>

        </nav>
        <div class="icons">
            <div class="fa-solid fa-bars" id="menu-btn"></div>
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="count">0</span>
        </div>
        <div class="xoay"></div>
    </section>
    <section class="home" id="home">
        <div class="slide active" style="background: url(../image/home.jpg) no-repeat;background-size: cover; background-position: center;">
                <div class="content">
                    <span>CONTENT1</span>
                    <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                        sajfgsdgfjhgasfgasjhgajhsf <br>
                        sậhsfbajhsbfjasbfjasbfj
                    </h3>
                </div>
        </div>
        <div class="slide" style="background: url(../image/banner2.png) no-repeat;background-size: cover; background-position: center;">
            <div class="content">
                <span>CONTENT2</span>
                <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                    sajfgsdgfjhgasfgasjhgajhsf <br>
                    sậhsfbajhsbfjasbfjasbfj
                </h3>
            </div>
     </div>
     <div class="slide" style="background: url(../image/banner3.jpg) no-repeat; background-size: cover; background-position: center; ">
         <div class="content">
                <span>CONTENT3</span>
                 <h3>ákdnadasjfjbasdjbgadhjgfjhagfgadshfbjd <br>
                sajfgsdgfjhgasfgasjhgajhsf <br>
                sậhsfbajhsbfjasbfjasbfj
                </h3>
            </div>
        </div>
        <div class="fa-solid fa-circle-chevron-left" id="pre-slide" onclick="prev()"></div>
        <div class="fa-solid fa-circle-chevron-right" id="next-slide" onclick="next()"></div>
    </section>

    <section class="category">
        <h1>Phân loại</h1>
        <div class="box-container">
            <a href="#" class="box">
                <img src="../image/category1.png" alt="" width="200px" height="200px">
                <h1>Serum</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category2.png" alt="" width="200px" height="200px">
                <h1>Son</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category3.png" alt="" width="200px" height="200px">
                <h1>Chì</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category4.png" alt="" width="200px" height="200px">
                <h1>Nước hoa</h1>
            </a>

            <a href="#" class="box">
                <img src="../image/category5.png" alt="" width="200px" height="200px">
                <h1>Kem nền</h1>
            </a>
        </div>
    </section>
    <section class="shop" id="shop">
        <h1>Sản phẩm</h1>
        <div class="box-container">
            <div class="box">
               <div class="product">
                
                <a href="#shop" id="">
                    <img src="../image/product1.jpg" alt="" width="300px" height="300px">
                </a>
                <button class="fa-solid fa-cart-plus"></button>
               </div>
                <div class="content">
                    <h3>Son môi Shiseido</h3>
                    <div class="price"><span>150.000</span>VNĐ</div>
                </div>
            </div>
            <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product2.jpg" alt="">
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum dưỡng ẩm</h3>
                     <div class="price"><span>200.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 <a href="#shop" id="">
                     <img src="../image/product3.png" alt="">
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Chì kẻ mắt</h3>
                     <div class="price"><span>200.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product4.jpg" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Nước hoa Charme Beauty</h3>
                     <div class="price"><span>800.000</span>VNĐ</div>
                 </div>
             </div>
             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product5.jpg" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Nước Hoa Chanel Chance Eau Tendre</h3>
                     <div class="price"><span>389.000</span>VNĐ</div>
                 </div>
             </div>

             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product6.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Son Kem Cathy Doll Lip & Cheek Nude Matte Tint</h3>
                     <div class="price"><span>139.000</span>VNĐ</div>
                 </div>
             </div>

             <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product7.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum Thảo Dược Kiehl's Vital</h3>
                     <div class="price"><span>750.000 </span>VNĐ</div>
                 </div>
             </div>

             <!-- <div class="box">
                <div class="product">
                 
                 <a href="#shop" id="">
                     <img src="../image/product7.png" alt="" >
                 </a>
                 <button class="fa-solid fa-cart-plus"></button>
                </div>
                 <div class="content">
                     <h3>Serum Thảo Dược Kiehl's Vital</h3>
                     <div class="price"><span>1.750.000</span>VNĐ</div>
                 </div>
             </div> -->
        </div>


    </section>

    <section class="cart">
        <form action="" method="post">
        <i class="fa-solid fa-xmark" style="cursor: pointer"></i>
            <h2>Giỏ hàng</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <td><img src="../image/product1.jpg" alt="" style="width:70px; height:70px;">
                    Son môi ádsafsadfsd</td>
                    <td><p><span>320.000</span><sup>đ</sup></p></td>
                    <td><input type="number" value="1" min="0" style="width:30px; outline: none;text-align: center; border: 0.2rem solid black"> </td>
                    <td style="cursor: pointer;">Xóa</td> -->
                </tbody>
            </table>
            <div class="total-price" style="text-align: right;">
                <p style="font-weight: bold;">Tổng tiền:<span>0</span><sup></sup></p>
            </div>
           <div class="box">
           <div class="top"></div>
           <button>Thanh toán</button>
           <div class="bot"></div>
                <div class="right"></div>
                    
                    <div class="left"></div>
            
            
           </div>
        </form>
    </section>

    <section class="message" style="background: url(../image/banner.jpg) no-repeat;">
        <div class="content">
            <span>Ưu đãi <span>đặc biệt</span></span>
        <h3>Giảm giá đến 30%</h3>
        <p>Chỉ riêng mùa giáng sinh này, ưu đãi cực sốc.</p>
        <a href="#" class="btn">Mua ngay</a>
        </div>
    </section>
    <script src="../script/script.js"></script>
</body>
</html>