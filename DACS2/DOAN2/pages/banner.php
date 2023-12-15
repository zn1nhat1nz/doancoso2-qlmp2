<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- banner -->
<div class="banner">
  <img class="mySlides" src="../image/qc1.jpg" >
  <img class="mySlides" src="../image/qc2.jpg" >
  <img class="mySlides" src="../image/qc3.jpg" >
  <img class="mySlides" src="../image/qc4.jpg" >
</div>
<!-- services -->
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <a href="" class="item_service">
        <div>
          <img src="../image/thanhtoankhinhanhang.png" alt="Service Image">
        </div>
        <div>
          Thanh toán <br> khi nhận hàng
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <a href="" class="item_service">
        <div>
          <img src="../image/giaohangnhanh.png" alt="Service Image">
        </div>
        <div>
          Giao hàng nhanh<br> miễn phí 2h
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <a href="" class="item_service">
        <div>
          <img src="../image/doitrahang.png" alt="Service Image">
        </div>
        <div>
          14 ngày đổi trả <br> miễn phí
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <a href="" class="item_service">
        <div>
          <img src="../image/thuonghieu.png" alt="Service Image">
        </div>
        <div>
          Thương hiệu uy tín <br> toàn cầu
        </div>
      </a>
    </div>
  </div>
</div>
<div class="wrapper-footer">
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>MỤC LỤC</h4>
        <a href="">Trang Chủ</a>
        <a href="">Sản Phẩm</a>
        <a href="">Liên Hệ</a>
        <a href="">Hợp Tác</a>
        <a href="">Đăng kí</a>
      </div>
      <div class="col-md-4">
        <h4>HỖ TRỢ</h4>
        <a href="">Mua Hàng</a>
        <a href="">Thanh Toán</a>
        <a href="">Trả Hàng & Hoàn Tiền</a>
        <a href="">Chăm sóc khách hàng</a>
        
      </div>
      <div class="col-md-4">
        <h4>THÔNG TIN LIÊN HỆ</h4>
        <a href="">012345678</a>
        <a href="">phongminh@gmail.com</a>
        <a href="">154 Trần Đại Nghĩa, Ngũ Hành Sơn , Đà Nẵng</a>
        <div class="social">
            <li class="item-social">
                <img src="../image/facebook.png" alt="">
            </li>
            <li class="item-social">
                <img src="../image/instagram.png" alt="">
            </li>
            <li class="item-social">
                <img src="../image/tiktok.png" alt="">
            </li>
        </div>

      </div>
    </div>
  </div>
  <div class="credit">
    "@2023"<span>Phong Minh Cosmestic</span> "| Hân Hạnh Phục Vụ Bạn."
    
  </div>

</div>


<!-- ảnh tự động chuyển của banner -->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!-- css chung -->
<style>
.mySlides {
    display:none;}
    
.banner{
    background: #E6E6FA;
    border: 4px double green;
    width:100%;
    height: 200px;
    overflow: hidden;
}
div.banner img {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
    display: block; 
    margin: 0;
}

/* Kiểu chung cho container và row */
.container {
  width: 100%; /* Đặt chiều rộng tối đa của container */
  margin: 0 auto; /* Canh giữa container */
  background-color: white;
  padding-top: 10px;
}

.row {
  display: flex; /* Sử dụng flexbox để các cột xếp hàng ngang */
  flex-wrap: wrap; /* Cho phép các cột xếp hàng ngang khi không đủ không gian */}
  

/* Kiểu cho cột, có thể điều chỉnh kích thước cột tùy ý */
.col-lg-3,
.col-md-6,
.col-sm-12 {
  flex: 0 0 calc(50% - 20px); /* 50% chiều rộng của mỗi cột, với khoảng cách 10px giữa các cột */
  max-width: 200px;
  max-height:200px;
  margin:auto;
 
}

/* Kiểu cho hình ảnh bên trong .item_service */
.item_service img {
    width: 100%;
    height: 100%; 
    object-fit: cover; 
    display: block;  /* Duy trì tỷ lệ khung hình tự động */
    margin :0 auto;
    
}

/* Kiểu cho nội dung bên trong .item_service */
.item_service > div {
  text-align: center; /* Căn giữa nội dung */
  padding: 10px; /* Khoảng cách nội dung và viền của thẻ div */
  background-color:  white; /* Màu nền của thẻ div */
}

/* Kiểu cho nội dung văn bản trong .item_service */
.item_service div:nth-child(2) {
  margin-top: 5px; /* Khoảng cách giữa hình ảnh và văn bản */
}
.item_service > div {
  font-size: 16px; /* Đặt kích thước chữ */
  color:rgb(249, 130, 150); /* Đặt màu chữ thành màu hồng */
}
.item_service img {
  width: 100px; /* Đặt kích thước chiều rộng tuyệt đối của ảnh */
  height: auto; /* Duy trì tỷ lệ khung hình tự động */
}


.wrapper-footer {
  background-color: #f8f9fa; /* Màu nền cho footer */
  padding: 20px 0; /* Khoảng cách giữa nội dung và viền của footer */
  text-align: center; /* Căn giữa nội dung trong footer */
}

.container {
  max-width: 1200px; /* Đặt chiều rộng tối đa cho container */
  margin: 0 auto; /* Canh giữa container */
}

.row {
  display: flex; /* Sử dụng flexbox để các cột xếp hàng ngang */
  flex-wrap: wrap; /* Cho phép các cột xếp hàng ngang khi không đủ không gian */
  justify-content: space-between; /* Các cột sẽ căn giữa và căn cách nhau */
}

.col-md-4 {
  flex: 0 0 calc(33.33% - 20px); /* 33.33% chiều rộng của mỗi cột, với khoảng cách 10px giữa các cột */
  margin: 10px; /* Khoảng cách giữa các cột */
  
}

/* Kiểu cho nội dung trong mỗi cột */
.col-md-4 h4 {
  margin-bottom: 15px; /* Khoảng cách giữa tiêu đề và nội dung */
  color: #ff69b4; /* Đặt màu hồng cho tiêu đề */
  margin-bottom: 15px; /* Khoảng cách giữa tiêu đề và nội dung */
  font-size: 20px; /* Đặt kích thước chữ cho tiêu đề */
}

.col-md-4 a {
  display: block; /* Hiển thị mỗi đường liên kết trên một dòng */
  color: black; /* Màu chữ cho đường liên kết */
  text-decoration: none; /* Loại bỏ gạch chân dưới của đường liên kết */
  margin-bottom: 5px; /* Khoảng cách giữa các đường liên kết */
  font-size: 16px; /* Đặt kích thước chữ cho đường liên kết */
}

.col-md-4 a:hover {
  color: pink; /* Màu chữ khi di chuột qua đường liên kết */
}

.social {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 15px; /* Khoảng cách giữa thông tin liên hệ và social icons */
}

.item-social {
  margin-right: 10px;
}
.item-social img {
  width: 30px; /* Đặt chiều rộng của hình ảnh */
  height: 30px; /* Đặt chiều cao của hình ảnh */
}

.item-social:last-child {
  margin-right: 0;
}
.credit{
    text-align: center;
    padding: 1.5rem;
    margin-top: 1.5rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color: #333;
    border-top: 0.1rem solid rgb(0,0,0,1);
}


</style>