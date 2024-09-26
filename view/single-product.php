<?php include './header.php';
include '../admin/modul/config2.php';
if (isset($_GET['sanpham_id'])) {
    $sanpham_id = $_GET['sanpham_id'];
    $sanpham = mysqli_query($conn, "SELECT * FROM sanpham WHERE sanpham_id = '$sanpham_id'");
    $kq = mysqli_fetch_array($sanpham);
}
?>
<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1 style="margin: 0 !important;">Sản phẩm</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li>Sản phẩm</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Single Product Section Start -->
<div
    class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <form action="./cart.php?action=add" method="POST" action="#">
            <div class="row">
                <div class="col-md-5">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-lg-image-1 tf-element-carousel">
                            <div class="lg-image">
                                <img src="../admin/uploading/<?= $kq['sanpham_img'] ?>" alt="">
                                <a href="../admin/uploading/<?= $kq['sanpham_img'] ?>" class="popup-img venobox"
                                    data-gall="myGallery"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Product Details Left -->
                </div>
                <div class="col-md-7">
                    <!--Product Details Content Start-->
                    <div class="product-details-content">
                        <h2>
                            <?= $kq['sanpham_name'] ?>
                        </h2>
                        <div class="single-product-reviews">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <a class="review-link" href="#">(1 đánh giá của khách hàng)</a>
                        </div>
                        <div class="single-product-price">
                            <span class="price new-price">
                                <?= number_format($kq['sanpham_gia'], 0, ",", ".") ?>.000đ</td>
                            </span>
                        </div>
                        <div class="product-description">
                            <p>Nhập mã MMSALE100 giảm ngay 1% tối đa 100.000đ khi thanh toán qua MOMO</p>
                            <p>Nhập mã VNPAYTAO giảm ngay 200K cho đơn hàng từ 15 Triệu, chỉ áp dụng thanh toán
                                VNPAY-QR tại cửa hàng</p>
                            <p>Nhập mã ZLPIP15 giảm ngay 300K cho đơn hàng từ 20 Triệu, chỉ áp dụng thanh toán qua
                                Ví ZALOPAY tại cửa hàng</p>
                        </div>
                        <div class="single-product-quantity">
                            <div class="product-quantity">
                                <input style="outline: none;padding: 0 15px;width: 45px;" type="text" value="1"
                                    name="quantity[<?= $kq['sanpham_id'] ?>]">
                            </div>
                            <div class="add-to-link">
                                <button class="product-add-btn" data-text="add to cart">Thêm vào giỏ
                                    hàng</button>
                            </div>
                        </div>
                        <div class="wishlist-compare-btn">
                            <a href="#" class="wishlist-btn">Yêu thích</a>
                            <a href="#" class="add-compare">So sánh</a>
                        </div>
                        <div class="product-meta">
                            <span class="posted-in">
                                Thể loại:
                                <a href="#">Iphone</a>,
                                <a href="#">256gb</a>
                            </span>
                        </div>
                        <div class="single-product-sharing">
                            <h3>Chia sẻ sản phẩm</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Product Details Content End-->
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Single Product Section End -->

<!--Product Description Review Section Start-->
<div class="product-description-review-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-review-tab">
                    <!--Review And Description Tab Menu Start-->
                    <ul class="nav dec-and-review-menu">
                        <li>
                            <a class="active" data-toggle="tab" href="#description">Mô tả</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Đánh giá (1)</a>
                        </li>
                    </ul>
                    <!--Review And Description Tab Menu End-->
                    <!--Review And Description Tab Content Start-->
                    <div class="tab-content product-review-content-tab" id="myTabContent-4">
                        <div class="tab-pane fade active show" id="description">
                            <div class="single-product-description">
                                <p>Lý do chọn mua iPhone 15 Pro Max tại Hoàng Tử Gió Mobile
                                    iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi
                                    nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc
                                    chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một
                                    chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang
                                    trọng.</p>
                                <p>Uy tín và kinh nghiệm lâu năm: Với hơn 50 năm hoạt động trên thị trường,
                                    Hoàng Tử Gió Mobile đã xây dựng được một uy tín mạnh mẽ trong ngành công
                                    nghiệp điện thoại di động. Điều này giúp bạn yên tâm về việc mua sắm tại
                                    Hoàng Tử Gió Mobile.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="review-page-comment">
                                <h2>1 đánh giá sản phẩm</h2>
                                <ul>
                                    <li>
                                        <div class="product-comment">
                                            <img src="../assets/images/icons/author.jpg" alt="">
                                            <div class="product-comment-content">
                                                <div class="product-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="meta">
                                                    <strong>admin</strong> - <span>20/10/2023</span>
                                                <div class="description">
                                                    <p>Sản phẩm rất tốt</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-form-wrapper">
                                    <div class="review-form">
                                        <span class="comment-reply-title">Thêm đánh giá </span>
                                        <form action="#">
                                            <p class="comment-notes">
                                                <span id="email-notes">Địa chỉ email không được hiển thị.</span>
                                                Để đảm bảo an toàn
                                                <span class="required">*</span>
                                            </p>
                                            <div class="comment-form-rating">
                                                <label>Đánh giá của bạn</label>
                                                <div class="rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="input-element">
                                                <div class="comment-form-comment">
                                                    <label>Bình luận</label>
                                                    <textarea name="message" cols="40" rows="8"></textarea>
                                                </div>
                                                <div class="review-comment-form-author">
                                                    <label>Tên </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="review-comment-form-email">
                                                    <label>Email </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="comment-submit">
                                                    <button type="submit" class="form-button">Xác nhận</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Product Description Review Section Start-->

<!--Product section start-->
<div
    class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
    <div class="container">

        <div class="row">
            <!-- Section Title Start -->
            <div class="col">
                <div class="section-title mb-40 mb-xs-20">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
            <?php
            $sp = mysqli_query($conn, "SELECT * FROM sanpham ORDER BY sanpham_id DESC");
            if ($sp) {
                while ($kq = mysqli_fetch_array($sp)) {
                    ?>
            <div class="col-lg-3">
                <!-- Single Product Start -->
                <div class="single-product mb-30">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="../admin/uploading/<?= $kq['sanpham_img'] ?>" alt="">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3><a href="single-product.php">
                                <?= $kq['sanpham_name'] ?>
                            </a></h3>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4 class="price"><span class="new">
                                <?= number_format($kq['sanpham_gia'], 0, ",", ".") ?>.000đ
                            </span></h4>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
<!--Product section end-->
<!--Brand section start-->
<div class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <!--Brand Slider start-->
            <div class="tf-element-carousel section" data-slick-options='{
                    "slidesToShow": 5,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "autoplay": true
                    }' data-slick-responsive='[
                    {"breakpoint":1199, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":992, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint":576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-1.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-2.jpg" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-3.png" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-4.webp" alt=""></a>
                </div>
                <div class="brand col"><a href="#"><img src="../assets/images/brands/brand-5.png" alt=""></a>
                </div>
            </div>
            <!--Brand Slider end-->
        </div>
    </div>
</div>
<!--Brand section end-->
<?php include './footer.php' ?>