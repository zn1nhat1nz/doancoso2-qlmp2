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
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      /* box-sizing: border-box ; */
    }

    .cooperative {
      text-align: center;
      padding: 20px;
      
    }

    .about-our {
      max-width: 800px;
      margin: 0 auto;

    }

    .about-our h1 {
      display: block;
      font-size: 32px;
      color: #DC143C;
      padding-bottom: 10px;
      padding-top: 5px;
    }

    .about-our p {
      font-size: 16px;
      line-height: 1.6;
      color: #666;
      border: 2px solid pink;
    }

    .review .review-slider {
      padding-top: 2rem;
      padding-bottom: 6rem;
    }

    .review .review-slider .box {
      box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
      padding: 3rem 2rem;
      position: relative;
      border: .1rem solid rgba(0, 0, 0, .1);
    }

    .review .review-slider .box .fa-quote-right {
      position: absolute;
      bottom: 3rem;
      right: 3rem;
      font-size: 6rem;
      color: #eee;
    }

    .review .review-slider .box .stars i {
      color: #DC143C;
      font-size: 2rem;
    }

    .review .review-slider .box p {
      color: #866a3b;
      font-size: 1.5rem;
      line-height: 1.5;
      padding-top: 2rem;
    }

    .review .review-slider .box .user {
      display: flex;
      align-items: center;
      padding-top: 2rem;
    }

    .review .review-slider .box .user img {
      height: 6rem;
      width: 6rem;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 1rem;
    }

    .review .review-slider .box .user h3 {
      font-size: 2rem;
      color: #333;
    }

    .review .review-slider .box .user span {
      font-size: 1.5rem;
      color: black;
    }
  </style>


</head>

<body>
  <section id="header" class="header">
    <?php include('./header.php'); ?>
  </section>

  <section class="cooperative">
    <div>
      <div class="about-our">
        <h1>ĐÔI ĐIỀU VỀ CHÚNG TỚ</h1>
        <p>Do có nguồn hàng tiếp viên xách tay từ nước ngoài rất dồi dào và đảm bảo nên mình đã mở một cửa hàng chuyên bán tất cả các mặt hàng được nhiều chị em quan tâm như : mỹ phẩm xách tay hàn quốc, nước hoa, thực phẩm chức năng, sữa công thức, vật dụng gia đình...Với uy tín và chất lượng đặt lên hàng đầu,giá cả hợp lý,mẫu mã phong phú,hàng được cập nhật liên tục.Tất cả sản phẩm mình bán ra đều là hàng Authentic sản xuất trực tiếp tại nhà máy , từ những nguồn uy tín ,khẳng định luôn với các nàng 100% là NO FAKE nhé , mình tuyệt đối không kinh doanh các mặt hàng mỹ phẩm xuất xứ từ trung quốc , fake1 ..... đội lốt các thương hiệu nổi tiếng mà giá rẻ đổ đống ,chất lượng không đảm bảo , sử dụng lên mặt không an toàn chút nào, nhất là đối với những nàng da nhạy cảm :(ai nói là shop mình bán hàng nhái , hàng giả mà chứng minh được mình xin đền tiền gấp 100 lần sản phẩm đó , và cam kết đóng shop luôn )

          Ngoài ra với lợi thế là shop tại nhà , không mất chi phí thuê cửa hàng , tiền thuê nhân công , cộng với việc hầu hết các sản phẩm được nhập tận gốc nên shop luôn luôn có giá rất ưu đãi, mình không khẳng định tất cả các sản phẩm của shop mình là giá rẻ nhất ( vì có nhiều chỗ bán hàng xịn trộn hàng fake mình ko cạnh tranh được ) , nhưng mình đảm bảo các sản phẩm của shop mình luôn có giá tốt nhất và hợp lý nhất so với thị trường , nhất là các sản phẩm mỹ phẩm xách tay Hàn Quốc.
          Nàng nào rảnh có thể ghé shop chơi để xem chất lượng sản phẩm nha (tham khảo mà chưa mua cũng không sao ^^)</p>
        <p>
          Email : phongminh@gmail.com<br>
          Phone : 012345678<br>
          Viber / Zalo : 0904.193.293<br>
          Địa chỉ : 154 Trần Đại Nghĩa , Ngũ Hành Sơn, Đà Nẵng.<br>
          Thời gian mở cửa : 9h30 -21h các ngày trong tuần , chủ nhật : 9h30-18h<br>
        </p>

  </section>

<!-- danh gia khach hang -->
  <section class="review" id="review">

    <h1 class="heading" style="color:#DC143C"> Đánh Giá Của <span> Khách Hàng</span></h1>

    <div class="swiper review-slider">

      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Dịch vụ tuyệt vời! Sản phẩm chất lượng, giao hàng nhanh chóng. Tôi rất hài lòng với trải nghiệm mua sắm của mình.</p>
          <div class="user">
            <img src="../image/kh1.png" alt="">
            <div class="user-info">
              <h3>Thuỳ Trâm</h3>
              <span>Khách hàng hài lòng</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="swiper-slide box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Web thiết kế đẹp, dễ sử dụng. Mỹ phẩm chính hãng, giá cả hợp lý. Đã trở thành địa chỉ mua sắm yêu thích của tôi.</p>
          <div class="user">
            <img src="../image/kh2.webp" alt="">
            <div class="user-info">
              <h3>ToToro</h3>
              <span>Khách hàng hài lòng</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="swiper-slide box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Giao hàng đúng hẹn, đóng gói cẩn thận. Mỗi lần mua hàng đều nhận được những ưu đãi tốt. Rất hạnh phúc với dịch vụ này.</p>
          <div class="user">
            <img src="../image/kh3.jpg" alt="">
            <div class="user-info">
              <h3>Chao Xìn</h3>
              <span>Khách hàng hài lòng</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="swiper-slide box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Sản phẩm đa dạng, chất lượng cao. Nhân viên hỗ trợ nhiệt tình. Mua sắm tại đây luôn là trải nghiệm thú vị và thoải mái.</p>
          <div class="user">
            <img src="../image/kh4.jpg" alt="">
            <div class="user-info">
              <h3>Nát</h3>
              <span>Khách hàng hài lòng</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="swiper-slide box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Web có thông tin sản phẩm rõ ràng, đánh giá chi tiết từ người dùng giúp tôi lựa chọn tốt hơn. Dịch vụ khách hàng nhanh nhẹn và thân thiện.</p>
          <div class="user">
            <img src="../image/kh5.jpg" alt="">
            <div class="user-info">
              <h3>Tiểu Màn Thầu</h3>
              <span>Khách hàng hài lòng</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

      </div>
    </div>

  </section>

  <section class="footer">
    <?php include('./banner.php'); ?>
  </section>
  <script src="../script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>







</body>

</html>